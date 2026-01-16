<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('home');
});

Route::get('/products/{cat}', [ProductController::class, 'getProductsByCategorie']);
Route::get('/products', [ProductController::class, 'getAllProducts']);

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});