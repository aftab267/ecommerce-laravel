<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homecontroller;
use App\Http\Controllers\admincontroller;
use App\Http\Controllers\superadmincontroller;
use App\Http\Controllers\categorycontroller;

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

// Backend Route
Route::get('/admins',[admincontroller::class,'index']);
Route::post('/admin-dasboard',[admincontroller::class,'show_dashboard']);
Route::get('/dashboard',[superadmincontroller::class,'dashboard']);
Route::get('/logout',[superadmincontroller::class,'logout']);

//category Route
Route::resource('/categories/', categorycontroller::class);


 // frontend Route
Route::get('/',[homecontroller::class,'index']);
