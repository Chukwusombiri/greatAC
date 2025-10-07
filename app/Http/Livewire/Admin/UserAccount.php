<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;

class UserAccount extends Component
{
    public User $user;

    public function mount(User $user){
        $this->user = $user;
    }

    public function render()
    {
        return view('livewire.admin.user-account',[
            'user' => User::with(['withdrawals','deposits','userwallets'])->find($this->user->id),
        ]);
    }
}
