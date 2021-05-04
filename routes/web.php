<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\TentangController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
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

// Route::view('/','index');
Route::get('/',[BerandaController::class,'index']);

// Route::view('/galeri','galeri');
Route::get('/galeri',[GaleriController::class,'index']);

// Route::view('/tentang','tentang');
Route::get('/tentang',[TentangController::class,'index']);

Route::get('/admin',[LoginController::class,'index']);

Route::get('/admin/set',[AdminController::class,'index']);
