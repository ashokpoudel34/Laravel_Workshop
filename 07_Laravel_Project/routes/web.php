<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\HomeController::class, "show"]);
Route::get('/register', [App\Http\Controllers\UserController::class, "abc"]);
Route::get('/login', [App\Http\Controllers\LoginController::class, "xyz"]);
//Route::get('/register', "App\Http\Controllers\UserController@register");


