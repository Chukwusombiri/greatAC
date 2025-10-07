<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Rule;

class UserContactController extends Controller
{
    public function index(){
        return view('user.identify_details');
    }

    public function savePersonal(Request $request){
        $request->validate([
            'username' => [Rule::excludeIf(auth()->user()->username!==null),'required','string'],
            'first_name'=>'required|string',
            'last_name'=>'required|string',
        ],[],[
            'first_name' => 'First name',
            'last_name' => 'First name',
        ]);

        $user = User::findOrFail(auth()->user()->id);        
        $user->username = $request->username ?? auth()->user()->username;
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->update();
        return redirect()->route('user.get.contact');
    }    

    public function getContact(){        
        return view('user.getContact');
    }
}
