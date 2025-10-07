<?php

namespace App\Http\Livewire\Admin;

use App\Mail\DepositApprovalMail;
use App\Mail\RewardDownlineMail;
use App\Mail\RewardUplineMail;
use App\Models\Deposit;
use App\Models\Plan;
use App\Models\Referral;
use App\Models\User;
use App\Notifications\DepositApprovalNotification;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithPagination;

class ManageUserDeposits extends Component
{
    Use WithPagination;
    public $search = '';
    public $perPage = 7;
    public User $user;

    protected $listeners=[
    'addedDeposit'=>'$refresh',
    'editedDeposit'=>'$refresh'];

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
        $deposit = Deposit::findOrFail($id);

        // Exit early if already approved
        if ($deposit->isApproved) {
            return;
        }

        // Mark as approved and save
        $deposit->isApproved = true;
        $deposit->save();


        $user = User::findOrFail($this->user->id);
        $user->acBal += $deposit->amount;
        $user->acRoi += $deposit->amount;
        $user->isEarning = true;

        // Assign plan if found
        $planId = Plan::where('name', $deposit->plan)->value('id');
        if ($planId) {
            $user->plan_id = $planId;
        }

         // Send approval mail to user
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

        $this->emit('approvedDeposit');
    }

    public function delete($id){        
       $deposit = Deposit::find($id);  
       if($deposit->receipt!==null){
        Storage::disk('public')->delete($deposit->receipt);
       }    
       $deposit->delete();
       $this->emit('deletedDeposit');      
    }

    public function render()
    {
        return view('livewire.admin.manage-user-deposits',[
            'deposits' => Deposit::where('user_id',$this->user->id)
            ->where(function($query){
                $query->where('plan','like','%'.$this->search.'%')
                ->orWhere('wallet','like','%'.$this->search.'%')
                ->orWhere('amount','like','%'.$this->search.'%');
            })
            ->orderByDesc('created_at')->paginate(7)
        ]);
    }
}
