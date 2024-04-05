<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Mail\BienvenidoMailable;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Controller;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('contactanos', function () {

    Mail::to('monreal.danielperez074@gmail.com')
    ->send(new BienvenidoMailable);

    return "Correo enviado";

})->name('contactanos');




