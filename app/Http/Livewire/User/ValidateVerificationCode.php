<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Validation\ValidationException;
use Livewire\Component;

class ValidateVerificationCode extends Component
{
    public $code;
    
    public function verify()
    {
        $this->validate([
            'code' => ['required', 'string', 'size:6'],
        ]);

        $user = User::find(Auth::id());

        $cachedCode = Cache::get("email_verification_code:{$user->id}");

        if (!$cachedCode || $cachedCode !== $this->code) {
            throw ValidationException::withMessages([
                'code' => __('The verification code is invalid or has expired.'),
            ]);
        }

        if (!$user->hasVerifiedEmail()) {
            $user->markEmailAsVerified();
        }

        Cache::forget("email_verification_code:{$user->id}");

        return redirect()->route('user.dashboard');
    }

    public function resend(){
        $user = User::find(Auth::id());
        $user->sendEmailVerificationNotification();
        $this->reset();
        session()->flash('status','verification-code-sent');
        return;
    }


    public function render()
    {
        return view('livewire.user.validate-verification-code');
    }
}
