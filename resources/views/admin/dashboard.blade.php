@extends('layouts.layoutAdmin')


@section('content')
    <!-- MAIN CONTENT -->
    <main class="flex-1 p-8">

        <!-- HEADER SECTION -->
        <div class="flex justify-between items-center mb-8">
            <div>
                <h1 class="text-2xl font-bold text-blue-800">Dashboard Perpustakaan</h1>
                <p class="text-gray-600">Selamat datang di sistem manajemen perpustakaan digital</p>
            </div>

            <!-- Header Icons -->
            <div class="flex items-center gap-4">


                <!-- User Profile -->
                <div class="relative dropdown">
                    <button
                        class="flex items-center space-x-3 p-2 rounded-lg bg-white shadow-md hover:bg-gray-50 transition-colors">
                        <div class="w-8 h-8 bg-blue-600 rounded-full flex items-center justify-center">
                            <i class="fas fa-user text-white text-sm"></i>
                        </div>
                        <span class="text-gray-700 font-medium">Admin</span>
                        <i class="fas fa-chevron-down text-gray-400"></i>
                    </button>
                    <div
                        class="dropdown-content absolute top-full left-0 min-w-full bg-white rounded-b-lg shadow-xl border border-gray-200 z-20 overflow-hidden">
                        <a href="{{ route('login') }}"
                            class="block px-4 py-3 text-red-600 hover:bg-red-50 transition-colors">
                            <i class="fas fa-sign-out-alt mr-3"></i>
                            Logout
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- SEARCH BAR (naik ke atas menggantikan statistik) -->
        <div class="bg-white rounded-xl shadow-md p-6 mb-8">
            <div class="flex items-center space-x-4">
                <div class="flex-1 relative">
                    <i class="fas fa-search absolute left-4 top-3 text-gray-400"></i>
                    <input type="text" placeholder="Cari buku, penulis, atau kategori..."
                        class="w-full pl-12 pr-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                </div>
                <button class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-lg font-medium transition-colors">
                    <i class="fas fa-search mr-2"></i>
                    Cari
                </button>
            </div>
        </div>

        <!-- CATEGORIES & BOOKS SECTION -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Categories Section -->
            <div class="lg:col-span-1">
                <div class="bg-white rounded-xl shadow-md p-6">
                    <h2 class="text-xl font-bold text-blue-800 mb-4">
                        <i class="fas fa-tags mr-2"></i>
                        Kategori Buku
                    </h2>

                    <div class="space-y-3">
                        @php
                            $categories = [
                                ['name' => 'Fantasi', 'route' => 'katalog.fantasi', 'count' => 156],
                                ['name' => 'Teknologi', 'route' => 'katalog.teknologi', 'count' => 89],
                                [
                                    'name' => 'Sejarah & Arkeologi',
                                    'route' => 'katalog.sejarah-arkeologi',
                                    'count' => 67,
                                ],
                                ['name' => 'Bisnis & Ekonomi', 'route' => 'katalog.bisnis-ekonomi', 'count' => 134],
                                ['name' => 'Pemrograman', 'route' => 'katalog.pemrograman', 'count' => 78],
                                ['name' => 'Sains & Matematika', 'route' => 'katalog.sains-matematika', 'count' => 92],
                                ['name' => 'Pengembangan Diri', 'route' => 'katalog.pengembangan-diri', 'count' => 45],
                                ['name' => 'Seni Budaya & Adat', 'route' => 'katalog.seni-budaya-adat', 'count' => 56],
                            ];
                        @endphp

                        @foreach ($categories as $category)
                            <a href="{{ Route::has($category['route']) ? route($category['route']) : '#' }}"
                                class="w-full flex items-center justify-between p-3 rounded-lg bg-gray-50 hover:bg-blue-50 hover:text-blue-700 transition-colors text-left">
                                <span class="font-medium">{{ $category['name'] }}</span>
                                <span
                                    class="bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded-full">{{ $category['count'] }}</span>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- Recent Books Section -->
            <div class="lg:col-span-2">
                <div class="bg-white rounded-xl shadow-md p-6">
                    <div class="flex justify-between items-center mb-6">
                        <h2 class="text-xl font-bold text-blue-800">
                            <i class="fas fa-book mr-2"></i>
                            Koleksi Terbaru
                        </h2>
                        <a href="{{-- {{ route('data-buku') }} --}}" class="text-blue-600 hover:text-blue-800 font-medium text-sm">
                            Lihat Semua <i class="fas fa-chevron-right ml-1"></i>
                        </a>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Buku 1 -->
                        <div
                            class="flex items-center space-x-4 p-4 rounded-lg border border-gray-200 hover:border-blue-300 transition-colors">
                            <div
                                class="w-16 h-20 bg-gradient-to-br from-blue-400 to-blue-600 rounded-lg flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-book text-white text-xl"></i>
                            </div>
                            <div class="flex-1">
                                <h3 class="font-semibold text-gray-800 mb-1">Iblis Tidak Pernah Mati</h3>
                                <p class="text-gray-600 text-sm mb-2">Penulis Nama</p>
                                <div class="flex items-center justify-between">
                                    <span class="bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded">Fiksi</span>
                                    <span class="text-green-600 text-sm font-medium">Tersedia</span>
                                </div>
                            </div>
                        </div>

                        <!-- Buku 2 -->
                        <div
                            class="flex items-center space-x-4 p-4 rounded-lg border border-gray-200 hover:border-blue-300 transition-colors">
                            <div
                                class="w-16 h-20 bg-gradient-to-br from-green-400 to-green-600 rounded-lg flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-book text-white text-xl"></i>
                            </div>
                            <div class="flex-1">
                                <h3 class="font-semibold text-gray-800 mb-1">Seni Hidup Minimalis</h3>
                                <p class="text-gray-600 text-sm mb-2">Penulis Nama</p>
                                <div class="flex items-center justify-between">
                                    <span class="bg-green-100 text-green-800 text-xs px-2 py-1 rounded">Pengembangan
                                        Diri</span>
                                    <span class="text-green-600 text-sm font-medium">Tersedia</span>
                                </div>
                            </div>
                        </div>

                        <!-- Buku 3 -->
                        <div
                            class="flex items-center space-x-4 p-4 rounded-lg border border-gray-200 hover:border-blue-300 transition-colors">
                            <div
                                class="w-16 h-20 bg-gradient-to-br from-purple-400 to-purple-600 rounded-lg flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-book text-white text-xl"></i>
                            </div>
                            <div class="flex-1">
                                <h3 class="font-semibold text-gray-800 mb-1">Sejarah Dunia yang Disembunyikan</h3>
                                <p class="text-gray-600 text-sm mb-2">Penulis Nama</p>
                                <div class="flex items-center justify-between">
                                    <span class="bg-purple-100 text-purple-800 text-xs px-2 py-1 rounded">Sejarah</span>
                                    <span class="text-green-600 text-sm font-medium">Tersedia</span>
                                </div>
                            </div>
                        </div>

                        <!-- Buku 4 -->
                        <div
                            class="flex items-center space-x-4 p-4 rounded-lg border border-gray-200 hover:border-blue-300 transition-colors">
                            <div
                                class="w-16 h-20 bg-gradient-to-br from-orange-400 to-orange-600 rounded-lg flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-book text-white text-xl"></i>
                            </div>
                            <div class="flex-1">
                                <h3 class="font-semibold text-gray-800 mb-1">Teknologi Masa Depan</h3>
                                <p class="text-gray-600 text-sm mb-2">Penulis Nama</p>
                                <div class="flex items-center justify-between">
                                    <span class="bg-orange-100 text-orange-800 text-xs px-2 py-1 rounded">Teknologi</span>
                                    <span class="text-green-600 text-sm font-medium">Tersedia</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </main>
    </div>

    <script>
        // JavaScript untuk dropdown functionality
        document.addEventListener('DOMContentLoaded', function() {
            const dropdowns = document.querySelectorAll('.dropdown');

            dropdowns.forEach(dropdown => {
                dropdown.addEventListener('mouseenter', function() {
                    const content = this.querySelector('.dropdown-content');
                    if (content) {
                        content.style.display = 'block';
                        setTimeout(() => {
                            content.style.opacity = '1';
                            content.style.transform = 'translateY(0)';
                        }, 10);
                    }
                });

                dropdown.addEventListener('mouseleave', function() {
                    const content = this.querySelector('.dropdown-content');
                    if (content) {
                        content.style.opacity = '0';
                        content.style.transform = 'translateY(-10px)';
                        setTimeout(() => {
                            content.style.display = 'none';
                        }, 300);
                    }
                });
            });
        });
    </script>
@endsection
