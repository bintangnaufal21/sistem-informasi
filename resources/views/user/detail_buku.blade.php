@extends('layouts.LayoutUser')

@section('title', 'Detail Buku')

@section('content')
<section class="py-10">
    <div class="container mx-auto px-4">

        <!-- Card besar -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <div class="md:flex">

                <!-- Cover Buku -->
                <div class="md:w-1/3 p-6 flex items-center justify-center bg-gray-50">
                    <img
                        src="/assets/buku1.jpg"
                        alt="Judul Buku"
                        class="w-48 h-64 object-cover rounded-md shadow-sm"
                    >
                </div>

                <!-- Informasi Buku -->
                <div class="md:w-2/3 p-6">
                    <h1 class="text-2xl font-bold text-gray-800">Judul Buku</h1>
                    <p class="text-sm text-gray-500 mb-3">Penulis • Penerbit • Tahun</p>

                    <div class="flex items-center gap-4 mb-4">
                        <span class="inline-block text-xs px-3 py-1 rounded-full bg-blue-100 text-blue-800 font-semibold">
                            Nama Kategori
                        </span>

                        <span class="inline-block text-xs px-3 py-1 rounded-full bg-green-100 text-green-800 font-semibold">
                            Tersedia (5)
                        </span>

                        <span class="text-xs text-gray-500">ISBN: 1234567890</span>
                    </div>

                    <p class="text-gray-700 leading-relaxed mb-6">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt magna sed arcu
                        efficitur, vel condimentum ipsum gravida. Donec a tincidunt purus. Mauris pretium
                        sollicitudin sem, ac gravida lorem malesuada at. Ut mattis convallis sapien non varius.
                    </p>

                    <div class="flex flex-col sm:flex-row sm:items-center sm:gap-4">
                        <button
                            class="bg-blue-600 hover:bg-blue-700 text-white py-2 px-4 rounded-lg font-semibold transition">
                            Pinjam Buku
                        </button>

                        <a href="{{route('user.katalog.index')}}" class="mt-3 sm:mt-0 inline-block text-gray-600 hover:text-blue-700">
                            ← Kembali ke katalog
                        </a>
                    </div>

                    <div class="mt-6 text-sm text-gray-500">
                        <p>Jumlah total: <strong>10</strong></p>
                        <p>Last updated: <strong>20 Nov 2025</strong></p>
                    </div>
                </div>

            </div>
        </div>



                <!-- Tambah lagi sesuai kebutuhan -->
            </div>
        </div>

    </div>
</section>
@endsection
