<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddProductRequest;
use Cloudinary\Cloudinary;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $producst = Product::all()->sortByDesc('created_at');
        return response()->json($producst);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AddProductRequest $request)
    {
        $request->validated();

        $product = new Product();
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->category = $request->input('category');
        $cloudinary = new Cloudinary([
            'cloud' => [
                'cloud_name' => env('CLOUDINARY_CLOUD_NAME'),
                'api_key'    => env('CLOUDINARY_API_KEY'),
                'api_secret' => env('CLOUDINARY_API_SECRET'),
            ],
        ]);
        $uploadedFileUrl = $cloudinary->uploadApi()->upload($request->file('image')->getRealPath(), [
            'folder' => 'products',
        ])['secure_url'];
        $product->image = $uploadedFileUrl;
        $product->save();
        return response()->json($product, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Product::find($id);
        if (!$product) {
            return response()->json(['message' => 'Product not found'], 404);
        }
        return response()->json($product);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'sometimes|required|string|max:255',
            'description' => 'sometimes|required|string',
            'price' => 'sometimes|required|numeric',
            'category' => 'sometimes|required|string|max:255',
            'image' => 'sometimes|required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $product = Product::find($id);
        if (!$product) {
            return response()->json(['message' => 'Product not found'], 404);
        }
        $product->name = $request->input('name', $product->name);
        $product->description = $request->input('description', $product->description);
        $product->price = $request->input('price', $product->price);
        $product->category = $request->input('category', $product->category);
        if ($request->hasFile('image')) {
            $cloudinary = new Cloudinary([
                'cloud' => [
                    'cloud_name' => env('CLOUDINARY_CLOUD_NAME'),
                    'api_key'    => env('CLOUDINARY_API_KEY'),
                    'api_secret' => env('CLOUDINARY_API_SECRET'),
                ],
            ]);
            $uploadedFileUrl = $cloudinary->uploadApi()->upload($request->file('image')->getRealPath(), [
                'folder' => 'products',
            ])['secure_url'];
            $product->image = $uploadedFileUrl;
        }
        $product->save();
        return response()->json($product);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::find($id);
        if (!$product) {
            return response()->json(['message' => 'Product not found'], 404);
        }
        $product->delete();
        return response()->json(['message' => 'Product deleted successfully']);
    }

    public function search(Request $request)
    {
        $query = $request->input('q');
        $products = Product::where('name', 'LIKE', "%$query%")->get();
        return response()->json($products);
    }
}