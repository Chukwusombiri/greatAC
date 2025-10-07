<?php

namespace App\Http\Livewire\Admin;

use App\Mail\WithdrawalApprovalMail;
use App\Models\User;
use App\Models\UserWallet;
use App\Models\Withdrawal;
use App\Notifications\WithdrawalApprovalNotification;
use Illuminate\Support\Facades\Mail;
use LivewireUI\Modal\ModalComponent;

class AddUserWithdrawal extends ModalComponent
{
    public User $user;
    public $amount;
    public $wallet;
    
    protected $listeners = ['addedUserWallet'=>'$refresh'];

    protected $rules=[
        'amount'=>['required','integer','numeric'],
        'wallet'=>['required','exists:user_wallets,name'],       
    ];

    public function mount(User $user){
        $this->user = $user;
    }

    public function submit(){
        $this->validate();

        if($this->amount > $this->user->acRoi){
            session()->flash('result','Amount exceeds Total funds.');
        }else{
            $withdrawal = new Withdrawal();        
            $withdrawal->amount = $this->amount;
            $withdrawal->user_id = $this->user->id;
            $withdrawal->wallet = $this->wallet;
            $withdrawal->address = UserWallet::where('user_id',$this->user->id)->where('name',$this->wallet)->value('address');                
            $withdrawal->isApproved = true;
    
            if($withdrawal->save()){
                $user = User::find($this->user->id);                                                                     
                $user->acRoi -=  $this->amount;                
                $user->update();            
                Mail::to($user->email)->send(new WithdrawalApprovalMail($withdrawal));                
                $this->closeModalWithEvents([
                    'addedUserWithdrawal',
                ]);        
            }         
        }              
    }

    public function render()
    {
        return view('livewire.admin.add-user-withdrawal',[
            'wallets'=>UserWallet::where('user_id',$this->user->id)->get(),                      
        ]);
    }
}
