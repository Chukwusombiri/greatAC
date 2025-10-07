<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use App\Models\UserWallet;
use Livewire\Component;
use Livewire\WithPagination;

class ManageUserWallet extends Component
{
    use WithPagination;
    public User $user;
    public $search = '';
    protected $listeners =['addedUserWallet'=>'$refresh','editedUserWallet'=>'$refresh'];

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

    public function deleteWallet($id){
       $wallet = UserWallet::find($id);      
       $wallet->delete();     
       $this->emit('deletedUserWallet');
    }

    public function render()
    {
        return view('livewire.admin.manage-user-wallet',[
            'userwallets'=>UserWallet::where('user_id',$this->user->id)
            ->where('name','like','%'.$this->search.'%')
            ->orderByDesc('created_at')
            ->paginate(7),
        ]);
    }
}
