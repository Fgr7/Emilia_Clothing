<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\InfoController;

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

Route::get('/descripcion', [InfoController::class, 'create'])
    ->name('info.create');

Route::get('/info',[InfoController::class,'create'])
    ->middleware('guest')
    ->name('info.index');   