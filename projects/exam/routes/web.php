<?php

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

Route::get('/', function () {
    return view('auth.login');
});

Route::resource('product' , \App\Http\Controllers\Admin\ProductController::class );




Route::get('/login', [App\Http\Controllers\Auth\LoginController::class , 'login'])->name('login');
Route::post('/login', [App\Http\Controllers\Auth\LoginController::class , 'authenticate'])->name('login');
Route::get('/register', [App\Http\Controllers\Auth\RegisterController::class , 'register'])->name('register');
Route::post('/register/store', [App\Http\Controllers\Auth\RegisterController::class , 'store'])->name('register.store');
Route::get('/logout', [App\Http\Controllers\Auth\LogoutController::class , 'logout'])->name('logout');


