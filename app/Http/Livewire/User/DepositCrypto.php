<?php

namespace App\Http\Livewire\User;

use App\Models\Deposit;
use App\Models\Plan;
use App\Models\Wallet;
use Exception;
use Illuminate\Support\Facades\Log;
use Livewire\Component;

class DepositCrypto extends Component
{
    public $amount = '';
    public $selectedWallet;
    public $selectedWalletName = '';
    public \App\Models\Plan $plan;
    public $allWallets = [];

    public function mount($sentPlan)
    {
        $this->plan = $sentPlan;
        $this->allWallets =  Wallet::all()->map(fn($wallet) => [
            'id' => $wallet->id,
            'name' => $wallet->name
        ]);
    }

    public function tryValue($value)
    {
        try {
            $wallet = Wallet::findOrFail($value);
            if ($this->selectedWallet == $wallet->id && $this->selectedWalletName === $wallet->name) {
                return;
            }
            $this->selectedWallet = $wallet->id;
            $this->selectedWalletName = $wallet->name;
        } catch (\Throwable $th) {
            Log::error($th->getMessage());
            session()->flash('error', 'Oops! something went wrong, try again later.');
        }
    }

    protected $rules = [
        'amount' => ['required', 'numeric', 'integer',],
        'selectedWallet' => ['required', 'string', 'exists:wallets,id'],
    ];

    protected $validationAttributes = [
        'selectedWallet' => 'Funding source',
    ];

    public function deposit()
    {
        $this->validate([
            'amount' => array_filter([
                'required',
                'numeric',
                'integer',
                'gte:' . $this->plan->min,
                'lte:' . $this->plan->max,
            ]),
            'selectedWallet' => ['required', 'string', 'exists:wallets,id'],
        ]);

        try {
            $planName = Plan::where('id', $this->plan->id)->first() ? $this->plan->name : null;
            $planId = $this->plan->id;
            if (!$planName) {
                throw new Exception('unable to find selected investment plan');
            }
            $wallet = Wallet::find($this->selectedWallet);
            $deposit = new Deposit();
            $deposit->amount = $this->amount;
            $deposit->wallet = $wallet->name;
            $deposit->address = $wallet->address;
            $deposit->user_id = auth()->user()->id;
            $deposit->plan = $planName;
            $deposit->plan_id = $planId;
            $deposit->save();
            
            \App\Events\UserDeposited::dispatch($deposit);
            session()->put('deposit', [
                'wallet' => $deposit->wallet,
                'amount' => $deposit->amount,
                'address' => $deposit->address,
            ]);
            return redirect()->route('user.deposit.complete');
        } catch (\Throwable $th) {
            //throw $th;
            Log::error($th->getMessage());
            session()->flash('error', 'something went wrong, try again later.');
        }
    }

    public function render()
    {
        return view('livewire.user.deposit-crypto');
    }
}
