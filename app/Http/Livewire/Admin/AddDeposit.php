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
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class AddDeposit extends Component
{
    public $wallet;
    public $user;
    public $amount;
    public $plan;
    public $search = '';
    public $allUsers = [];

    protected function rules()
    {
        return [
            'amount' => ['required', 'integer', 'numeric'],
            'plan' => ['required', 'string', 'exists:plans,name'],
            'wallet' => ['required', 'string', 'exists:wallets,name'],
            'user' => ['required', 'exists:users,id'],
        ];
    }


    public function handleFocus()
    {
        $this->allUsers = User::all();
    }


    public function updatedSearch()
    {
        $this->allUsers = User::where('username', 'like', '%' . $this->search . '%')
            ->orWhere('email', 'like', '%' . $this->search . '%')
            ->get();
    }

    public function updatedWallet()
    {
        if ($this->wallet === 'create wallet') {
            return redirect()->route('admin.company_wallet.create');
        }
    }

    public function updatedPlan()
    {
        if ($this->plan === 'create plan') {
            return redirect()->route('admin.plan.create');
        }
    }

    public function setUser($id)
    {
        $this->user = $id;
        $this->search = User::where('id', $id)->value('username');
        $this->allUsers = [];
    }

    public function submit()
    {
        $this->validate();

        try {
            $deposit = new Deposit();
            $deposit->amount  = $this->amount;
            $deposit->plan =  $this->plan;
            $deposit->wallet = $this->wallet;
            $deposit->address = Wallet::where('name', $this->wallet)->value('address') ?? 'none';
            $deposit->isApproved = true;
            $deposit->user_id = $this->user;
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

            /* reward upline */
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

            return redirect()->route('admin.deposits')->with('success', 'deposit record was created and approved successfully.');
        } catch (\Throwable $th) {
            Log::error($th->getMessage());
            return redirect()->route('admin.deposits')->with('error', 'Unable to create deposit, contact site developer.');
        }
    }

    public function render()
    {
        return view('livewire.admin.add-deposit', [
            'wallets' => Wallet::all(),
            'plans' => Plan::all(),
        ]);
    }
}
