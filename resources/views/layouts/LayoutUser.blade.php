<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Buku Jembatan Ilmu')</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body class="bg-gray-50 font-sans">

    {{-- ================= NAVBAR ================= --}}
    <header class="bg-white shadow-md">
        <nav class="container mx-auto px-4 py-3">
            <div class="flex items-center justify-between">

                <!-- Logo -->
                <div class="flex items-center space-x-3">
                    <i class="fas fa-book text-blue-600 text-2xl"></i>
                    <span class="text-xl font-bold text-blue-800">BUKU JEMBATAN ILMU</span>
                </div>

                <!-- Navigation -->
                <div class="hidden md:flex items-center space-x-8">

                    <a href="{{ route('user.home') }}"
                        class="{{ request()->routeIs('user.home')
                            ? 'text-blue-800 font-semibold border-b-2 border-blue-800 pb-1'
                            : 'text-gray-600 hover:text-blue-600 transition' }}">
                        BERANDA
                    </a>

                    <a href="{{ route('user.katalog.index') }}"
                        class="{{ request()->routeIs('user.katalog.*')
                            ? 'text-blue-800 font-semibold border-b-2 border-blue-800 pb-1'
                            : 'text-gray-600 hover:text-blue-600 transition' }}">
                        KATALOG
                    </a>

                    <a href="{{ route('user.agenda') }}"
                        class="{{ request()->routeIs('user.agenda')
                            ? 'text-blue-800 font-semibold border-b-2 border-blue-800 pb-1'
                            : 'text-gray-600 hover:text-blue-600 transition' }}">
                        AGENDA
                    </a>

                    <a href="{{ route('user.about') }}"
                        class="{{ request()->routeIs('user.about')
                            ? 'text-blue-800 font-semibold border-b-2 border-blue-800 pb-1'
                            : 'text-gray-600 hover:text-blue-600 transition' }}">
                        TENTANG KAMI
                    </a>

                </div>


                <!-- Search + User Info (CSS-only, no JS) -->
                <div class="flex items-center space-x-6">

                    <!-- Search -->
                    <div class="relative">
                        <input type="text" placeholder="Search text"
                            class="pl-10 pr-4 py-2 w-48 rounded-full border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        <i class="fas fa-search absolute left-3 top-3 text-gray-400"></i>
                    </div>

                    <!-- User Login Display (CSS-only dropdown) -->
                    <!-- use 'group' so we can show dropdown on hover/focus-within -->
                    <div class="relative hidden md:block group">
                        <button class="flex items-center space-x-2 text-gray-700 hover:text-blue-700 focus:outline-none"
                            aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-user-circle text-2xl"></i>
                            <span class="font-semibold">Bintang</span> <!-- ganti nama manual jika perlu -->
                            <i class="fas fa-chevron-down text-xs"></i>
                        </button>

                        <!-- Dropdown (hidden by default, shown on group hover or focus-within) -->
                        <div
                            class="absolute right-0 mt-2 w-44 bg-white rounded-lg shadow-lg border border-gray-200 opacity-0 translate-y-1 pointer-events-none
             group-hover:opacity-100 group-hover:translate-y-0 group-hover:pointer-events-auto
             group-focus-within:opacity-100 group-focus-within:translate-y-0 group-focus-within:pointer-events-auto
             transition-all duration-150">
                            <a href="{{ route('user.profile') }}" class="block px-4 py-2 text-sm hover:bg-gray-100">
                                <i class="fas fa-user mr-2"></i> Profil Saya
                            </a>

                            <a href="/logout" class="block px-4 py-2 text-sm hover:bg-gray-100 text-red-600">
                                <i class="fas fa-sign-out-alt mr-2"></i> Logout
                            </a>
                        </div>
                    </div>

                    <!-- Mobile menu button -->
                    <button class="md:hidden text-gray-600" id="menuButton">
                        <i class="fas fa-bars text-xl"></i>
                    </button>
                </div>


            </div>
        </nav>
    </header>

    {{-- ================== CONTENT ================== --}}
    <main>
        @yield('content')
    </main>

    {{-- ================== FOOTER ================== --}}
    <footer class="bg-blue-900 text-white py-12 mt-10">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">

                <div class="md:col-span-2">
                    <div class="flex items-center space-x-3 mb-4">
                        <i class="fas fa-book text-2xl text-blue-300"></i>
                        <h3 class="text-xl font-bold">BUKU JEMBATAN ILMU</h3>
                    </div>
                    <p class="text-blue-300 mb-4">Menyediakan akses ke berbagai koleksi buku dari berbagai genre.</p>

                    <div class="flex space-x-4">
                        <a href="#" class="text-blue-300 hover:text-white"><i
                                class="fab fa-facebook text-xl"></i></a>
                        <a href="#" class="text-blue-300 hover:text-white"><i
                                class="fab fa-twitter text-xl"></i></a>
                        <a href="#" class="text-blue-300 hover:text-white"><i
                                class="fab fa-instagram text-xl"></i></a>
                    </div>
                </div>

                <div>
                    <h4 class="text-lg font-bold mb-4">Media Sosial</h4>
                    <ul class="space-y-3 text-blue-300">
                        <li>
                            <a href="https://facebook.com" target="_blank" class="hover:text-white flex items-center">
                                <i class="fab fa-facebook text-xl mr-3"></i> Facebook
                            </a>
                        </li>
                        <li>
                            <a href="https://instagram.com" target="_blank" class="hover:text-white flex items-center">
                                <i class="fab fa-instagram text-xl mr-3"></i> Instagram
                            </a>
                        </li>
                        <li>
                            <a href="https://youtube.com" target="_blank" class="hover:text-white flex items-center">
                                <i class="fab fa-youtube text-xl mr-3"></i> YouTube
                            </a>
                        </li>
                    </ul>
                </div>


                <div>
                    <h4 class="text-lg font-bold mb-4">Kontak Kami</h4>
                    <ul class="space-y-3 text-blue-300">
                        <li class="flex items-start"><i class="fas fa-map-marker-alt mt-1 mr-3"></i> Banda Aceh</li>
                        <li class="flex items-center"><i class="fas fa-phone mr-3"></i> +62 812 3456 7890</li>
                        <li class="flex items-center"><i class="fas fa-envelope mr-3"></i> text@test.com</li>
                    </ul>
                </div>
            </div>

            <div class="border-t border-blue-800 mt-8 pt-8 text-center text-blue-300">
                <p>&copy; 2023 Buku Jembatan Ilmu</p>
            </div>
        </div>
    </footer>

    {{-- ================== MOBILE MENU ================== --}}
    <div id="mobileMenu" class="fixed inset-0 bg-blue-900 z-50 flex flex-col items-center justify-center hidden">
        <button id="closeMenu" class="absolute top-6 right-6 text-white text-2xl">
            <i class="fas fa-times"></i>
        </button>

        <div class="text-white text-center space-y-6">
            <a href="/" class="block text-2xl font-bold">BERANDA</a>
            <a href="/katalog" class="block text-2xl">KATALOG</a>
            <a href="/agenda" class="block text-2xl">AGENDA</a>
            <a href="/tentang-kami" class="block text-2xl">TENTANG KAMI</a>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const menuButton = document.getElementById('menuButton');
            const mobileMenu = document.getElementById('mobileMenu');
            const closeMenu = document.getElementById('closeMenu');

            menuButton?.addEventListener('click', () => mobileMenu.classList.remove('hidden'));
            closeMenu?.addEventListener('click', () => mobileMenu.classList.add('hidden'));
        });

        document.addEventListener('DOMContentLoaded', function() {
            const userBtn = document.querySelector('#profileDropdownButton');
            const dropdown = document.querySelector('#profileDropdown');

            document.addEventListener('click', function(e) {
                const target = e.target;

                if (target.closest('#profileDropdownButton')) {
                    dropdown.classList.toggle('hidden');
                } else if (!target.closest('#profileDropdown')) {
                    dropdown.classList.add('hidden');
                }
            });
        });
    </script>

</body>

</html>
