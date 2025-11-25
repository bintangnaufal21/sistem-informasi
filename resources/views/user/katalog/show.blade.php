@extends('layouts.LayoutUser')

@section('title', 'Katalog -')

@section('content')
    <!-- Main Content -->
    <main class="container mx-auto px-4 py-8">
        <!-- Breadcrumb -->
        <div class="mb-6">
            <nav class="text-sm text-gray-500">
                <a href="{{route('user.home')}}" class="hover:text-blue-600">Beranda</a> /
                <a href="{{route('user.katalog.index')}}" class="hover:text-blue-600">Katalog</a> /
                <span class="text-blue-800 font-medium">Fantasi</span>
            </nav>
        </div>

        <!-- Category Header -->
        <div class="bg-gradient-to-r from-blue-700 to-blue-900 rounded-xl p-8 mb-8 text-white shadow-lg">
            <h1 class="text-4xl font-bold mb-4">FANTASI</h1>
            <p class="text-xl mb-2">Temukan dunia ajaib, sihir, dan petualangan epik</p>
            <p class="text-blue-200">Dari fantasi klasik hingga urban fantasy - 296 buku tersedia</p>
        </div>

        <!-- Books Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
            <!-- Book 1 -->
            <div
                class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300 border border-gray-100">
                <div class="h-48 bg-gradient-to-br from-blue-500 to-blue-600 flex items-center justify-center">
                    <div class="text-center text-white p-4">
                        <h3 class="text-xl font-bold mb-2">Tujuh Kelana</h3>
                        <p class="font-medium">KILANTAK</p>
                    </div>
                </div>
                <div class="p-4">
                    <div class="flex justify-between items-center mb-3">
                        <span class="bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded">Fantasi</span>
                        <span class="text-yellow-500">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </span>
                    </div>
                    <p class="text-gray-600 text-sm mb-4">Petualangan epik tujuh pahlawan dalam dunia fantasi yang
                        menakjubkan.</p>
                    <div class="flex justify-between items-center">
                        <button class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md text-sm transition-colors">
                            <i class="fas fa-book-open mr-1"></i> <a href="{{route('user.detail')}}"> Pinjam</a></button>
                        <button class="text-gray-500 hover:text-blue-600">
                            <i class="far fa-heart"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Book 2 -->
            <div
                class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300 border border-gray-100">
                <div class="h-48 bg-gradient-to-br from-blue-400 to-blue-500 flex items-center justify-center">
                    <div class="text-center text-white p-4">
                        <h3 class="text-xl font-bold mb-2">Little Magacal Piya</h3>
                        <p class="font-medium">JENNIFER A. NITASA</p>
                    </div>
                </div>
                <div class="p-4">
                    <div class="flex justify-between items-center mb-3">
                        <span class="bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded">Fantasi</span>
                        <span class="text-yellow-500">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </span>
                    </div>
                    <p class="text-gray-600 text-sm mb-4">Kisah magis tentang petualangan Piya di dunia sihir yang penuh
                        keajaiban.</p>
                    <div class="flex justify-between items-center">
                        <button
                            class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md text-sm transition-colors">
                            <i class="fas fa-book-open mr-1"></i> Pinjam
                        </button>
                        <button class="text-gray-500 hover:text-blue-600">
                            <i class="far fa-heart"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Book 3 -->
            <div
                class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300 border border-gray-100">
                <div class="h-48 bg-gradient-to-br from-blue-600 to-blue-700 flex items-center justify-center">
                    <div class="text-center text-white p-4">
                        <h3 class="text-xl font-bold mb-2">The False Prince</h3>
                        <p class="font-medium">JENNIFER A. NITASA</p>
                    </div>
                </div>
                <div class="p-4">
                    <div class="flex justify-between items-center mb-3">
                        <span class="bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded">Fantasi</span>
                        <span class="text-yellow-500">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </span>
                    </div>
                    <p class="text-gray-600 text-sm mb-4">Intrik kerajaan dan tipu muslihat dalam pencarian pewaris takhta
                        yang sebenarnya.</p>
                    <div class="flex justify-between items-center">
                        <button
                            class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md text-sm transition-colors">
                            <i class="fas fa-book-open mr-1"></i> Pinjam
                        </button>
                        <button class="text-gray-500 hover:text-blue-600">
                            <i class="far fa-heart"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Book 4 -->
            <div
                class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300 border border-gray-100">
                <div class="h-48 bg-gradient-to-br from-blue-700 to-blue-800 flex items-center justify-center">
                    <div class="text-center text-white p-4">
                        <h3 class="text-xl font-bold mb-2">THE DRAGON REPUBLIC</h3>
                        <p class="font-medium">R. KAMMAR</p>
                    </div>
                </div>
                <div class="p-4">
                    <div class="flex justify-between items-center mb-3">
                        <span class="bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded">Fantasi</span>
                        <span class="text-yellow-500">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </span>
                    </div>
                    <p class="text-gray-600 text-sm mb-4">Kekaisaran naga dan perjuangan untuk kebebasan di dunia fantasi
                        epik.</p>
                    <div class="flex justify-between items-center">
                        <button
                            class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md text-sm transition-colors">
                            <i class="fas fa-book-open mr-1"></i> Pinjam
                        </button>
                        <button class="text-gray-500 hover:text-blue-600">
                            <i class="far fa-heart"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pagination -->
        <div class="mt-12 flex justify-center">
            <nav class="inline-flex rounded-md shadow">
                <a href="#"
                    class="py-2 px-4 border border-gray-300 bg-white text-gray-500 hover:bg-gray-50 rounded-l-md">
                    <i class="fas fa-chevron-left"></i>
                </a>
                <a href="#" class="py-2 px-4 border border-gray-300 bg-white text-gray-500 hover:bg-gray-50">1</a>
                <a href="#" class="py-2 px-4 border border-gray-300 bg-blue-600 text-white">2</a>
                <a href="#" class="py-2 px-4 border border-gray-300 bg-white text-gray-500 hover:bg-gray-50">3</a>
                <a href="#"
                    class="py-2 px-4 border border-gray-300 bg-white text-gray-500 hover:bg-gray-50 rounded-r-md">
                    <i class="fas fa-chevron-right"></i>
                </a>
            </nav>
        </div>
    </main>
@endsection
