<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mi-nombre', function () {
    return "Jorge Andrés Luquetta Aguilera";
});

Route::get('/mi-nombre/php-basico', function () {
    return "Jorge Andrés Luquetta Aguilera";
});