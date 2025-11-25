@extends('layouts.LayoutUser')

@section('title',  'Beranda')

@section('content')
<!-- Hero Section -->
    <section class="bg-gradient-to-r from-blue-700 to-blue-900 text-white py-16">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-4xl font-bold mb-4">Temukan Dunia dalam Setiap Halaman</h2>
            <p class="text-xl mb-8 max-w-2xl mx-auto">Jelajahi koleksi buku terbaik kami untuk memperluas wawasan dan pengetahuan Anda</p>
            <a href="{{route('user.katalog.index')}}" class="bg-yellow-500 hover:bg-yellow-600 text-blue-900 font-bold py-3 px-8 rounded-full transition duration-300 inline-block">
                Jelajahi Koleksi
            </a>
        </div>
    </section>

    <!-- Book Section -->
    <section class="py-8">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Book 1 - The False Prince -->
                <div class="bg-white rounded-lg border border-gray-200 overflow-hidden transition-transform duration-300 hover:scale-105 hover:shadow-md">
                    <div class="h-48 bg-gray-50 flex items-center justify-center p-4">
                        <img src="/assets/buku 3.webp"
                             alt="The False Prince"
                             class="h-36 w-28 object-cover rounded">
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-bold text-gray-800 mb-2">The False Prince</h3>
                        <p class="text-gray-600 text-sm mb-3 leading-relaxed">Petualangan epik tentang seorang pangeran palsu yang harus membuktikan dirinya</p>
                        <div class="flex justify-between items-center">
                            <span class="text-yellow-500 font-bold">Rp 85.000</span>
                            <button class="bg-blue-600 hover:bg-blue-700 text-white py-2 px-4 rounded-lg text-sm transition duration-300">
                                Beli Sekarang
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Book 2 - Kedotuan Sivilgiya -->
                <div class="bg-white rounded-lg border border-gray-200 overflow-hidden transition-transform duration-300 hover:scale-105 hover:shadow-md">
                    <div class="h-48 bg-gray-50 flex items-center justify-center p-4">
                        <img src="/assets/buku 1.jpg"
                             alt="Kedotuan Sivilgiya"
                             class="h-36 w-28 object-cover rounded">
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-bold text-gray-800 mb-2">kedaulatan sriwijaya</h3>
                        <p class="text-gray-600 text-sm mb-3 leading-relaxed">Kisah tentang peradaban kuno dan rahasia yang tersembunyi</p>
                        <div class="flex justify-between items-center">
                            <span class="text-yellow-500 font-bold">Rp 92.000</span>
                            <button class="bg-blue-600 hover:bg-blue-700 text-white py-2 px-4 rounded-lg text-sm transition duration-300">
                                Beli Sekarang
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Book 3 - Iblis tidal French Moti -->
                <div class="bg-white rounded-lg border border-gray-200 overflow-hidden transition-transform duration-300 hover:scale-105 hover:shadow-md">
                    <div class="h-48 bg-gray-50 flex items-center justify-center p-4">
                        <img src="/assets/buku 2.jpg"
                             alt="iblis tidak akan mati"
                             class="h-36 w-28 object-cover rounded">
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-bold text-gray-800 mb-2">iblis tidak akan mati</h3>
                        <p class="text-gray-600 text-sm mb-3 leading-relaxed">Perjalanan spiritual dan pencarian makna hidup yang mendalam</p>
                        <div class="flex justify-between items-center">
                            <span class="text-yellow-500 font-bold">Rp 78.000</span>
                            <button class="bg-blue-600 hover:bg-blue-700 text-white py-2 px-4 rounded-lg text-sm transition duration-300">
                                Beli Sekarang
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection
