<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\TentangController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DataController;
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

Route::get('/admin/set',[AdminController::class,'index'])->name('setdata');

Route::post('/admin/set/{id}',[AdminController::class,'update']);

Route::get('/admin/data',[DataController::class,'index'])->name('dataAdmin');

Route::post('/admin/data/insert',[DataController::class,'store']);

Route::get('/admin/data/add',[DataController::class,'create']);

Route::get('/admin/data/{id}',[DataController::class,'show']);
