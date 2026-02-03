<script>
    function toggleMenu() {
        const menu = document.getElementById('mobile-menu');
        if (menu.classList.contains('hidden')) {
            menu.classList.remove('hidden');
            menu.style.maxHeight = "0px";
            menu.style.overflow = "hidden";
            menu.style.transition = "max-height 0.3s ease-in-out";
            setTimeout(() => {
                menu.style.maxHeight = menu.scrollHeight + "px";
            }, 10);
        } else {
            menu.style.maxHeight = "0px";
            setTimeout(() => {
                menu.classList.add('hidden');
            }, 300);
        }
    }
</script>
<header class="bg-white">
    <div class="container mx-auto px-4 py-4 flex items-center justify-between">
        <div class="flex-1">
            <a href="/" class="flex items-center">
                <img src={{ asset('logo.png') }} alt="Ecomerce Logo" class="h-8">
            </a>
        </div>
        <nav class="flex-1 justify-center items-center gap-6 hidden md:flex">
            <a class="text-gray-600 hover:text-black font-medium transition" href="/products">Shop</a>
            <a class="text-gray-600 hover:text-black font-medium transition" href="/products/category/Men">Men</a>
            <a class="text-gray-600 hover:text-black font-medium transition" href="/products/category/Women">Women</a>
            <a class="text-gray-600 hover:text-black font-medium transition" href="/products/category/Kids">Kids</a>
            <a class="text-gray-600 hover:text-black font-medium transition" href="/products/category/Sports">Sports</a>
            <a class="text-gray-600 hover:text-black font-medium transition" href="/products/category/Accessories">Accessories</a>
            <a class="text-gray-600 hover:text-black font-medium transition" href="/about">About</a>
            <a class="text-gray-600 hover:text-black font-medium transition" href="/contact">Contact</a>
        </nav>
        <div class="flex-1 flex items-center justify-end gap-2">
            @auth
                @if(auth()->user()->role === 'admin')
                    <a href="{{ route('products.create') }}" class="bg-red-500 text-white px-4 py-2 rounded-lg flex items-center gap-2 hover:bg-red-600 transition">
                        <i data-lucide="plus"></i>
                        <span>Add Product</span>
                    </a>
                @endif
                <!-- if role = user -->
                @if(auth()->user()->role === 'user')
                    <a href="{{ route('dashboard') }}" class="bg-red-500 text-white px-4 py-2 rounded-lg flex items-center gap-2 hover:bg-red-600 transition">
                        <i data-lucide="user"></i>
                        <span>espace client</span>
                    </a>
                @endif
            @endauth
            @guest
                <a href="/login" class="bg-red-500 text-white px-4 py-2 rounded-lg flex items-center gap-2 hover:bg-red-600 transition">Login</a>
                <a href="/register" class="text-red-500 font-medium px-4 py-2 rounded-lg flex items-center gap-2 hover:text-red-600 transition">Register</a>
            @endguest
            <button href="" onclick="toggleMenu()" class="md:hidden">
                <i data-lucide="menu"></i>
            </button>
        </div>
    </div>
    <nav id="mobile-menu" class="bg-white border-t border-gray-200 md:hidden hidden">
        <div class="container mx-auto px-4 py-4 flex flex-col gap-4">
            <a class="text-gray-600 hover:text-black font-medium transition" href="/products">Shop</a>
            <a class="text-gray-600 hover:text-black font-medium transition" href="/products/Men">Men</a>
            <a class="text-gray-600 hover:text-black font-medium transition" href="/products/Women">Women</a>
            <a class="text-gray-600 hover:text-black font-medium transition" href="/products/Kids">Kids</a>
            <a class="text-gray-600 hover:text-black font-medium transition" href="/products/Sports">Sports</a>
            <a class="text-gray-600 hover:text-black font-medium transition" href="/products/Accessories">Accessories</a>
            <a class="text-gray-600 hover:text-black font-medium transition" href="/about">About</a>
            <a class="text-gray-600 hover:text-black font-medium transition" href="/contact">Contact</a>
        </div>
    </nav>
</header>