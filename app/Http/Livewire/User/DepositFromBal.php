<?php

namespace App\Http\Livewire\User;

use App\Models\Deposit;
use App\Models\Plan;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Log;
use Livewire\Component;

class DepositFromBal extends Component
{
    public $amount = '';
    public \App\Models\Plan $plan;
    public $portfolioBal = 0;

    public function mount($sentPlan)
    {
        $this->plan = $sentPlan;
        $this->portfolioBal = round(auth()->user()->acRoi);
    }

    protected $validationAttributes = [
        'portfolioBal' => 'Portfolio Balance',
    ];


    public function deposit()
    {
        $this->validate([
            'amount' => ['required', 'numeric', 'integer', 'gte:' . $this->plan->min, 'lte:' . $this->plan->max],
            'portfolioBal' => ['required', 'numeric', 'gte:' . $this->plan->min,],
        ]);
        try {
            $planName = Plan::where('id', $this->plan->id)->first() ? $this->plan->name : null;
            if (!$planName) {
                throw new Exception('unable to find selected investment plan');
            }
            $deposit = new Deposit();
            $deposit->amount = $this->amount;
            $deposit->wallet = 'Portfolio balance';
            $deposit->address = 'Portfolio balance';
            $deposit->user_id = auth()->user()->id;
            $deposit->isFromBal = true;
            $deposit->plan = $planName;
            $deposit->isApproved = true;
            $deposit->save();

            $user = User::findOrFail($deposit->user_id);
            $user->acBal += $deposit->amount;
            $user->isEarning = true;

            $planId = Plan::where('name', $planName)->value('id');
            if ($planId) {
                $user->plan_id = $planId;
            }
            $user->save();

            session()->put('deposit', [
                'amount' => $deposit->amount,
                'plan'  => $planName
            ]);

            return redirect()->route('user.deposit.completeFromBal');
        } catch (\Throwable $th) {
            Log::error($th->getMessage());
            session()->flash('error', 'something went wrong, try again later.');
        }
    }
    public function render()
    {
        return view('livewire.user.deposit-from-bal');
    }
}
