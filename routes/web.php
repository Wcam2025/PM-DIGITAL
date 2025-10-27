<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return redirect('/login');
});

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::get('/home', [AuthController::class, 'home'])->middleware('auth')->name('home');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
