<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\VideosBrowseController;

class VideosBrowseController extends Controller
{
    public function browse(){
        return view("video_browse");
    }

    public function details(){
        return view ("video_details");
    }
}
