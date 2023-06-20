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

    Route::get('/', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');
    Route::resource('user' , App\Http\Controllers\Admin\UserController::class);
    Route::resource('product' , App\Http\Controllers\Admin\ProductController::class);
    Route::resource('blog' , App\Http\Controllers\Admin\BlogController::class);
    Route::post('blog/comment' , [App\Http\Controllers\Admin\BlogController::class,'commentStore']);
    Route::post('product/comment' , [App\Http\Controllers\Admin\ProductController::class,'commentStore']);
    Route::resource('comment' , App\Http\Controllers\Admin\CommentController::class);
    Route::resource('brand' , App\Http\Controllers\Admin\BrandController::class);
    Route::resource('category' , App\Http\Controllers\Admin\CategoryController::class);
    Route::resource('image' , App\Http\Controllers\Admin\ImageController::class);

