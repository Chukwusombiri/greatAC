<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Subscribe extends Component
{
    public $email = '';    

    public function submit(){
        $this->validate([
            'email' => 'required|email',
        ]);

        session()->flash('subscribed','Good job! You are now subscribed to our newsletter');
        $this->reset();
    }
    public function render()
    {
        return view('livewire.subscribe');
    }
}
