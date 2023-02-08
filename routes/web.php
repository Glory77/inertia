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

Route::inertia('/', 'Home')->name('home');
Route::inertia('/about', 'About')->name('about');

Route::inertia('/login', 'Auth/Login')->name('login');
Route::post('/login', [\App\Http\Controllers\LoginController::class, 'login'])->name('login.post');
Route::post('/logout', [\App\Http\Controllers\LoginController::class, 'logout'])->name('logout');

Route::controller(\App\Http\Controllers\PostController::class)
    ->middleware('auth')
    ->prefix('posts')
    ->as('posts.')
    ->group(function () {
        Route::get('/', 'index')->name('index');
        Route::post('/', 'store')->name('store');
        Route::get('/create', 'create')->name('create');
        Route::delete('/{post}', 'destroy')->name('destroy');
        Route::get('/{post}', 'show')->name('show');
        Route::put('/{post}', 'update')->name('update');
        Route::get('/{post}/edit', 'edit')->name('edit');
    });
