<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('cardapio');
});

Route::get('/clientes', function () {
    return view('clientes');
});