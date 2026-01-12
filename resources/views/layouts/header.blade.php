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
            <a class="text-gray-600 hover:text-black font-medium transition" href="/products/all">Shop</a>
            <a class="text-gray-600 hover:text-black font-medium transition" href="/about">About</a>
            <a class="text-gray-600 hover:text-black font-medium transition" href="/contact">Contact</a>
        </nav>
        <div class="flex-1 flex items-center justify-end gap-2">
            <a href="/cart">
                <i data-lucide="shopping-cart"></i>
            </a>
            <button href="" onclick="toggleMenu()" class="md:hidden">
                <i data-lucide="menu"></i>
            </button>
        </div>
    </div>
    <nav id="mobile-menu" class="bg-white border-t border-gray-200 md:hidden hidden">
        <div class="container mx-auto px-4 py-4 flex flex-col gap-4">
            <a class="text-gray-600 hover:text-black font-medium transition" href="/products/all">Shop</a>
            <a class="text-gray-600 hover:text-black font-medium transition" href="/about">About</a>
            <a class="text-gray-600 hover:text-black font-medium transition" href="/contact">Contact</a>
        </div>
    </nav>
</header>