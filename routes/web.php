<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RProductController;

Route::get('/', function () {
    return view('home');
});

Route::get('/products/category/{cat}', [ProductController::class, 'getProductsByCategorie']);
Route::get('/products', [ProductController::class, 'getAllProducts']);

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::resource('products', RProductController::class);