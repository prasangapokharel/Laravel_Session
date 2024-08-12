<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('backend.main');
});




Route::get('product', function () {
    return view('product');
});

Route::get('/form', [\App\Http\Controllers\ProductController::class, "form"]);
Route::post('/form', [\App\Http\Controllers\ProductController::class, "form"]);

Route::get('/form', [\App\Http\Controllers\CategoryController::class, "form"]);
Route::post('/category/store', [\App\Http\Controllers\CategoryController::class, "store"]);