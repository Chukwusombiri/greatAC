<?php

namespace App\Http\Livewire\User;

use App\Models\Transfer;
use App\Models\User;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\Rule;
use Livewire\Component;

class CreateTransfer extends Component
{
    public $amount = '';
    public $receiver; 
    public $receiverName='';  
    public $receiverEmail='';  
    public $allUsers = [];

    protected function rules(){
        return [
            'amount' => ['required','numeric','integer','min:1','lte:' . auth()->user()->acRoi],
            'receiverName' => ['required','string'],
            'receiverEmail' => ['required','email',Rule::exists('users','email'), Rule::notIn(auth()->user()->email)],
        ];
    } 

    protected $validationAttributes = [
        'receiverName' => 'Beneficiary name',
        'receiverEmail' => 'Beneficiary email address',
    ];

    protected $messages = [
        'exists' => ':attribute doesn\'t exist in our records',
        'required' => ':attribute cannot be empty',    
    ];
    
    public function updated($propertyName){
        $this->validateOnly($propertyName);
    }

    public function transfer(){
        $this->validate();   
        
        try {    
            $this->receiver = User::where('email', $this->receiverEmail)->first();
            
            $transfer = new Transfer();
            $transfer->amount = $this->amount;
            $transfer->sender = auth()->user()->username ?? auth()->user()->first_name.' '.auth()->user()->last_name;
            $transfer->sender_id = auth()->user()->id;
            $transfer->receiver = $this->receiver->username ?? $this->receiver->first_name.' '.$this->receiver->last_name; 
            $transfer->receiver_id = $this->receiver->id;           
            $transfer->save();
            session()->put('transfer',[
                'amount'=>$transfer->amount,
                'receiver'=>$transfer->receiver,
            ]);
            return redirect()->route('user.transfer.complete');
        } catch (\Throwable $th) {
            //throw $th;
            Log::error($th->getMessage());
            session()->flash('error','Something went wrong, try again later.');
        }
    }

    public function render()
    {
        return view('livewire.user.create-transfer');
    }
}
