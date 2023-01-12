<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\VideosController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\AdminUserController;
use App\Http\Controllers\Admin\CategoriesController;
use App\Http\Controllers\Admin\AdminContactController;



Route::get('/', [HomeController::class, "index"])->name('site.home');
 
Route::get('/contact-us', [ContactController::class, "index"])->name('site.contact');
Route::post('/contact-us', [ContactController::class, "process"]);
 
Route::get('/user/register', [UsersController::class, "register"])->name('site.register');
Route::post('/user/register', [UsersController::class, "register_process"]);
 
Route::get('/user/login', [UsersController::Class, "login"])->name("site.login");
Route::post('/user/login', [UsersController::Class, "login_process"]);

Route::get('/videos/upload', [VideosController::class, "upload"])->name('site.video.upload');
Route::post('/videos/upload', [VideosController::class, "upload_process"]);

Route::get('/admin', [AdminHomeController::Class, "home"])->name("admin_site.home");

Route::get('/admin/login', [AdminUserController::Class, "login"])->name("admin_site.login");
Route::post('/admin/login', [AdminUserController::Class, "login_process"]);

Route::get('/admin/contact-us', [AdminContactController::Class, "index"])->name("admin_site.contact");

Route::get('/admin/categories', [CategoriesController::Class, "index"])->name("admin_site.categories");
Route::post('/admin/categories', [CategoriesController::Class, "insert_category"]);






// Route::get('/videos/browse/1', );

// Route::get('/videos/details/1', );

// Route::get('/videos/upload', );

