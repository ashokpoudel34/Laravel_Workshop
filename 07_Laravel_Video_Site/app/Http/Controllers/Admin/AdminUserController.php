<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminUserController extends Controller
{
    public function login() {
        return view("admin/login");
    }

    public function login_process(Request $request){
        $request->validate([
            "email" => "required|email",
            'password' => 'min:6|required',

        ]);
 
        echo "Ok!!";
    }
}
