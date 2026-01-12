@extends('master')
@section('content')
    <div class="bg-gray-50 min-h-screen">
        <!-- Page Header -->
        <section class="bg-white py-12 border-b">
            <div class="container mx-auto px-4">
                <div class="flex items-center justify-between">
                    <div>
                        <nav class="text-sm text-gray-600 mb-4">
                            <a href="/" class="hover:text-red-600">Home</a>
                            <span class="mx-2">/</span>
                            <span class="text-gray-900 font-medium">{{ ucfirst($category) }} Hoodies</span>
                        </nav>
                        <h1 class="text-4xl md:text-5xl font-bold text-gray-900">{{ ucfirst($category) }}'s Collection</h1>
                        <p class="text-gray-600 mt-2">{{ count($products) }} products available</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Products Grid -->
        <section class="py-12">
            <div class="container mx-auto px-4">
                @if(count($products) > 0)
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
                        @foreach ($products as $product)
                            <a href="/product/{{ $product['id'] }}" class="group bg-white rounded-[20px] overflow-hidden shadow-md hover:shadow-2xl transition-all duration-300">
                                <div class="aspect-square overflow-hidden bg-gray-100">
                                    <img src="{{ $product['image'] }}" 
                                         alt="{{ $product['name'] }}" 
                                         class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                                </div>
                                <div class="p-6">
                                    <h3 class="text-lg font-semibold text-gray-900 mb-2 group-hover:text-red-600 transition-colors">{{ $product['name'] }}</h3>
                                    <p class="text-gray-600 text-sm mb-4 line-clamp-2">{{ $product['description'] }}</p>
                                    <div class="flex items-center justify-between">
                                        <span class="text-2xl font-bold text-gray-900">${{ number_format($product['price'], 2) }}</span>
                                        <span class="text-red-600 font-semibold group-hover:translate-x-2 transition-transform">View →</span>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    </div>
                @else
                    <div class="text-center py-20">
                        <div class="w-24 h-24 bg-gray-200 rounded-full flex items-center justify-center mx-auto mb-6">
                            <i data-lucide="package-x" class="w-12 h-12 text-gray-400"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-2">No products found</h3>
                        <p class="text-gray-600 mb-6">Try browsing other categories</p>
                        <a href="/" class="inline-block py-3 px-8 text-white bg-red-600 rounded-full hover:bg-red-700 transition-colors font-semibold">Back to Home</a>
                    </div>
                @endif
            </div>
        </section>

        <!-- Browse Other Categories -->
        @if(count($products) > 0)
        <section class="py-12 bg-white">
            <div class="container mx-auto px-4">
                <h2 class="text-3xl font-bold text-gray-900 mb-8 text-center">Browse Other Categories</h2>
                <div class="flex flex-wrap justify-center gap-4">
                    @foreach ($categories as $cat)
                        <a href="/products/{{ $cat }}" class="py-3 px-8 {{ $cat == $category ? 'bg-red-600 text-white' : 'bg-gray-100 text-gray-900 hover:bg-gray-200' }} rounded-full transition-colors font-semibold">{{ ucfirst($cat) }}'s</a>
                    @endforeach
                </div>
            </div>
        </section>
        @endif
    </div>
@endsection