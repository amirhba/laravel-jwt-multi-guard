<?php

use App\Http\Controllers\Admin\LoginController as AdminLoginController;
use App\Http\Controllers\Admin\ProfileController as AdminProfileController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/



Route::post('/login',[LoginController::class,'login']);
Route::post('/admin/login',[AdminLoginController::class,'login']);


Route::get('/user/profile',[ProfileController::class,'index'])->middleware('auth:api');
Route::get('/admin/profile',[AdminProfileController::class,'index'])->middleware('auth:api_admin');
