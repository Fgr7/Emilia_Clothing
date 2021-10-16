<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\CatalogoController;


Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('contacto', [ContactoController::class, 'index'])->name('contacto.index');
Route::get('descripcion', [infoController::class, 'index'])-> name('info.index');
Route::get('catalogo', [CatalogoController::class, 'index'])-> name('catalogo.index');

Route::post('contactanos', [ContactoController::class, 'store'])->name('contactanos.store');

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
