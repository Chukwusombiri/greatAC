<?php

namespace App\Http\Livewire\Admin;

use App\Mail\TransferReceivedMail;
use App\Mail\TransferRejectionMail;
use App\Mail\TransferSentMail;
use App\Models\Transfer;
use App\Models\User;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;
use Livewire\WithPagination;

class ShowTransfers extends Component
{
    use WithPagination;
    public $search = '';
    
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
        try {
            $transfer = Transfer::find($id);
            $transfer->status = 'transferred';
            $transfer->update();

            if($transfer->sender_id){
                $this->debitSender($transfer);
            }  
            
            if($transfer->receiver_id){
                $this->creditReceiver($transfer);
            }  

            $this->emit('approvedTransfer');
        } catch (\Throwable $th) {
            throw $th;
            session()->flash('error', 'Fund transfer approval failed.');
        }
    }

    public function debitSender($transfer){
        $user = User::findOrFail($transfer->sender_id);
        if(($user->acRoi-$transfer->amount)<$user->acBal){
            $user->acBal = $user->acRoi-$transfer->amount;
        }
        $user->acRoi -= $transfer->amount;
        $user->update();
        Mail::to($user->email)->send(new TransferSentMail($transfer));
    }

    public function creditReceiver($transfer){
        $user = User::findOrFail($transfer->receiver_id);
        $user->acRoi += $transfer->amount;
        $user->update();
        Mail::to($user->email)->send(new TransferReceivedMail($transfer));
    }

    public function delete($id)
    {
        $transfer = Transfer::find($id);
        $transfer->delete();
        $this->emit('deletedTransfer');
    }

    public function reject($id){
        try {
            $transfer = Transfer::findOrFail($id);
            $transfer->status = 'rejected';
            $transfer->update();
            if($transfer->sender_id){
                $user = User::findOrFail($transfer->sender_id);
                Mail::to($user->email)->send(new TransferRejectionMail($transfer->amount, $transfer->receiver));
            }
            $this->emit('rejectedTransfer');
        } catch (\Throwable $th) {
            //throw $th;
            Log::error($th->getMessage());
            session()->flash('error','Unable to carry out operation, contact site manager.');
        }
    }

    public function render()
    {
        return view('livewire.admin.show-transfers', [
            'transfers' =>  Transfer::where('amount', 'like', '%' . $this->search . '%')
                ->orWhere('sender', 'like', '%' . $this->search . '%')
                ->orWhere('receiver','like', '%' . $this->search . '%')
                ->orderByDesc('created_at')
                ->paginate(7),
        ]);
    }
}
