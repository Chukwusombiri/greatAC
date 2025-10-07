<?php

namespace App\Http\Livewire\Admin;

use App\Mail\WithdrawalApprovalMail;
use App\Models\User;
use App\Models\Withdrawal;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;
use Livewire\WithPagination;

class ShowWithdrawals extends Component
{
    use WithPagination;
    public $search = '';

    protected $listeners = [
        'editedWithdrawal' => '$refresh',
    ];
    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function clear()
    {
        $this->search = '';
    }

    public function approve($id)
    {
        $withdrawal = Withdrawal::find($id);
        if ($withdrawal->isApproved = true) {
            $withdrawal->update();
            $user = User::find($withdrawal->user_id);
            $user->acRoi -= $withdrawal->amount;
            $user->update();
            Mail::to($user->email)->send(new WithdrawalApprovalMail($withdrawal));
            $this->emit('approvedWithdrawal');
        } else {
            session()->flash('error', 'withdrawal record approval failed.');
        }
    }

    public function delete($id)
    {
        $withdrawal = Withdrawal::find($id);
        $withdrawal->delete();
        $this->emit('deletedWithdrawal');
    }

    public function render()
    {
        return view('livewire.admin.show-withdrawals', [
            'withdrawals' =>  Withdrawal::where('amount', 'like', '%' . $this->search . '%')
                ->orWhere('wallet', 'like', '%' . $this->search . '%')
                ->orWhereRelation('user','username', 'like', '%' . $this->search . '%')
                ->orderByDesc('created_at')
                ->paginate(7),
        ]);
    }
}
