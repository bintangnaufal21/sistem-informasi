@extends('layouts.LayoutUser')
@section('title', 'Agenda')
@section('content')
    <!-- Main Content -->
    <main class="min-h-screen">
        <!-- Page Header -->
        <section class="bg-gradient-to-r from-blue-700 to-blue-900 text-white py-16">
            <div class="container mx-auto px-4 text-center">
                <h1 class="text-4xl font-bold mb-4">BUKU JEMBATAN ILMU</h1>
                <p class="text-xl">Agenda Perpustakaan</p>
            </div>
        </section>

        <!-- Content Section -->
        <section class="py-12">
            <div class="container mx-auto px-4">
                <div class="grid grid-cols-1 gap-8">
                    <!-- Main Content - Table -->
                    <div>
                        <div class="bg-white rounded-lg shadow-md overflow-hidden">
                            <!-- Table Header -->
                            <div class="bg-blue-800 text-white px-6 py-4">
                                <h3 class="text-xl font-bold">Detail Kegiatan</h3>
                            </div>

                            <!-- Table -->
                            <div class="overflow-x-auto">
                                <table class="w-full">
                                    <thead class="bg-blue-50">
                                        <tr>
                                            <th
                                                class="px-6 py-3 text-left text-xs font-medium text-blue-800 uppercase tracking-wider border-b">
                                                No</th>
                                            <th
                                                class="px-6 py-3 text-left text-xs font-medium text-blue-800 uppercase tracking-wider border-b">
                                                Kegiatan</th>
                                            <th
                                                class="px-6 py-3 text-left text-xs font-medium text-blue-800 uppercase tracking-wider border-b">
                                                Deskripsi</th>
                                            <th
                                                class="px-6 py-3 text-left text-xs font-medium text-blue-800 uppercase tracking-wider border-b">
                                                Penanggung Jawab</th>
                                        </tr>
                                    </thead>
                                    <tbody class="divide-y divide-gray-200">
                                        <!-- Row 1 -->
                                        <tr class="hover:bg-blue-50 transition">
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <span
                                                    class="inline-flex items-center justify-center w-8 h-8 bg-blue-100 text-blue-800 rounded-full text-sm font-bold">1</span>
                                            </td>
                                            <td class="px-6 py-4">
                                                <p class="font-semibold text-gray-900">Pembukaan & Pengenalan Proyek</p>
                                            </td>
                                            <td class="px-6 py-4">
                                                <p class="text-sm text-gray-600">Menjelaskan tujuan proyek, fitur utama, dan
                                                    konsep desain web perpustakaan.</p>
                                            </td>
                                            <td class="px-6 py-4">
                                                <p class="text-sm text-gray-600">Ketua Tim / Project Manager</p>
                                            </td>
                                        </tr>

                                        <!-- Row 2 -->
                                        <tr class="hover:bg-blue-50 transition">
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <span
                                                    class="inline-flex items-center justify-center w-8 h-8 bg-blue-100 text-blue-800 rounded-full text-sm font-bold">2</span>
                                            </td>
                                            <td class="px-6 py-4">
                                                <p class="font-semibold text-gray-900">Perencanaan Desain (Wireframe)</p>
                                            </td>
                                            <td class="px-6 py-4">
                                                <p class="text-sm text-gray-600">Membuat wireframe untuk layout utama
                                                    seperti beranda, katalog, detail buku, dan dashboard anggota.</p>
                                            </td>
                                            <td class="px-6 py-4">
                                                <p class="text-sm text-gray-600">Designer UI</p>
                                            </td>
                                        </tr>

                                        <!-- Row 3 -->
                                        <tr class="hover:bg-blue-50 transition">
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <span
                                                    class="inline-flex items-center justify-center w-8 h-8 bg-blue-100 text-blue-800 rounded-full text-sm font-bold">3</span>
                                            </td>
                                            <td class="px-6 py-4">
                                                <p class="font-semibold text-gray-900">Penentuan Warna & Tipografi</p>
                                            </td>
                                            <td class="px-6 py-4">
                                                <p class="text-sm text-gray-600">Menentukan palet warna, font, dan gaya
                                                    visual sesuai tema akademik.</p>
                                            </td>
                                            <td class="px-6 py-4">
                                                <p class="text-sm text-gray-600">Tim Desain</p>
                                            </td>
                                        </tr>

                                        <!-- Row 4 -->
                                        <tr class="hover:bg-blue-50 transition">
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <span
                                                    class="inline-flex items-center justify-center w-8 h-8 bg-blue-100 text-blue-800 rounded-full text-sm font-bold">4</span>
                                            </td>
                                            <td class="px-6 py-4">
                                                <p class="font-semibold text-gray-900">Pembuatan Komponen Figma</p>
                                            </td>
                                            <td class="px-6 py-4">
                                                <p class="text-sm text-gray-600">Membuat komponen tombol, form input, card
                                                    buku, tabel data, form login, dll.</p>
                                            </td>
                                            <td class="px-6 py-4">
                                                <p class="text-sm text-gray-600">Designer UI/UX</p>
                                            </td>
                                        </tr>

                                        <!-- Row 5 -->
                                        <tr class="hover:bg-blue-50 transition">
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <span
                                                    class="inline-flex items-center justify-center w-8 h-8 bg-blue-100 text-blue-800 rounded-full text-sm font-bold">5</span>
                                            </td>
                                            <td class="px-6 py-4">
                                                <p class="font-semibold text-gray-900">Implementasi Frontend</p>
                                            </td>
                                            <td class="px-6 py-4">
                                                <p class="text-sm text-gray-600">Mengkonversi desain Figma ke kode HTML,
                                                    CSS, dan JavaScript.</p>
                                            </td>
                                            <td class="px-6 py-4">
                                                <p class="text-sm text-gray-600">Frontend Developer</p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <!-- Informasi Section -->
                        <div class="bg-white rounded-lg shadow-md p-6 mt-8">
                            <h3 class="text-xl font-bold text-blue-800 mb-6">Informasi</h3>
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                                <div>
                                    <p class="font-semibold text-gray-700 mb-2">Operasional</p>
                                    <p class="text-sm text-gray-600">Senin - Kamis: 08:00 - 18:00 WIB</p>
                                    <p class="text-sm text-gray-600">Jum'at: 13:00 - 18:00 WIB</p>
                                </div>

                                <div>
                                    <p class="font-semibold text-gray-700 mb-2">Lokasi</p>
                                    <p class="text-sm text-gray-600">Jl. Sylah Kuala, Aceh, Banda Aceh</p>
                                </div>

                                <div>
                                    <p class="font-semibold text-gray-700 mb-2">Kontak</p>
                                    <p class="text-sm text-gray-600">+62 812 3456 7890</p>
                                    <p class="text-sm text-gray-600">+62 812 3456 7810</p>
                                    <p class="text-sm text-gray-600">text@test.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
