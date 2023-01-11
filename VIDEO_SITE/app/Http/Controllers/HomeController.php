<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $x = "<i>yyy</i>";
        $a = 1;
        $b = 2;

        $t = compact('a','b');
        print_r($t);

    return view("home",compact('x','a','b') );
    //return view("home",[ "x" => $a, "y" => $b ]);
    }
}
