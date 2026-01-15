@extends('master')
@section('content')
    <div id="home-page">
        <section class="flex items-center py-20 bg-white relative overflow-hidden">
            <div class="absolute top-0 right-0 w-2/5 h-full z-[1]" style="background: radial-gradient(circle at top right, #FFF0F0 0%, white 70%);"></div>
            <div class="container mx-auto px-4 flex items-center relative z-[2]">
                <div class="w-full md:w-1/2 pr-0 md:pr-15">
                    <h1 class="text-4xl md:text-[64px] leading-tight font-bold mb-6 text-gray-900">Premium Hoodies Collection</h1>
                    <p class="text-lg md:text-xl text-gray-600 mb-10 leading-relaxed max-w-[90%]">Discover the finest hoodies crafted with premium materials. Express your style with our exclusive collection delivered to your door.</p>
                    <div class="flex gap-5">
                        <a href="/about" class="py-3 px-8 text-white bg-red-600 rounded-full hover:bg-red-700 transition-colors font-semibold">Learn More</a>
                        <a href="/contact" class="py-3 px-8 border-2 border-red-600 text-red-600 rounded-full hover:bg-red-50 transition-colors font-semibold">Contact Us</a>
                    </div>
                </div>
                <div class="hidden md:block w-1/2 h-[600px] relative rounded-[20px] overflow-hidden shadow-[0_20px_60px_rgba(0,0,0,0.1)]">
                    <img src="https://images.unsplash.com/photo-1556821840-3a63f95609a7?q=80&w=1740&auto=format&fit=crop" alt="Hero Hoodie" class="w-full h-full object-cover">
                </div>
            </div>
        </section>

        <section class="py-20 bg-gray-50">
            <div class="container mx-auto px-4">
                <div class="text-center mb-16">
                    <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">Why Choose Us</h2>
                    <p class="text-xl text-gray-600">Experience the difference in quality and service</p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="bg-white p-8 rounded-[20px] shadow-md text-center">
                        <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-6">
                            <i data-lucide="truck" class="text-red-600 w-8 h-8"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">Fast Delivery</h3>
                        <p class="text-gray-600">Free shipping on orders over $100. Get your hoodies delivered within 2-5 business days.</p>
                    </div>
                    <div class="bg-white p-8 rounded-[20px] shadow-md text-center">
                        <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-6">
                            <i data-lucide="shield-check" class="text-red-600 w-8 h-8"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">Premium Quality</h3>
                        <p class="text-gray-600">100% authentic products with premium materials. Every hoodie is quality checked before shipping.</p>
                    </div>
                    <div class="bg-white p-8 rounded-[20px] shadow-md text-center">
                        <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-6">
                            <i data-lucide="refresh-ccw" class="text-red-600 w-8 h-8"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">Easy Returns</h3>
                        <p class="text-gray-600">30-day return policy. Not satisfied? Return it hassle-free for a full refund.</p>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection