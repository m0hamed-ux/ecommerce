<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Requests\AddProductRequest;
use Cloudinary\Cloudinary;
use Illuminate\Support\Facades\Mail;
use \App\Mail\TestMail;

class RProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::orderByDesc('created_at')->paginate(5);
        $categories = Product::distinct()->pluck('category');
        return view('products', ['products' => $products, 'category' => 'all', 'categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create_product');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AddProductRequest $request)
    {
        $request->validated();

        $name = $request->input('name');
        $description = $request->input('description');
        $price = $request->input('price');
        $category = $request->input('category');
        
        // save image using Cloudinary
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

        $product = new Product();
        $product->name = $name;
        $product->description = $description;
        $product->price = $price;
        $product->category = $category;
        $product->image = $uploadedFileUrl;
        $product->save();
        return redirect()->route('products.index')->with('success', 'Product added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Product::findOrFail($id);
        return view('product-detail', ['product' => $product]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::findOrFail($id);
        return view('edit_product', ['product' => $product]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product = Product::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'category' => 'required|string|max:100',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->category = $request->input('category');

        if ($request->hasFile('image')) {
            // save image using Cloudinary
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
        return redirect()->route('products.index')->with('success', 'Product updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()->route('products.index')->with('success', 'Product deleted successfully!');
    }

    public function sendEmail(Request $request)
    {
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'nullable|string|max:20',
            'subject' => 'required|string',
            'message' => 'required|string',
        ]);

        try {
            $mailData = [
                'subject' => 'Contact Form: ' . $validated['subject'],
                'messageContent' => $validated['message'],
                'first_name' => $validated['first_name'],
                'last_name' => $validated['last_name'],
                'email' => $validated['email'],
                'phone' => $validated['phone'] ?? 'Not provided',
            ];

            Mail::to('elkhamlichim099@gmail.com')->send(new TestMail($mailData));

            return back()->with('success', 'Thank you for contacting us! We will get back to you soon.');
        } catch (\Exception $e) {
            \Log::error('Mail Error: ' . $e->getMessage());
            return back()->with('error', 'Failed to send message. Please try again later.');
        }
    }
}
