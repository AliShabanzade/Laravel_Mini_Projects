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
Route::get('/' , function (){
    return view('welcome');
});


Route::group(['prefix' => 'admin' , 'as'=>'admin.'] , function() {

    Route::get('/', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');
    Route::resource('user', App\Http\Controllers\Admin\UserController::class);
    Route::resource('blog' , App\Http\Controllers\Admin\BlogController::class);
    Route::resource('product' , App\Http\Controllers\Admin\ProductController::class);


});
