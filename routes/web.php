<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ClientesController;

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/', [HomeController::class, 'index']);

// Route::view('/', 'home');

// Route::view('/clientes', 'clientes');

// Route::view('/cliente', 'clientes');

Route::get('/clientes', [ClientesController::class, 'index']);

// Route::get('/clientes', function () {
//     echo "Clientes Cadastrados";
// });


// Route::get('/clientes/{codigo}/nome/{nome}', function ($codigo,$nome) {
//     echo "Clientes Cadastrados com código ".$codigo." com nome ".$nome;
// });
