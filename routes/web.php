<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('product', function () {
    return view('product');
});

Route::get('/form', [\App\Http\Controllers\ProductController::class, "form"]);