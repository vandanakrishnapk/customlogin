<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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


Route::get('/',[HomeController::class,'index'])->name('index');
Route::get('/register',[HomeController::class,'register'])->name('register');
Route::post('/create',[HomeController::class,'create'])->name('create');
Route::get('/showlogin',[HomeController::class,'showlogin'])->name('showlogin');
Route::post('/login',[HomeController::class,'login'])->name('login');
Route::get('/dashboard',[HomeController::class,'dash'])->name('dash');