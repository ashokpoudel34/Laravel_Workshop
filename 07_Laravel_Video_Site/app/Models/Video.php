<?php

namespace App\Models;

use App\Models\User;
use App\Models\Video;
use App\Models\Categories;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Video extends Model
{
    use HasFactory;
    protected $table = "videos";
 
    public function user() {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
 
    public function categories() {
        return $this->belongsTo(Categories::class, "category_id", 'id');
    }
}

