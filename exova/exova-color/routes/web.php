<?php

use Illuminate\Support\Facades\Auth;
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

Route::prefix('login')->as('redirect.')->group(function () {
    Route::get('{provider}', [\App\Http\Controllers\Auth\SocialController::class, 'redirect'])->name('provider');
    Route::get('{provider}/callback', [\App\Http\Controllers\Auth\SocialController::class, 'callback'])->name('callback');
});

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
