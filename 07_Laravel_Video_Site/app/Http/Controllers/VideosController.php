<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class VideosController extends Controller
{
    public function upload() {
        return view("video_upload");
    }
   
    public function upload_process(Request $request) {
        $request->validate([
            "title" => "required",
            "category" => "required|integer",
            "description" => "required|min:30",
            "thumb" => "required|file|mimes:jpg",
            "video_file" => "required|file|mimes:mp4|max:5120"
        ]);
 
        $x1 =  $request->file('thumb')->store("thumbs");
        $x2 =  $request->file('video_file')->store("videos");
 
        $v = new Video();
        $v->category_id = $request->category;
        // $v->user_id = 
        $v->title = $request->title;
        $v->description = $request->description;
        $v->thumb = $request->thumb;
        $v->video_file = $video_file;

    }
}
