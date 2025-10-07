<?php

namespace App\Http\Livewire\Admin;

use App\Models\UserWallet;
use App\Models\Withdrawal;
use LivewireUI\Modal\ModalComponent;

class EditWithdrawal extends ModalComponent
{
    public Withdrawal $withdrawal;
    public $amount;
    public $wallet;    

    protected function rules(){
        return[
            'amount'=>'required|numeric|integer',
            'wallet'=>'required|exists:user_wallets,name',
        ];
    }

    protected $validationAttributes=[
        'wallet'=>'user wallet',
    ];
    
    public function mount(Withdrawal $withdrawal){
        $this->withdrawal = $withdrawal;
        $this->amount = $this->withdrawal->amount;     
        $this->wallet = $this->withdrawal->wallet;  
    }

    public function save(){
        $this->validate();
        if($this->amount > $this->withdrawal->user->acRoi){
            session()->flash('result','Amount exceeded user\'s ROI.');
        }else{            
            $this->withdrawal->amount = $this->amount;
            $this->withdrawal->wallet = $this->wallet;
            $this->withdrawal->address= UserWallet::where('user_id',$this->withdrawal->user_id)->where('name',$this->wallet)->value('address');
            $this->withdrawal->update();
            $this->closeModalWithEvents(['editedWithdrawal']);
        }
    }
    public function render()
    {
        return view('livewire.admin.edit-withdrawal',[
            'wallets'=>UserWallet::where('user_id',$this->withdrawal->user_id)->get(),
        ]);
    }
}
