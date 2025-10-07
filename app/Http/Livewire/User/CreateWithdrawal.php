<?php

namespace App\Http\Livewire\User;

use App\Models\UserWallet;
use App\Models\Withdrawal;
use Illuminate\Support\Facades\Log;
use Livewire\Component;

class CreateWithdrawal extends Component
{
    public $amount = '';
    public $selectedWallet = '';
    public $selectedAddress = '';
    public $allWallets;   

    protected $rules = [
        'amount' => ['required','numeric','integer',],
        'selectedWallet' => ['required','string','exists:user_wallets,name'],
        'selectedAddress' => ['required','string','exists:user_wallets,address'],
    ];

    protected $validationAttributes = [
        'selectedWallet' => 'Payment method',
        'selectedAddress' => 'Payment method details',
    ];

    public function tryValue($value){
        try {            
            $wallet = UserWallet::findOrFail($value);   
            if($this->selectedWallet!=='' && $this->selectedWallet===$wallet->name){
                $this->selectedWallet = '';  
                $this->selectedAddress = '';
                return;
            }
            $this->selectedWallet = $wallet->name;  
            $this->selectedAddress = $wallet->address;
        } catch (\Throwable $th) {
            Log::error('Unable to reolve wallet: '.$th);
            session()->flash('error','Unable to resolve payment method');
        }        
    }

    public function withdraw(){
        $this->validate(['amount' => ['required','numeric','integer','min:1','lte:' . auth()->user()->acRoi,],
        'selectedWallet' => ['required','string','exists:user_wallets,name'],
        'selectedAddress' => ['required','string','exists:user_wallets,address'],]);    
        
        if(auth()->user()->isEarning){
            session()->flash('error','You have an active trading session, you can\'t make a withdrawal now.');
            $this->reset();
            return;
        }
        try {            
            $withdrawal = new Withdrawal();
            $withdrawal->amount = $this->amount;
            $withdrawal->wallet = $this->selectedWallet;
            $withdrawal->address = $this->selectedAddress;
            $withdrawal->user_id = auth()->user()->id;            
            $withdrawal->save();
            //\App\Events\UserWithdrew::dispatch($withdrawal);
                        
            session()->put('withdrawal', [
                'wallet' => $withdrawal->wallet,
                'amount' => $withdrawal->amount,                
            ]);
            return redirect()->route('user.withdrawal.complete');
        } catch (\Throwable $th) {
            throw $th;
            Log::error($th->getMessage());
            session()->flash('error','Something went wrong, try again later.');
        }
    }

    public function render()
    {
        $this->allWallets = \App\Models\UserWallet::where('user_id',auth()->user()->id)->get();
        return view('livewire.user.create-withdrawal');
    }
}
