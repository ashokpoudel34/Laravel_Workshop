<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Video;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {

        // $u = User::find(2);
        // dd($u->name." ".$u->email);

        //User:: create($request->all());  //has security issues can add extra entries by inspect
        
        // $users = User::get();

        // foreach($users as $u){
        //     echo $u->name."<br>";
        // }
        
        // $u = User:: find(2);
        // $u->name = 'Aakash';
        // $u->phone= 8009892588;
        // $u->save();
        
        // $u = User::find(2);
        // $u->delete();
        
        // User::where("id", "2")->delete();

        // $v = Video::find(1);
        // dd($v->toArray());

        $v = Video::find(1);

        echo $v->title."<br>";
        echo $v->description."<br>";
        echo $v->user->name."<br>";
        echo $v->user->phone."<br>";
        echo $v->categories->name."<br>";

        //return view("home");
    }
}
