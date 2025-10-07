<?php

namespace App\Http\Livewire\User;

use App\Models\Transfer;
use Livewire\Component;
use Livewire\WithPagination;

class TransferHistory extends Component
{
    Use WithPagination;
    public $search = '';

    public function updatedSearch(){
        $this->resetPage();
    }

    public function clear(){
        $this->search = '';
        $this->resetPage();
    }

    public function render()
    {
        $transfers = Transfer::where('sender_id', auth()->user()->id)
        ->orWhere('receiver_id', auth()->user()->id)
        ->where(function($query) {
            $query->where('receiver', 'like', '%'.$this->search.'%')
                  ->orWhere('amount', 'like', '%'.$this->search.'%');
        })
        ->orderByDesc('created_at')
        ->paginate(7);
        
        return view('livewire.user.transfer-history',[
            'transfers'=>$transfers,
        ]);
    }
}
