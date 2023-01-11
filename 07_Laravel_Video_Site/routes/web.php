<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ContactController;



Route::get('/', [HomeController::class, "index"])->name('site.home');
 
Route::get('/contact-us', [ContactController::class, "index"])->name('site.contact');
 
Route::post('/contact-us', [ContactController::class, "process"]);
 
Route::get('/user/register', [UsersController::class, "register"])->name('site.register');
 
Route::post('/user/register', [UsersController::class, "register_process"]);
 
Route::get('/user/login', [UsersController::Class, "login"])->name("site.login");

// Route::get('/videos/browse/1', );

// Route::get('/videos/details/1', );

// Route::get('/videos/upload', );

