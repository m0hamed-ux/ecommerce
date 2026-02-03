@extends('master')
@section('content')
    <div class="bg-gray-50 min-h-screen">
        <!-- Hero Section -->
        <section class="bg-white py-20 relative overflow-hidden">
            <div class="absolute top-0 right-0 w-2/5 h-full z-[1]" style="background: radial-gradient(circle at top right, #FFF0F0 0%, white 70%);"></div>
            <div class="container mx-auto px-4 relative z-[2]">
                <div class="text-center max-w-3xl mx-auto">
                    <h1 class="text-4xl md:text-6xl font-bold text-gray-900 mb-6">Get in Touch</h1>
                    <p class="text-xl text-gray-600 leading-relaxed">Have a question or need assistance? We'd love to hear from you. Our team is here to help!</p>
                </div>
            </div>
        </section>


        @include('incs.flash')
        <!-- Contact Form & Info Section -->
        <section class="py-20 bg-gray-50">
            <div class="container mx-auto px-4">
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                    <!-- Contact Form -->
                    <div class="lg:col-span-2">
                        <div class="bg-white rounded-[20px] p-8 md:p-12 shadow-lg">
                            <h2 class="text-3xl font-bold text-gray-900 mb-6">Send Us a Message</h2>
                            <form action={{ route('contact.send') }} method="POST" class="space-y-6">
                                @csrf
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <div>
                                        <label for="first_name" class="block text-sm font-semibold text-gray-900 mb-2">First Name</label>
                                        <input type="text" id="first_name" name="first_name" required
                                               class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-red-600 focus:outline-none transition-colors"
                                               placeholder="John">
                                    </div>
                                    <div>
                                        <label for="last_name" class="block text-sm font-semibold text-gray-900 mb-2">Last Name</label>
                                        <input type="text" id="last_name" name="last_name" required
                                               class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-red-600 focus:outline-none transition-colors"
                                               placeholder="Doe">
                                    </div>
                                </div>
                                <div>
                                    <label for="email" class="block text-sm font-semibold text-gray-900 mb-2">Email Address</label>
                                    <input type="email" id="email" name="email" required
                                           class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-red-600 focus:outline-none transition-colors"
                                           placeholder="john.doe@example.com">
                                </div>
                                <div>
                                    <label for="phone" class="block text-sm font-semibold text-gray-900 mb-2">Phone Number (Optional)</label>
                                    <input type="tel" id="phone" name="phone"
                                           class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-red-600 focus:outline-none transition-colors"
                                           placeholder="+1 (555) 123-4567">
                                </div>
                                <div>
                                    <label for="subject" class="block text-sm font-semibold text-gray-900 mb-2">Subject</label>
                                    <select id="subject" name="subject" required
                                            class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-red-600 focus:outline-none transition-colors">
                                        <option value="">Select a subject</option>
                                        <option value="general">General Inquiry</option>
                                        <option value="order">Order Status</option>
                                        <option value="product">Product Question</option>
                                        <option value="return">Returns & Exchanges</option>
                                        <option value="partnership">Partnership Opportunity</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>
                                <div>
                                    <label for="message" class="block text-sm font-semibold text-gray-900 mb-2">Message</label>
                                    <textarea id="message" name="message" rows="6" required
                                              class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-red-600 focus:outline-none transition-colors resize-none"
                                              placeholder="Tell us how we can help you..."></textarea>
                                </div>
                                <button type="submit" 
                                        class="w-full py-4 px-8 bg-red-600 text-white rounded-full hover:bg-red-700 transition-colors font-semibold text-lg flex items-center justify-center gap-2">
                                    <i data-lucide="send" class="w-5 h-5"></i>
                                    Send Message
                                </button>
                            </form>
                        </div>
                    </div>

                    <!-- Contact Info -->
                    <div class="space-y-6">
                        <!-- Contact Details Card -->
                        <div class="bg-white rounded-[20px] p-8 shadow-lg">
                            <h3 class="text-2xl font-bold text-gray-900 mb-6">Contact Information</h3>
                            <div class="space-y-6">
                                <div class="flex gap-4">
                                    <div class="w-12 h-12 bg-red-100 rounded-full flex items-center justify-center flex-shrink-0">
                                        <i data-lucide="mail" class="w-6 h-6 text-red-600"></i>
                                    </div>
                                    <div>
                                        <h4 class="font-semibold text-gray-900 mb-1">Email</h4>
                                        <a href="mailto:support@hoodies.com" class="text-gray-600 hover:text-red-600 transition-colors">support@hoodies.com</a>
                                    </div>
                                </div>
                                <div class="flex gap-4">
                                    <div class="w-12 h-12 bg-red-100 rounded-full flex items-center justify-center flex-shrink-0">
                                        <i data-lucide="phone" class="w-6 h-6 text-red-600"></i>
                                    </div>
                                    <div>
                                        <h4 class="font-semibold text-gray-900 mb-1">Phone</h4>
                                        <a href="tel:+15551234567" class="text-gray-600 hover:text-red-600 transition-colors">+1 (555) 123-4567</a>
                                    </div>
                                </div>
                                <div class="flex gap-4">
                                    <div class="w-12 h-12 bg-red-100 rounded-full flex items-center justify-center flex-shrink-0">
                                        <i data-lucide="map-pin" class="w-6 h-6 text-red-600"></i>
                                    </div>
                                    <div>
                                        <h4 class="font-semibold text-gray-900 mb-1">Address</h4>
                                        <p class="text-gray-600">123 Fashion Street<br>New York, NY 10001<br>United States</p>
                                    </div>
                                </div>
                                <div class="flex gap-4">
                                    <div class="w-12 h-12 bg-red-100 rounded-full flex items-center justify-center flex-shrink-0">
                                        <i data-lucide="clock" class="w-6 h-6 text-red-600"></i>
                                    </div>
                                    <div>
                                        <h4 class="font-semibold text-gray-900 mb-1">Business Hours</h4>
                                        <p class="text-gray-600">Monday - Friday: 9AM - 6PM<br>Saturday: 10AM - 4PM<br>Sunday: Closed</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Social Media Card -->
                        <div class="bg-white rounded-[20px] p-8 shadow-lg">
                            <h3 class="text-2xl font-bold text-gray-900 mb-6">Follow Us</h3>
                            <div class="flex gap-4">
                                <a href="#" class="w-12 h-12 bg-gray-100 hover:bg-red-600 rounded-full flex items-center justify-center transition-colors group">
                                    <i data-lucide="facebook" class="w-6 h-6 text-gray-600 group-hover:text-white transition-colors"></i>
                                </a>
                                <a href="#" class="w-12 h-12 bg-gray-100 hover:bg-red-600 rounded-full flex items-center justify-center transition-colors group">
                                    <i data-lucide="instagram" class="w-6 h-6 text-gray-600 group-hover:text-white transition-colors"></i>
                                </a>
                                <a href="#" class="w-12 h-12 bg-gray-100 hover:bg-red-600 rounded-full flex items-center justify-center transition-colors group">
                                    <i data-lucide="twitter" class="w-6 h-6 text-gray-600 group-hover:text-white transition-colors"></i>
                                </a>
                                <a href="#" class="w-12 h-12 bg-gray-100 hover:bg-red-600 rounded-full flex items-center justify-center transition-colors group">
                                    <i data-lucide="linkedin" class="w-6 h-6 text-gray-600 group-hover:text-white transition-colors"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- FAQ Section -->
        <section class="py-20 bg-white">
            <div class="container mx-auto px-4">
                <div class="text-center mb-16">
                    <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">Frequently Asked Questions</h2>
                    <p class="text-xl text-gray-600">Quick answers to common questions</p>
                </div>
                <div class="max-w-3xl mx-auto space-y-4">
                    <div class="bg-gray-50 rounded-[20px] p-6 hover:shadow-md transition-shadow">
                        <h3 class="text-lg font-bold text-gray-900 mb-2">What is your shipping policy?</h3>
                        <p class="text-gray-600">We offer free shipping on all orders over $100. Standard shipping takes 2-5 business days, and express shipping is available for an additional fee.</p>
                    </div>
                    <div class="bg-gray-50 rounded-[20px] p-6 hover:shadow-md transition-shadow">
                        <h3 class="text-lg font-bold text-gray-900 mb-2">How do I return or exchange an item?</h3>
                        <p class="text-gray-600">We accept returns within 30 days of purchase. Items must be unworn, unwashed, and in original condition with tags attached. Contact us to initiate a return.</p>
                    </div>
                    <div class="bg-gray-50 rounded-[20px] p-6 hover:shadow-md transition-shadow">
                        <h3 class="text-lg font-bold text-gray-900 mb-2">What payment methods do you accept?</h3>
                        <p class="text-gray-600">We accept all major credit cards (Visa, Mastercard, American Express), PayPal, Apple Pay, and Google Pay for your convenience.</p>
                    </div>
                    <div class="bg-gray-50 rounded-[20px] p-6 hover:shadow-md transition-shadow">
                        <h3 class="text-lg font-bold text-gray-900 mb-2">How do I track my order?</h3>
                        <p class="text-gray-600">Once your order ships, you'll receive a tracking number via email. You can use this number to track your package on our website or the carrier's site.</p>
                    </div>
                    <div class="bg-gray-50 rounded-[20px] p-6 hover:shadow-md transition-shadow">
                        <h3 class="text-lg font-bold text-gray-900 mb-2">Do you offer international shipping?</h3>
                        <p class="text-gray-600">Yes, we ship worldwide! International shipping rates and delivery times vary by location. Customs fees may apply and are the responsibility of the customer.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Map Section (Placeholder) -->
        <section class="py-20 bg-gray-50">
            <div class="container mx-auto px-4">
                <div class="bg-white rounded-[20px] overflow-hidden shadow-lg h-[400px] flex items-center justify-center">
                    <div class="text-center">
                        <i data-lucide="map" class="w-16 h-16 text-red-600 mx-auto mb-4"></i>
                        <p class="text-gray-600 text-lg">Map integration coming soon</p>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
