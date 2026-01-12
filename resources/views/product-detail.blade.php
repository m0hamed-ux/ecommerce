@extends('master')
@section('content')
    <div class="bg-gray-50 min-h-screen">
        <!-- Breadcrumb -->
        <section class="bg-white py-4 border-b">
            <div class="container mx-auto px-4">
                <nav class="text-sm text-gray-600">
                    <a href="/" class="hover:text-red-600">Home</a>
                    <span class="mx-2">/</span>
                    <a href="/products/all" class="hover:text-red-600">Products</a>
                    <span class="mx-2">/</span>
                    <span class="text-gray-900 font-medium">{{ $product['name'] }}</span>
                </nav>
            </div>
        </section>

        <!-- Product Detail -->
        <section class="py-12">
            <div class="container mx-auto px-4">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                    <!-- Product Image -->
                    <div class="bg-white rounded-[20px] overflow-hidden shadow-lg">
                        <div class="aspect-square">
                            <img src="{{ $product['image'] }}" 
                                 alt="{{ $product['name'] }}" 
                                 class="w-full h-full object-cover">
                        </div>
                    </div>

                    <!-- Product Info -->
                    <div class="flex flex-col">
                        <div class="bg-white rounded-[20px] p-8 shadow-lg flex-1">
                            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">{{ $product['name'] }}</h1>
                            <div class="flex items-center gap-4 mb-6">
                                <span class="text-4xl font-bold text-red-600">${{ number_format($product['price'], 2) }}</span>
                                <span class="px-3 py-1 bg-green-100 text-green-700 rounded-full text-sm font-semibold">In Stock</span>
                            </div>
                            
                            <div class="border-t border-gray-200 pt-6 mb-6">
                                <h3 class="text-lg font-semibold text-gray-900 mb-3">Description</h3>
                                <p class="text-gray-600 leading-relaxed">{{ $product['description'] }}</p>
                            </div>

                            <div class="border-t border-gray-200 pt-6 mb-6">
                                <h3 class="text-lg font-semibold text-gray-900 mb-4">Size</h3>
                                <div class="flex gap-3">
                                    <button class="w-14 h-14 border-2 border-gray-300 rounded-lg hover:border-red-600 hover:text-red-600 transition-colors font-semibold">XS</button>
                                    <button class="w-14 h-14 border-2 border-gray-300 rounded-lg hover:border-red-600 hover:text-red-600 transition-colors font-semibold">S</button>
                                    <button class="w-14 h-14 border-2 border-red-600 text-red-600 rounded-lg font-semibold">M</button>
                                    <button class="w-14 h-14 border-2 border-gray-300 rounded-lg hover:border-red-600 hover:text-red-600 transition-colors font-semibold">L</button>
                                    <button class="w-14 h-14 border-2 border-gray-300 rounded-lg hover:border-red-600 hover:text-red-600 transition-colors font-semibold">XL</button>
                                    <button class="w-14 h-14 border-2 border-gray-300 rounded-lg hover:border-red-600 hover:text-red-600 transition-colors font-semibold">XXL</button>
                                </div>
                            </div>

                            <div class="border-t border-gray-200 pt-6 mb-8">
                                <h3 class="text-lg font-semibold text-gray-900 mb-4">Quantity</h3>
                                <div class="flex items-center gap-4">
                                    <button class="w-12 h-12 border-2 border-gray-300 rounded-lg hover:bg-gray-100 transition-colors font-semibold">-</button>
                                    <span class="text-xl font-semibold text-gray-900 w-12 text-center">1</span>
                                    <button class="w-12 h-12 border-2 border-gray-300 rounded-lg hover:bg-gray-100 transition-colors font-semibold">+</button>
                                </div>
                            </div>

                            <div class="flex gap-4">
                                <button class="flex-1 py-4 px-8 bg-red-600 text-white rounded-full hover:bg-red-700 transition-colors font-semibold text-lg flex items-center justify-center gap-2">
                                    <i data-lucide="shopping-cart" class="w-5 h-5"></i>
                                    Add to Cart
                                </button>
                                <button class="w-14 h-14 border-2 border-gray-300 rounded-full hover:border-red-600 hover:text-red-600 transition-colors flex items-center justify-center">
                                    <i data-lucide="heart" class="w-6 h-6"></i>
                                </button>
                            </div>

                            <div class="mt-8 grid grid-cols-3 gap-4 pt-8 border-t border-gray-200">
                                <div class="text-center">
                                    <i data-lucide="truck" class="w-8 h-8 text-red-600 mx-auto mb-2"></i>
                                    <p class="text-sm text-gray-600">Free Shipping</p>
                                </div>
                                <div class="text-center">
                                    <i data-lucide="shield-check" class="w-8 h-8 text-red-600 mx-auto mb-2"></i>
                                    <p class="text-sm text-gray-600">Secure Payment</p>
                                </div>
                                <div class="text-center">
                                    <i data-lucide="refresh-ccw" class="w-8 h-8 text-red-600 mx-auto mb-2"></i>
                                    <p class="text-sm text-gray-600">Easy Returns</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product Features -->
                <div class="mt-12 bg-white rounded-[20px] p-8 shadow-lg">
                    <h2 class="text-3xl font-bold text-gray-900 mb-6">Product Features</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="flex gap-4">
                            <div class="w-12 h-12 bg-red-100 rounded-full flex items-center justify-center flex-shrink-0">
                                <i data-lucide="star" class="w-6 h-6 text-red-600"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900 mb-1">Premium Quality</h4>
                                <p class="text-gray-600 text-sm">Made from 100% premium cotton blend for ultimate comfort</p>
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <div class="w-12 h-12 bg-red-100 rounded-full flex items-center justify-center flex-shrink-0">
                                <i data-lucide="droplet" class="w-6 h-6 text-red-600"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900 mb-1">Easy Care</h4>
                                <p class="text-gray-600 text-sm">Machine washable and maintains shape after multiple washes</p>
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <div class="w-12 h-12 bg-red-100 rounded-full flex items-center justify-center flex-shrink-0">
                                <i data-lucide="zap" class="w-6 h-6 text-red-600"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900 mb-1">Perfect Fit</h4>
                                <p class="text-gray-600 text-sm">Designed for comfort with adjustable drawstrings and ribbed cuffs</p>
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <div class="w-12 h-12 bg-red-100 rounded-full flex items-center justify-center flex-shrink-0">
                                <i data-lucide="award" class="w-6 h-6 text-red-600"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900 mb-1">Sustainable</h4>
                                <p class="text-gray-600 text-sm">Ethically sourced materials and eco-friendly production</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Related Products -->
                @if(isset($relatedProducts) && count($relatedProducts) > 0)
                <div class="mt-12">
                    <h2 class="text-3xl font-bold text-gray-900 mb-8">You May Also Like</h2>
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                        @foreach($relatedProducts as $relatedProduct)
                            <a href="/product/{{ $relatedProduct['id'] }}" class="group bg-white rounded-[20px] overflow-hidden shadow-md hover:shadow-2xl transition-all duration-300">
                                <div class="aspect-square overflow-hidden bg-gray-100">
                                    <img src="{{ $relatedProduct['image'] }}" 
                                         alt="{{ $relatedProduct['name'] }}" 
                                         class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                                </div>
                                <div class="p-6">
                                    <h3 class="text-lg font-semibold text-gray-900 mb-2 group-hover:text-red-600 transition-colors">{{ $relatedProduct['name'] }}</h3>
                                    <div class="flex items-center justify-between">
                                        <span class="text-2xl font-bold text-gray-900">${{ number_format($relatedProduct['price'], 2) }}</span>
                                        <span class="text-red-600 font-semibold group-hover:translate-x-2 transition-transform">View →</span>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
                @endif
            </div>
        </section>
    </div>
@endsection
