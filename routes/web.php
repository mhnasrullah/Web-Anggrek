<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\TentangController;
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
Route::get('/galeri',[GaleriController::class,'index']);
Route::get('/tentang',[TentangController::class,'index']);
// Route::view('/galeri','galeri');

// Route::view('/tentang','tentang');

// Route::view('/admin', 'admin.login');

// Route::view('/admin/success', 'admin.index');
