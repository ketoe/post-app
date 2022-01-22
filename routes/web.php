<?php

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

Route::get('/',  [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'posts','as' => 'posts'], function () {
    Route::get('/',  [App\Http\Controllers\PostController::class, 'index'])->name('');
    Route::get('/{id}',  [App\Http\Controllers\PostController::class, 'view'])->name('.view');
});

Route::group(['prefix' => 'users','as' => 'users'], function () {
    Route::get('/',  [App\Http\Controllers\UserController::class, 'index'])->name('');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
