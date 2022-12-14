<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserPostController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Users
Route::get('/login', [UserController::class,'login'])->name('login');
//
Route::get('/account/singup', [UserController::class,'register'])->name('user.register');
//
Route::post('/account/store',[UserController::class,'store'])->name('user.store');
//
Route::post('/login',[UserController::class,'authenticate'])->name("user.auth");
//
Route::post('/logout', [UserController::class, 'logout'])->name('user.logout');

//---------------------------
//Posts
Route::get('/', [PostController::class,'index'])->name('post.index');
//
Route::get("/p/create",[PostController::class,'create'])->name('post.create');
//
Route::post('/p/store',[PostController::class,'store'])->name('post.store');
//
Route::get("p/{post}",[PostController::class,'show'])->name('post.show');

//--------------------------
//Profile
Route::get('/profile/{user?}',[ProfileController::class,'index'])->name('profile.index');
//
Route::get("/profile/{user}/edit",[ProfileController::class,'edit'])->name('profile.edit');
//
Route::put('/profile/{user}/update',[ProfileController::class,'update'])->name('profile.update');
