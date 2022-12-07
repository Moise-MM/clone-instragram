<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
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
Route::get('/', [UserController::class,'login'])->name('user.login');
//
Route::get('/account/singup', [UserController::class,'register'])->name('user.register');
//
Route::post('/account/store',[UserController::class,'store'])->name('user.store');
//
Route::post('/login',[UserController::class,'authenticate'])->name("user.auth");

//---------------------------
//Posts
Route::get('/posts', [PostController::class,'index'])->name('post.index');
