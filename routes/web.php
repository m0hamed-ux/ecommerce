<?php

use Illuminate\Support\Facades\Route;

$PRODUITS = [
    'hiking' => [
        ["nom" => "Sac à dos", "prix" => 200, "image" => "https://tse4.mm.bing.net/th/id/OIP.DV8SWvp8Qevw6RxVkN8aGQHaKB?pid=Api&P=0&h=220"],
        ["nom" => "Tente", "prix" => 300, "image" => "https://images.unsplash.com/photo-1504280390367-361c6d9f38f4?q=80&w=800"],
        ["nom" => "Montre GPS", "prix" => 150, "image" => "https://images.unsplash.com/photo-1523275335684-37898b6baf30?q=80&w=800"]
    ],
    "electronics" => [
        ["nom" => "Machine à laver", "prix" => 3000, "image" => "https://images.unsplash.com/photo-1626806819282-2c1dc01a5e0c?q=80&w=800"],
        ["nom" => "Four", "prix" => 1500, "image" => "https://images.unsplash.com/photo-1584622650111-993a426fbf0a?q=80&w=800"],
        ["nom" => "Micro-onde", "prix" => 1000, "image" => "https://images.unsplash.com/photo-1574269909862-7e1d70bb8078?q=80&w=800"]
    ],
];

Route::get('/', function () {
    return view('home');
});

Route::get('/products/{category}', function ($category) use ($PRODUITS) {
    if (!array_key_exists($category, $PRODUITS)) {
        abort(404);
    }
    $products = $PRODUITS[$category];
    return view('products', ['products' => $products, 'category' => $category]);
});








