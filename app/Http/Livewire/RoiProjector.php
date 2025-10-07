<?php

namespace App\Http\Livewire;

use App\Mail\RoiProjectorMail;
use App\Models\User;
use App\Notifications\ROIProjectorNotification;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rule;
use Livewire\Component;

class RoiProjector extends Component
{
    public $name='';
    public $email='';
    public $amount='';
    public $rate='';
    public $duration='';
    public $comment='';

    protected function rules(){
        return [
            'name'=>['required','string'],
            'email'=>['required','email'],
            'amount'=>['required','numeric','integer'],
            'rate'=>['required','string','in:days,weeks,months,years'],
            'duration'=>['required','numeric','integer'],
            'comment'=>[Rule::excludeIf(!$this->comment),'string']
        ];
    }

    public function submit(){
        $this->validate();
           
        $data = [
            'name'=> $this->name,
            'email'=> $this->email,
            'amount'=> $this->amount,
            'rate'=> $this->rate,
            'duration'=> $this->duration,
            'comment' => $this->comment ?? '',
        ];
        Mail::to(config('mail.mainTo.address'))->send(new RoiProjectorMail($data));  
        $this->emit('roiProjectorSubmitted');
        $this->reset();
    }
    public function render()
    {
        return view('livewire.roi-projector');
    }
}
