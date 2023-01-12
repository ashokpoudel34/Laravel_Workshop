<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index() {
        return view("contact");
    }

    public function process (Request $request) {
     
        $request->validate([
            "name" => "required",
            "phone" => "required|digits:10",
            "email" => "required|email",
            "subject" => "required",
            "message" => "required|min:30"
        ]);

        $c = new Contact();
        $c->name = $request->name;
        $c->phone = $request->phone;
        $c->email = $request->email;
        $c->subject = $request->subject;
        $c->message = $request->message;

        $c->save();
 
        echo "Ok!!";
 
    }
}
