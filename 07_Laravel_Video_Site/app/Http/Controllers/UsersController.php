<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function register() {
        return view("register");
    }

    public function register_process (Request $request) {
     
        $request->validate([
            "name" => "required",
            "phone" => "required|digits:10",
            "email" => "required|email",
            "password" => "required|min:6|confirmed",
            "password_confirmation" => "required"
        ],[
            //"required" => "Hey, you forgot this!"
            "phone.required" => "We need phone to call you back!",
            "phone.digits" => "I dont think this phone will ring!"
        ]);
 
        echo "Ok!!";
 
    }

    public function login() {
        return view("login");
    }
}
