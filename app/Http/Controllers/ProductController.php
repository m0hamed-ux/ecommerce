<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function getProductsByCategorie($cat){
        $products = Product::where('category', $cat)->get();
        $categories = Product::distinct()->pluck('category');
        return view('products', ['products' => $products, 'category' => $cat, 'categories' => $categories]);
    }

    public function getAllProducts(){
        $products = Product::all();
        $categories = Product::distinct()->pluck('category');
        return view('products', ['products' => $products, 'category' => 'all', 'categories' => $categories]);
    }

    
}
