<?php

namespace App\Http\Livewire\Admin;

use App\Models\Deposit;
use App\Models\Plan;
use App\Models\User;
use App\Models\Wallet;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use Livewire\WithFileUploads;
use LivewireUI\Modal\ModalComponent;

class EditDeposit extends ModalComponent
{
    use WithFileUploads;
    public Deposit $deposit;
    public $amount='';
    public $wallet='';
    public $user_id='';
    public $plan='';
    public $receipt;

    protected $listeners = ['receiptDeleted'=>'$refresh'];

    protected function rules(){
        return [
            'amount'=>'required|numeric|integer',
            'wallet'=>['required','exists:wallets,name'],
            'plan'=>'required|exists:plans,name',
            'receipt'=>[Rule::excludeIf(!$this->receipt),'image','max:2000'],
        ];
    }

    public function mount(Deposit $deposit){
        $this->deposit = $deposit;
        $this->wallet = $this->deposit->wallet;
        $this->plan=$this->deposit->plan;
        $this->user_id=$this->deposit->user_id;
        $this->amount =$this->deposit->amount;
    }

    public function save(){
        $this->validate();
                    
        $this->deposit->wallet = $this->wallet;
        $this->deposit->plan = $this->plan;
        $this->deposit->address = Wallet::where('name',$this->wallet)->value('address');
        $this->deposit->amount = $this->amount;
        if($this->receipt){
            if($this->deposit->receipt!==null){
                Storage::disk('public')->delete($this->deposit->receipt);
            }   
            $this->deposit->receipt = $this->receipt->storePublicly('receipts','public');
        }
        $this->deposit->save();

        $this->closeModalWithEvents(['editedDeposit']);
    } 

    public function deleteReceipt(){
        if($this->deposit->receipt!==null){
            Storage::disk('public')->delete($this->deposit->receipt);
            $this->deposit->receipt = null;
            $this->deposit->save();
        }     

        $this->emit('receiptDeleted');
    }

    public function render()
    {
        return view('livewire.admin.edit-deposit',[
            'wallets'=>Wallet::all(),
            'plans'=>Plan::all(),
        ]);
    }
}
