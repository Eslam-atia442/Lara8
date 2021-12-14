<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\NameController;
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
Auth::routes();
Route::get('/logout',[HomeController::class,'logout'])->name('signout');

Route::group(['middleware'=>'auth:web'], function(){
    Route::get('/home',[HomeController::class,'index'])->name('home');
    Route::get('/google',[HomeController::class,'google'])->name('google');
    Route::get('/',[HomeController::class,'index']);
});











