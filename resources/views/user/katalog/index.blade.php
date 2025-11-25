@extends('layouts.LayoutUser')

@section('title', 'Katalog Buku')

@section('content')
<!-- Main Content -->
    <main class="container mx-auto px-4 py-8">
        <!-- Breadcrumb -->
        <div class="mb-6">
            <nav class="text-sm text-gray-500">
                <a href="{{route('user.home')}}" class="hover:text-blue-600">Beranda</a> /
                <span class="text-blue-800 font-medium">Katalog</span>
            </nav>
        </div>

        <!-- Page Header -->
        <div class="mb-8">
            <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-6">
                <div>
                    <h1 class="text-3xl font-bold text-blue-800 mb-2">KATALOG BUKU</h1>
                    <p class="text-gray-600 max-w-3xl">
                        Jelajahi beragam kategori buku yang tersedia di perpustakaan kami.
                        Temukan inspirasi dan pengetahuan baru sesuai minat Anda.
                    </p>
                </div>
            </div>

            <!-- Mobile Search -->
            <div class="md:hidden mb-6">
                <div class="relative">
                    <input type="text" placeholder="Cari buku, penulis..."
                           class="w-full pl-10 pr-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <i class="fas fa-search absolute left-3 top-3.5 text-gray-400"></i>
                </div>
            </div>
        </div>

        <!-- Categories Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
            <!-- Category 1 - Fantasi -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300 border border-gray-100">
                <div class="h-40 bg-gradient-to-br from-blue-500 to-blue-600 relative">
                    <div class="absolute inset-0 bg-black bg-opacity-20 flex items-center justify-center">
                        <i class="fas fa-dragon text-white text-5xl"></i>
                    </div>
                    <div class="absolute bottom-4 left-4">
                        <span class="bg-white bg-opacity-90 text-blue-700 text-xs font-bold px-3 py-1 rounded-full">
                            296 Item
                        </span>
                    </div>
                </div>
                <div class="p-5">
                    <h3 class="text-xl font-bold text-gray-800 mb-2">FANTASI</h3>
                    <p class="text-gray-600 text-sm mb-4">Dunia ajaib, sihir, dan petualangan epik menanti Anda</p>
                    <div class="flex justify-between items-center">
                        <span class="text-blue-600 font-medium">296 - 211 tersedia</span>
                        <button class="text-blue-600 hover:text-blue-800 font-medium flex items-center">
                            <a href="{{route('user.katalog.show')}}">Jelajahi</a>
                            Jelajahi <i class="fas fa-arrow-right ml-1 text-sm"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Category 2 - Sejarah & Arkeologi -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300 border border-gray-100">
                <div class="h-40 bg-gradient-to-br from-blue-400 to-blue-500 relative">
                    <div class="absolute inset-0 bg-black bg-opacity-20 flex items-center justify-center">
                        <i class="fas fa-landmark text-white text-5xl"></i>
                    </div>
                    <div class="absolute bottom-4 left-4">
                        <span class="bg-white bg-opacity-90 text-blue-700 text-xs font-bold px-3 py-1 rounded-full">
                            189 Item
                        </span>
                    </div>
                </div>
                <div class="p-5">
                    <h3 class="text-xl font-bold text-gray-800 mb-2">SEJARAH & ARKEOLOGI</h3>
                    <p class="text-gray-600 text-sm mb-4">Jelajahi kisah masa lalu dan perkembangan peradaban</p>
                    <div class="flex justify-between items-center">
                        <span class="text-blue-600 font-medium">189 - 156 tersedia</span>
                        <button class="text-blue-600 hover:text-blue-800 font-medium flex items-center">
                            Jelajahi <i class="fas fa-arrow-right ml-1 text-sm"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Category 3 - Teknologi -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300 border border-gray-100">
                <div class="h-40 bg-gradient-to-br from-blue-600 to-blue-700 relative">
                    <div class="absolute inset-0 bg-black bg-opacity-20 flex items-center justify-center">
                        <i class="fas fa-laptop-code text-white text-5xl"></i>
                    </div>
                    <div class="absolute bottom-4 left-4">
                        <span class="bg-white bg-opacity-90 text-blue-700 text-xs font-bold px-3 py-1 rounded-full">
                            156 Item
                        </span>
                    </div>
                </div>
                <div class="p-5">
                    <h3 class="text-xl font-bold text-gray-800 mb-2">TEKNOLOGI</h3>
                    <p class="text-gray-600 text-sm mb-4">Inovasi terkini dalam bidang teknologi dan engineering</p>
                    <div class="flex justify-between items-center">
                        <span class="text-blue-600 font-medium">156 - 142 tersedia</span>
                        <button class="text-blue-600 hover:text-blue-800 font-medium flex items-center">
                            Jelajahi <i class="fas fa-arrow-right ml-1 text-sm"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Category 4 - Bisnis & Ekonomi -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300 border border-gray-100">
                <div class="h-40 bg-gradient-to-br from-blue-700 to-blue-800 relative">
                    <div class="absolute inset-0 bg-black bg-opacity-20 flex items-center justify-center">
                        <i class="fas fa-chart-line text-white text-5xl"></i>
                    </div>
                    <div class="absolute bottom-4 left-4">
                        <span class="bg-white bg-opacity-90 text-blue-700 text-xs font-bold px-3 py-1 rounded-full">
                            234 Item
                        </span>
                    </div>
                </div>
                <div class="p-5">
                    <h3 class="text-xl font-bold text-gray-800 mb-2">BISNIS & EKONOMI</h3>
                    <p class="text-gray-600 text-sm mb-4">Strategi bisnis, manajemen, dan teori ekonomi terkini</p>
                    <div class="flex justify-between items-center">
                        <span class="text-blue-600 font-medium">234 - 198 tersedia</span>
                        <button class="text-blue-600 hover:text-blue-800 font-medium flex items-center">
                            Jelajahi <i class="fas fa-arrow-right ml-1 text-sm"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Category 5 - Pemrograman -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300 border border-gray-100">
                <div class="h-40 bg-gradient-to-br from-blue-800 to-blue-900 relative">
                    <div class="absolute inset-0 bg-black bg-opacity-20 flex items-center justify-center">
                        <i class="fas fa-code text-white text-5xl"></i>
                    </div>
                    <div class="absolute bottom-4 left-4">
                        <span class="bg-white bg-opacity-90 text-blue-700 text-xs font-bold px-3 py-1 rounded-full">
                            178 Item
                        </span>
                    </div>
                </div>
                <div class="p-5">
                    <h3 class="text-xl font-bold text-gray-800 mb-2">PEMROGRAMAN</h3>
                    <p class="text-gray-600 text-sm mb-4">Bahasa pemrograman, algoritma, dan pengembangan software</p>
                    <div class="flex justify-between items-center">
                        <span class="text-blue-600 font-medium">178 - 145 tersedia</span>
                        <button class="text-blue-600 hover:text-blue-800 font-medium flex items-center">
                            Jelajahi <i class="fas fa-arrow-right ml-1 text-sm"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Category 6 - Pengembangan Diri -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300 border border-gray-100">
                <div class="h-40 bg-gradient-to-br from-blue-300 to-blue-400 relative">
                    <div class="absolute inset-0 bg-black bg-opacity-20 flex items-center justify-center">
                        <i class="fas fa-user-graduate text-white text-5xl"></i>
                    </div>
                    <div class="absolute bottom-4 left-4">
                        <span class="bg-white bg-opacity-90 text-blue-700 text-xs font-bold px-3 py-1 rounded-full">
                            167 Item
                        </span>
                    </div>
                </div>
                <div class="p-5">
                    <h3 class="text-xl font-bold text-gray-800 mb-2">PENGEMBANGAN DIRI</h3>
                    <p class="text-gray-600 text-sm mb-4">Pengembangan keterampilan dan potensi diri</p>
                    <div class="flex justify-between items-center">
                        <span class="text-blue-600 font-medium">167 - 132 tersedia</span>
                        <button class="text-blue-600 hover:text-blue-800 font-medium flex items-center">
                            Jelajahi <i class="fas fa-arrow-right ml-1 text-sm"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Category 7 - Seni Budaya & Adat -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300 border border-gray-100">
                <div class="h-40 bg-gradient-to-br from-blue-200 to-blue-300 relative">
                    <div class="absolute inset-0 bg-black bg-opacity-20 flex items-center justify-center">
                        <i class="fas fa-palette text-white text-5xl"></i>
                    </div>
                    <div class="absolute bottom-4 left-4">
                        <span class="bg-white bg-opacity-90 text-blue-700 text-xs font-bold px-3 py-1 rounded-full">
                            145 Item
                        </span>
                    </div>
                </div>
                <div class="p-5">
                    <h3 class="text-xl font-bold text-gray-800 mb-2">SENI BUDAYA & ADAT</h3>
                    <p class="text-gray-600 text-sm mb-4">Kesenian, tradisi, dan warisan budaya nusantara</p>
                    <div class="flex justify-between items-center">
                        <span class="text-blue-600 font-medium">145 - 98 tersedia</span>
                        <button class="text-blue-600 hover:text-blue-800 font-medium flex items-center">
                            Jelajahi <i class="fas fa-arrow-right ml-1 text-sm"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Category 8 - Sains & Matematika -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300 border border-gray-100">
                <div class="h-40 bg-gradient-to-br from-blue-900 to-blue-950 relative">
                    <div class="absolute inset-0 bg-black bg-opacity-20 flex items-center justify-center">
                        <i class="fas fa-atom text-white text-5xl"></i>
                    </div>
                    <div class="absolute bottom-4 left-4">
                        <span class="bg-white bg-opacity-90 text-blue-700 text-xs font-bold px-3 py-1 rounded-full">
                            198 Item
                        </span>
                    </div>
                </div>
                <div class="p-5">
                    <h3 class="text-xl font-bold text-gray-800 mb-2">SAINS & MATEMATIKA</h3>
                    <p class="text-gray-600 text-sm mb-4">Penemuan ilmiah dan eksplorasi alam semesta</p>
                    <div class="flex justify-between items-center">
                        <span class="text-blue-600 font-medium">198 - 175 tersedia</span>
                        <button class="text-blue-600 hover:text-blue-800 font-medium flex items-center">
                            Jelajahi <i class="fas fa-arrow-right ml-1 text-sm"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pagination -->
        <div class="mt-12 flex justify-center">
            <nav class="inline-flex rounded-md shadow">
                <a href="#" class="py-2 px-4 border border-gray-300 bg-white text-gray-500 hover:bg-gray-50 rounded-l-md">
                    <i class="fas fa-chevron-left"></i>
                </a>
                <a href="#" class="py-2 px-4 border border-gray-300 bg-white text-gray-500 hover:bg-gray-50">1</a>
                <a href="#" class="py-2 px-4 border border-gray-300 bg-blue-600 text-white">2</a>
                <a href="#" class="py-2 px-4 border border-gray-300 bg-white text-gray-500 hover:bg-gray-50">3</a>
                <a href="#" class="py-2 px-4 border border-gray-300 bg-white text-gray-500 hover:bg-gray-50 rounded-r-md">
                    <i class="fas fa-chevron-right"></i>
                </a>
            </nav>
        </div>
    </main>
@endsection
