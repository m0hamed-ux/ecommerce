<?php

use App\Http\Controllers\ProfileController;
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

Route::middleware(['auth', 'admin'])->group(function () {
    Route::resource('products', RProductController::class)->except(['index', 'show']);
});

Route::resource('products', RProductController::class)->only(['index', 'show']);

Route::get('/dashboard', [ProductController::class, 'getSoldProducts'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
