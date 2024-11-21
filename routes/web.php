<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\AlquilerController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/products/pdf',[ProductController::class,'GenerarPDF'])->name('products.pdf');

Route::resource('/products',ProductController::class);

Route::resource('clientes', ClienteController::class);

Route::resource('alquileres', AlquilerController::class);

