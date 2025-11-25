@extends('layouts.layoutAdmin')

@section('content')
<main class="min-h-screen bg-gray-50">
    <!-- Hero / Header -->
    <section class="bg-gradient-to-r from-blue-700 to-blue-900 text-white py-8 md:py-12">
        <div class="container mx-auto px-4">
            <div class="rounded-lg border-l-4 border-yellow-400 bg-white/10 backdrop-blur-sm p-6 md:p-8">
                <div class="text-center">
                    <h1 class="text-2xl md:text-4xl font-bold mb-1">BUKU JEMBATAN ILMU</h1>
                    <p class="text-sm md:text-lg text-blue-100">Agenda Perpustakaan — Kelola kegiatan dan informasi</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Main content -->
    <section class="py-6 md:py-8">
        <div class="container mx-auto px-4">

            <!-- Grid: main list + right info (stack on small screens) -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 md:gap-8">

                <!-- Left: Main (span 2 on large screens) -->
                <div class="lg:col-span-2 space-y-6 min-w-0">

                    <!-- Toolbar (search / filters) -->
                    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
                        <div>
                            <h2 class="text-lg md:text-xl font-semibold text-gray-800">Daftar Agenda</h2>
                            <p class="text-xs md:text-sm text-gray-500">Kelola semua kegiatan perpustakaan di sini.</p>
                        </div>

                        <div class="flex flex-wrap items-center gap-2">
                            <input type="text" placeholder="Cari kegiatan..." class="px-3 py-2 border rounded-lg text-sm w-full sm:w-56 focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <select class="px-3 py-2 border rounded-lg text-sm">
                                <option>Semua Kategori</option>
                                <option>Workshop</option>
                                <option>Seminar</option>
                            </select>
                            <a href="{{ route('admin.agenda.tambah') }}" class="inline-block bg-yellow-500 hover:bg-yellow-600 text-black-900 px-3 md:px-4 py-2 rounded-lg text-sm font-semibold">Tambah Agenda</a>
                        </div>
                    </div>

                    <!-- Table (visible on lg and up) -->
                    <div class="bg-white rounded-lg shadow overflow-hidden">
                        <div class="p-4 md:p-6 border-b">
                            <h3 class="text-md md:text-lg font-semibold text-gray-800">Detail Kegiatan</h3>
                            <p class="text-xs md:text-sm text-gray-500 mt-1">Daftar lengkap agenda perpustakaan — klik item untuk edit (nanti).</p>
                        </div>

                        <div class="overflow-x-auto">
                            <table class="w-full table-auto lg:table">
                                <thead class="bg-gray-50 hidden lg:table-header-group">
                                    <tr>
                                        <th scope="col" class="px-4 py-3 text-left text-xs md:text-sm font-medium text-gray-600 uppercase tracking-wider">No</th>
                                        <th scope="col" class="px-4 py-3 text-left text-xs md:text-sm font-medium text-gray-600 uppercase tracking-wider">Kegiatan</th>
                                        <th scope="col" class="px-4 py-3 text-left text-xs md:text-sm font-medium text-gray-600 uppercase tracking-wider">Deskripsi</th>
                                        <th scope="col" class="px-4 py-3 text-left text-xs md:text-sm font-medium text-gray-600 uppercase tracking-wider">Tanggal</th>
                                        <th scope="col" class="px-4 py-3 text-left text-xs md:text-sm font-medium text-gray-600 uppercase tracking-wider">Penanggung Jawab</th>
                                        <th scope="col" class="px-4 py-3 text-left text-xs md:text-sm font-medium text-gray-600 uppercase tracking-wider">Aksi</th>
                                    </tr>
                                </thead>

                                <tbody class="bg-white divide-y divide-gray-200">
                                    <!-- Row 1 -->
                                    <tr class="lg:table-row block lg:table-row-group">
                                        <!-- For mobile we render cells as stacked blocks -->
                                        <td class="px-4 py-4 lg:table-cell block">
                                            <span class="inline-flex items-center justify-center w-8 h-8 bg-blue-100 text-blue-800 rounded-full text-sm font-semibold">1</span>
                                        </td>

                                        <td class="px-4 py-4 lg:table-cell block">
                                            <div class="font-semibold text-gray-900">Pembukaan & Pengenalan Proyek</div>
                                            <div class="text-xs text-gray-500 lg:hidden mt-1">10 Des 2025 • Ketua Tim</div>
                                        </td>

                                        <td class="px-4 py-4 lg:table-cell block text-sm text-gray-600">
                                            Menjelaskan tujuan proyek, fitur utama, dan konsep desain web perpustakaan.
                                        </td>

                                        <td class="px-4 py-4 lg:table-cell block text-sm text-gray-700 hidden lg:table-cell">10 Des 2025</td>

                                        <td class="px-4 py-4 lg:table-cell block text-sm text-gray-700 hidden lg:table-cell">Ketua Tim</td>

                                        <td class="px-4 py-4 lg:table-cell block text-sm">
                                            <div class="flex flex-wrap gap-3">
                                                <a href="#" class="text-blue-600 hover:underline">Edit</a>
                                                <a href="#" class="text-red-600 hover:underline">Hapus</a>
                                            </div>
                                        </td>
                                    </tr>

                                    <!-- Row 2 -->
                                    <tr class="lg:table-row block lg:table-row-group">
                                        <td class="px-4 py-4 lg:table-cell block">
                                            <span class="inline-flex items-center justify-center w-8 h-8 bg-blue-100 text-blue-800 rounded-full text-sm font-semibold">2</span>
                                        </td>
                                        <td class="px-4 py-4 lg:table-cell block">
                                            <div class="font-semibold text-gray-900">Perencanaan Desain</div>
                                            <div class="text-xs text-gray-500 lg:hidden mt-1">12 Des 2025 • Designer UI</div>
                                        </td>
                                        <td class="px-4 py-4 lg:table-cell block text-sm text-gray-600">Membuat wireframe untuk layout utama perpustakaan digital.</td>
                                        <td class="px-4 py-4 lg:table-cell block text-sm text-gray-700 hidden lg:table-cell">12 Des 2025</td>
                                        <td class="px-4 py-4 lg:table-cell block text-sm text-gray-700 hidden lg:table-cell">Designer UI</td>
                                        <td class="px-4 py-4 lg:table-cell block text-sm">
                                            <div class="flex gap-3">
                                                <a href="#" class="text-blue-600 hover:underline">Edit</a>
                                                <a href="#" class="text-red-600 hover:underline">Hapus</a>
                                            </div>
                                        </td>
                                    </tr>

                                    <!-- Row 3 -->
                                    <tr class="lg:table-row block lg:table-row-group">
                                        <td class="px-4 py-4 lg:table-cell block">
                                            <span class="inline-flex items-center justify-center w-8 h-8 bg-blue-100 text-blue-800 rounded-full text-sm font-semibold">3</span>
                                        </td>
                                        <td class="px-4 py-4 lg:table-cell block">
                                            <div class="font-semibold text-gray-900">Implementasi Frontend</div>
                                            <div class="text-xs text-gray-500 lg:hidden mt-1">20 Des 2025 • Frontend Developer</div>
                                        </td>
                                        <td class="px-4 py-4 lg:table-cell block text-sm text-gray-600">Mengkonversi desain ke kode HTML, CSS, dan JavaScript.</td>
                                        <td class="px-4 py-4 lg:table-cell block text-sm text-gray-700 hidden lg:table-cell">20 Des 2025</td>
                                        <td class="px-4 py-4 lg:table-cell block text-sm text-gray-700 hidden lg:table-cell">Frontend Developer</td>
                                        <td class="px-4 py-4 lg:table-cell block text-sm">
                                            <div class="flex gap-3">
                                                <a href="#" class="text-blue-600 hover:underline">Edit</a>
                                                <a href="#" class="text-red-600 hover:underline">Hapus</a>
                                            </div>
                                        </td>
                                    </tr>

                                    <!-- placeholder kosong -->
                                    <tr>
                                        <td colspan="6" class="px-4 py-8 text-center text-gray-500">
                                            Tidak ada data lainnya.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- Mobile: cards (visible on small screens only) -->
                    <div class="lg:hidden space-y-4 mt-2">
                        <article class="bg-white rounded-lg shadow p-4">
                            <div class="flex items-start gap-3">
                                <div class="flex-shrink-0">
                                    <span class="inline-flex items-center justify-center w-10 h-10 bg-blue-100 text-blue-800 rounded-full font-semibold">1</span>
                                </div>
                                <div class="flex-1">
                                    <div class="flex justify-between items-start gap-4">
                                        <div>
                                            <h4 class="text-sm font-semibold text-gray-900">Pembukaan & Pengenalan Proyek</h4>
                                            <p class="text-xs text-gray-500 mt-1">Ketua Tim</p>
                                        </div>
                                        <div class="text-xs text-gray-600">10 Des 2025</div>
                                    </div>
                                    <p class="text-sm text-gray-600 mt-3">Menjelaskan tujuan proyek, fitur utama, dan konsep desain web perpustakaan.</p>
                                    <div class="mt-3 flex gap-4">
                                        <a href="#" class="text-blue-600 text-sm">Edit</a>
                                        <a href="#" class="text-red-600 text-sm">Hapus</a>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <!-- duplikat card contoh -->
                        <article class="bg-white rounded-lg shadow p-4">
                            <div class="flex items-start gap-3">
                                <div class="flex-shrink-0">
                                    <span class="inline-flex items-center justify-center w-10 h-10 bg-blue-100 text-blue-800 rounded-full font-semibold">2</span>
                                </div>
                                <div class="flex-1">
                                    <div class="flex justify-between items-start gap-4">
                                        <div>
                                            <h4 class="text-sm font-semibold text-gray-900">Perencanaan Desain</h4>
                                            <p class="text-xs text-gray-500 mt-1">Designer UI</p>
                                        </div>
                                        <div class="text-xs text-gray-600">12 Des 2025</div>
                                    </div>
                                    <p class="text-sm text-gray-600 mt-3">Membuat wireframe untuk layout utama perpustakaan digital.</p>
                                    <div class="mt-3 flex gap-4">
                                        <a href="#" class="text-blue-600 text-sm">Edit</a>
                                        <a href="#" class="text-red-600 text-sm">Hapus</a>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>

                <!-- Right: Informasi singkat -->
                <aside class="space-y-6">
                    <div class="bg-white rounded-lg shadow p-4 md:p-6 border-l-4 border-green-500">
                        <h3 class="text-md md:text-lg font-semibold text-gray-800 flex items-center gap-3">
                            <span class="w-9 h-9 bg-green-100 rounded-xl flex items-center justify-center"><i class="fas fa-info-circle text-green-600"></i></span>
                            Informasi
                        </h3>

                        <div class="grid grid-cols-1 gap-4 mt-4">
                            <div class="text-center bg-blue-50 rounded-xl p-4 border border-blue-200">
                                <div class="flex items-center justify-center mb-3">
                                    <div class="w-10 h-10 bg-blue-600 rounded-full flex items-center justify-center">
                                        <i class="fas fa-clock text-white"></i>
                                    </div>
                                </div>
                                <p class="font-semibold text-gray-700">Operasional</p>
                                <p class="text-xs text-gray-600 mt-2">Senin-Kamis: <strong class="text-gray-800">08:00 - 18:00</strong></p>
                                <p class="text-xs text-gray-600">Jum'at: <strong class="text-gray-800">13:00 - 18:00</strong></p>
                            </div>

                            <div class="text-center bg-green-50 rounded-xl p-4 border border-green-200">
                                <div class="flex items-center justify-center mb-3">
                                    <div class="w-10 h-10 bg-green-600 rounded-full flex items-center justify-center">
                                        <i class="fas fa-map-marker-alt text-white"></i>
                                    </div>
                                </div>
                                <p class="font-semibold text-gray-700">Lokasi</p>
                                <p class="text-xs text-gray-600 mt-2">Jl. Sylah Kuala</p>
                                <p class="text-xs text-gray-600">Aceh, Banda Aceh</p>
                            </div>

                            <div class="text-center bg-purple-50 rounded-xl p-4 border border-purple-200">
                                <div class="flex items-center justify-center mb-3">
                                    <div class="w-10 h-10 bg-purple-600 rounded-full flex items-center justify-center">
                                        <i class="fas fa-phone text-white"></i>
                                    </div>
                                </div>
                                <p class="font-semibold text-gray-700">Kontak</p>
                                <p class="text-xs text-gray-600 mt-2">+62 812 3456 7890</p>
                                <p class="text-xs text-gray-600">text@test.com</p>
                            </div>
                        </div>
                    </div>



                    </div>
                </aside>
            </div>
        </div>
    </section>
</main>
@endsection
