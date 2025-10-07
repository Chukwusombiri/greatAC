<?php

namespace App\Http\Livewire\User;

use Livewire\Component;

class CreateDeposit extends Component
{    
    public \App\Models\Plan $plan;   
    public $isFundFromBal = false;

    public function mount($sentPlan){
        $this->plan = $sentPlan;       
    }

    public function render()
    {
        return view('livewire.user.create-deposit');
    }
}
