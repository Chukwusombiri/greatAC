<?php

namespace App\Http\Livewire\Admin;

use App\Models\Deposit;
use App\Models\Plan;
use App\Models\User;
use App\Mail\DepositApprovalMail;
use App\Mail\RewardDownlineMail;
use App\Mail\RewardUplineMail;
use App\Models\Referral;
use App\Notifications\ReferralIncomeNotification;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;
use Livewire\WithPagination;

class ShowDeposits extends Component
{
    use WithPagination;
    public $search = '';

    protected $listeners = [
        'editedDeposit' => '$refresh',
        'approvedDeposit' => '$refresh',
        'deletedDeposit' => '$refresh',
    ];

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function clear()
    {
        $this->search = '';
    }

    public function approve($id)
    {
        $deposit = Deposit::findOrFail($id);

        // Exit early if already approved
        if ($deposit->isApproved) {
            return;
        }

        try {            
            // Mark as approved and save
            $deposit->isApproved = true;
            $deposit->save();

            $user = User::findOrFail($deposit->user_id);
            $user->acBal += $deposit->amount;
            $user->acRoi += $deposit->amount;
            $user->isEarning = true;

            // Assign plan if found
            $planId = Plan::where('name', $deposit->plan)->value('id');
            if ($planId) {
                $user->plan_id = $planId;
            }

            // Send approval mail to user

            Mail::to($user->email)->send(new DepositApprovalMail($deposit));

            // Reward upline if this is their first deposit
            if ($user->upline_id && !$user->hasDeposited) {
                $reward = ceil($deposit->amount * 0.1);

                $referrer = Referral::where('downline_id', $user->id)->first();
                if ($referrer && $referrer->user) {
                    $referrer->bonus = $reward;
                    $referrer->save();

                    $upline = $referrer->user;
                    $upline->acRoi += $reward;
                    $upline->refBonus = $reward;
                    $upline->save();

                    Mail::to($upline->email)->send(new RewardUplineMail($reward));
                }
            }

            // Finalize user state
            $user->hasDeposited = true;
            $user->save();
            $this->emit('approvedDeposit');
        } catch (\Throwable $th) {
            Log::error($th->getMessage());
            session()->flash('error', 'Oops! Unable to complete operation, contact site engineer');
        }
    }


    public function delete($id)
    {
        $deposit = Deposit::find($id);
        $deposit->delete();
        $this->emit('deletedDeposit');
    }

    public function render()
    {
        return view('livewire.admin.show-deposits', [
            'deposits' => Deposit::where('amount', 'like', '%' . $this->search . '%')
                ->orWhere('plan', 'like', '%' . $this->search . '%')
                ->orWhere('wallet', 'like', '%' . $this->search . '%')
                ->orWhereRelation('user', 'username', 'like', '%' . $this->search . '%')
                ->orderByDesc('created_at')
                ->paginate(7),
        ]);
    }
}
