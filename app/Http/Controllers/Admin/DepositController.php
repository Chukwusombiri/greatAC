<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;

class DepositController extends Controller
{
    public function index(){
        $admin = Admin::find(auth('admin')->user()->id);
        $admin->last_sign_in_at = now();
        $admin->save();    
        return view('admin.deposits');
    }

    public function create()
    {                                        
        return view('admin.addDeposit');              
    }    
}
