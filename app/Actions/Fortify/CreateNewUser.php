<?php

namespace App\Actions\Fortify;

use App\Models\Referral;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array<string, string>  $input
     */
    public function create(array $input): User
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        ])->validate();
               
        $user = User::create([
            'username' => $input['name'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),            
        ]);

        $ref = session()->pull('ref');
        $parent = User::where('referralId','=',$ref)->first();        
        
        if($parent){           
            $user->uplineUsername = $parent->username;
            $user->upline_id = $parent->id;
            $user->save();

            Referral::create([
                'username' => $parent->username,
                'level' => 1,
                'downlineUsername' => $user->username ?? substr($user->email,0,strpos($user->email,'@')),
                'downline_id'=>$user->id,
                'user_id'=>$parent->id, 
            ]);            
        }

        return $user;
    }
}
