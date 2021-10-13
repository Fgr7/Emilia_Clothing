<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\HomeController;


route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('contacto', [ContactoController::class, 'index'])->name('contacto.index');

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
