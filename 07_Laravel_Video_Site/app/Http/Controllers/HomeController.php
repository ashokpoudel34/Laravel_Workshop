<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {

        $u = User::find(2);
        dd($u);
    //User:: create($request->all());  //has security issues can add extra entries by inspect
        //return view("home");

    }
}
