<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;

Route::get('/', function () {
    return view('home');
});

Route::get('/login',[SessionsController::class,'create'])
    ->middleware('guest')
    ->name('login.index');

Route::post('/login',[SessionsController::class,'store'])
    ->name('login.store');

Route::get('/logout',[SessionsController::class,'destroy'])
    ->middleware('auth')
    ->name('login.destroy');

Route::post('/register',[RegisterController::class,'store'])
    ->name('register.store');

Route::get('/register',[RegisterController::class,'create'])
    ->middleware('guest')
    ->name('register.index');