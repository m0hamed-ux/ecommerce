@extends('master')
@section('content')
    <div class="bg-gray-50 min-h-screen">
        <!-- Hero Section -->
        <section class="bg-white py-20 relative overflow-hidden">
            <div class="absolute top-0 right-0 w-2/5 h-full z-[1]" style="background: radial-gradient(circle at top right, #FFF0F0 0%, white 70%);"></div>
            <div class="container mx-auto px-4 relative z-[2]">
                <div class="text-center max-w-3xl mx-auto">
                    <h1 class="text-4xl md:text-6xl font-bold text-gray-900 mb-6">About Our Story</h1>
                    <p class="text-xl text-gray-600 leading-relaxed">We're passionate about creating premium hoodies that combine comfort, style, and quality. Our mission is to deliver exceptional products that you'll love to wear.</p>
                </div>
            </div>
        </section>

        <!-- Our Story Section -->
        <section class="py-20 bg-white">
            <div class="container mx-auto px-4">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                    <div class="order-2 lg:order-1">
                        <div class="rounded-[20px] overflow-hidden shadow-2xl h-[500px]">
                            <img src="https://images.unsplash.com/photo-1441986300917-64674bd600d8?w=800&auto=format&fit=crop" 
                                 alt="Our Store" 
                                 class="w-full h-full object-cover">
                        </div>
                    </div>
                    <div class="order-1 lg:order-2">
                        <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">Our Story</h2>
                        <p class="text-gray-600 text-lg leading-relaxed mb-6">
                            Founded in 2020, we started with a simple idea: create the perfect hoodie. What began as a small passion project has grown into a beloved brand trusted by thousands of customers worldwide.
                        </p>
                        <p class="text-gray-600 text-lg leading-relaxed mb-6">
                            Every hoodie we create is a testament to our commitment to quality, comfort, and style. We work directly with ethical manufacturers to ensure that every piece meets our high standards while maintaining sustainable practices.
                        </p>
                        <p class="text-gray-600 text-lg leading-relaxed">
                            Today, we continue to innovate and expand our collection, always keeping our customers at the heart of everything we do.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Our Values Section -->
        <section class="py-20 bg-gray-50">
            <div class="container mx-auto px-4">
                <div class="text-center mb-16">
                    <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">Our Values</h2>
                    <p class="text-xl text-gray-600">What drives us every day</p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="bg-white p-8 rounded-[20px] shadow-md">
                        <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mb-6">
                            <i data-lucide="heart" class="text-red-600 w-8 h-8"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">Quality First</h3>
                        <p class="text-gray-600 leading-relaxed">We never compromise on quality. Every hoodie is crafted from premium materials and undergoes rigorous quality control to ensure it meets our exacting standards.</p>
                    </div>
                    <div class="bg-white p-8 rounded-[20px] shadow-md">
                        <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mb-6">
                            <i data-lucide="leaf" class="text-red-600 w-8 h-8"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">Sustainability</h3>
                        <p class="text-gray-600 leading-relaxed">We're committed to protecting our planet. Our products are made using sustainable practices and eco-friendly materials whenever possible.</p>
                    </div>
                    <div class="bg-white p-8 rounded-[20px] shadow-md">
                        <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mb-6">
                            <i data-lucide="users" class="text-red-600 w-8 h-8"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">Customer Focus</h3>
                        <p class="text-gray-600 leading-relaxed">Your satisfaction is our priority. We listen to your feedback and continuously improve our products and services to exceed your expectations.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Team Section -->

        <!-- Stats Section -->
        <section class="py-20 bg-gray-50">
            <div class="container mx-auto px-4">
                <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                    <div class="text-center">
                        <div class="text-5xl md:text-6xl font-bold text-red-600 mb-2">50K+</div>
                        <p class="text-gray-600 font-semibold">Happy Customers</p>
                    </div>
                    <div class="text-center">
                        <div class="text-5xl md:text-6xl font-bold text-red-600 mb-2">100+</div>
                        <p class="text-gray-600 font-semibold">Unique Designs</p>
                    </div>
                    <div class="text-center">
                        <div class="text-5xl md:text-6xl font-bold text-red-600 mb-2">4.9</div>
                        <p class="text-gray-600 font-semibold">Average Rating</p>
                    </div>
                    <div class="text-center">
                        <div class="text-5xl md:text-6xl font-bold text-red-600 mb-2">24/7</div>
                        <p class="text-gray-600 font-semibold">Customer Support</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="py-20 bg-white">
            <div class="container mx-auto px-4">
                <div class="bg-gradient-to-r from-red-600 to-red-700 rounded-[20px] p-12 md:p-16 text-center shadow-2xl">
                    <h2 class="text-3xl md:text-5xl font-bold text-white mb-6">Ready to Find Your Perfect Hoodie?</h2>
                    <p class="text-xl text-white/90 mb-8 max-w-2xl mx-auto">Explore our collection and discover the comfort and style you deserve.</p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="/products/all" class="py-4 px-10 bg-white text-red-600 rounded-full hover:bg-gray-100 transition-colors font-semibold text-lg">Shop Now</a>
                        <a href="/contact" class="py-4 px-10 border-2 border-white text-white rounded-full hover:bg-white/10 transition-colors font-semibold text-lg">Contact Us</a>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
