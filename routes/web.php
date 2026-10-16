<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[App\Http\Controllers\FrontController::class,'shop'])->name('shop');
Route::get('/shop-item/{id}',[App\Http\Controllers\FrontController::class,'shopItem'])->name('shop-item');

Route::group(['prefix'=>'backend','as'=>' '],function(){
  Route::get('/',[App\Http\Controllers\Admin\DashboardController::class,'index'])->name('dashboard');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
