<?php

namespace App\Http\Livewire\Admin;

use App\Mail\WithdrawalApprovalMail;
use App\Models\Withdrawal;
use App\Models\User;
use App\Notifications\WithdrawalApprovalNotification;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;
use Livewire\WithPagination;

class ManageUserWithdrawal extends Component
{
    use WithPagination;

    public $search = '';    
    public User $user;

    protected $listeners = [
        'addedUserWithdrawal'=>'$refresh',
        'editedWithdrawal'=>'$refresh'
    ];

    public function mount(User $user){
        $this->user = $user;
    }

    public function updatedSearch(){
        $this->resetPage();
    }

    public function clear(){
        $this->search = '';
        $this->resetPage();
    }

    public function approve($id){
        $withdrawal = Withdrawal::find($id);
        $withdrawal->isApproved = true;           
        $withdrawal->update();              
        $this->user->acRoi -= $withdrawal->amount;
        $this->user->update();
        Mail::to($this->user->email)->send(new WithdrawalApprovalMail($withdrawal)); 
        $this->emit('approvedWithdrawal');
    }

    public function delete($id){
       $withdrawal = Withdrawal::find($id);      
       $withdrawal->delete();     
       $this->emit('deletedWithdrawal');
    }

    public function render()
    {
        return view('livewire.admin.manage-user-withdrawal',[
            'withdrawals'=>Withdrawal::where('user_id',$this->user->id)
            ->where(function($query){
                $query->where('wallet','like','%'.$this->search.'%')
                ->orWhere('amount','like','%'.$this->search.'%');
            })
            ->orderByDesc('created_at')->paginate(5)
        ]);
    }
}
