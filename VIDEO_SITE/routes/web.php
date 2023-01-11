<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\MainController;




Route::get('/', [MainController::class, "index"]);

Route::get('/home', [HomeController::class, "index"]);
 
Route::get('/contact-us', [ContactController::class, "index"]);
 
Route::get('/user/register', [UsersController::class, "register"]);
 
Route::get('/user/login', [UsersController::Class, "login"]);