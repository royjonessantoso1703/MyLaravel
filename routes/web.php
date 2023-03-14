<?php

use App\Http\Controllers\TestController;
use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::group(['prefix'=> '/User'],function(){
    Route::get('/home',[WebController::class, 'index'])->name('home');
});

Route::group(['prefix'=> '/Admin'],function(){
    Route::get('/admin',[WebController::class, 'admin'])->name('adminStarter');
});