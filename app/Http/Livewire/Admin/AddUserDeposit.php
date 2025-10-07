<?php

namespace App\Http\Livewire\Admin;

use App\Mail\DepositApprovalMail;
use App\Mail\RewardDownlineMail;
use App\Mail\RewardUplineMail;
use App\Models\Deposit;
use App\Models\Plan;
use App\Models\Referral;
use App\Models\User;
use App\Models\Wallet;
use App\Notifications\InvestmentApprovalNotification;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rule;
use LivewireUI\Modal\ModalComponent;

class AddUserDeposit extends ModalComponent
{
    public $user;
    public $amount = '';
    public $wallet = '';
    public $plan = '';

    protected function rules()
    {
        return [
            'amount' => ['required', 'integer', 'numeric'],
            'plan' => ['required', 'exists:plans,name'],
            'wallet' => ['required', 'exists:wallets,name'],
        ];
    }

    public function mount(User $user)
    {
        $this->user =  $user;
    }

    public function submit()
    {
        $this->validate();

        try {
            $deposit = new Deposit();
            $deposit->amount  = $this->amount;
            $deposit->plan =  $this->plan;
            $deposit->wallet = $this->wallet;
            $deposit->isApproved = true;
            $deposit->user_id = $this->user->id;
            $deposit->address = Wallet::where('name', $this->wallet)->value('address');
            $deposit->save();

            $user = User::find($this->user);
            $user->acBal += $this->amount;
            $user->acRoi += $this->amount;
            $user->isEarning = true;

            /* find plan */
            $planId = Plan::where('name', $deposit->plan)->value('id');
            if ($planId) {
                $user->plan_id = $planId;
            }
            /* send email to user */
            Mail::to($user->email)->send(new DepositApprovalMail($deposit));

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
            
            $this->closeModalWithEvents(['addedDeposit']);
        } catch (\Throwable $th) {
            Log::error($th->getMessage());
            $this->closeModal();
        }
    }

    public function render()
    {
        return view('livewire.admin.add-user-deposit', [
            'wallets' => Wallet::all(),
            'plans' => Plan::all(),
        ]);
    }
}
