@extends('layouts.LayoutUser')

@section('title', 'Profil Saya')

@section('content')
    <section class="py-10">
        <div class="container mx-auto px-4">

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                <!-- LEFT: Profil Singkat (Statis) -->
                <div class="bg-white rounded-lg shadow p-6">
                    <div class="flex items-center gap-4">
                        <div class="w-20 h-20 rounded-full bg-gray-100 overflow-hidden flex items-center justify-center">
                            <!-- Ganti gambar manual di /assets/default-avatar.png -->
                            <img src="{{asset('assets/profile.JPG')}}" alt="Avatar" class="w-full h-full object-cover">
                        </div>

                        <div>
                            <h2 class="text-xl font-bold text-gray-800">Bintang Naufal</h2>
                            <p class="text-sm text-gray-500">bintang@example.com</p>
                            <p class="text-sm text-gray-500">+62 812 3456 7890</p>
                        </div>
                    </div>

                    <div class="mt-6 space-y-3">
                        <a href="{{route('user.profile.edit')}}"
                            class="block text-center bg-blue-600 hover:bg-blue-700 text-white py-2 rounded-lg font-semibold">Edit
                            Profil</a>
                        <a href="#"
                            class="block text-center border border-gray-200 py-2 rounded-lg text-gray-700 hover:shadow">Ganti
                            Password</a>
                    </div>

                    <div class="mt-6 border-t pt-4 text-sm text-gray-600">
                        <p>Keanggotaan: <strong>User</strong></p>
                        <p>Terdaftar sejak: <strong>01 Jan 2025</strong></p>
                    </div>
                </div>

                <!-- MIDDLE & RIGHT: Ringkasan & Riwayat (Statis) -->
                <div class="lg:col-span-2 space-y-6">

                    <!-- Quick Stats (Statis) -->
                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                        <div class="bg-white p-4 rounded-lg shadow flex items-center justify-between">
                            <div>
                                <p class="text-sm text-gray-500">Pinjaman Aktif</p>
                                <p class="text-2xl font-bold text-gray-800">2</p>
                            </div>
                            <div class="text-blue-600 text-3xl">
                                <i class="fas fa-book"></i>
                            </div>
                        </div>

                        <div class="bg-white p-4 rounded-lg shadow flex items-center justify-between">
                            <div>
                                <p class="text-sm text-gray-500">Denda Belum Bayar</p>
                                <p class="text-2xl font-bold text-red-600">Rp 0</p>
                            </div>
                            <div class="text-red-500 text-3xl">
                                <i class="fas fa-exclamation-triangle"></i>
                            </div>
                        </div>

                        <div class="bg-white p-4 rounded-lg shadow flex items-center justify-between">
                            <div>
                                <p class="text-sm text-gray-500">Reservasi</p>
                                <p class="text-2xl font-bold text-gray-800">1</p>
                            </div>
                            <div class="text-green-500 text-3xl">
                                <i class="fas fa-calendar-check"></i>
                            </div>
                        </div>
                    </div>

                    <!-- Riwayat Peminjaman (Statis) -->
                    <div class="bg-white rounded-lg shadow p-6">
                        <div class="flex items-center justify-between mb-4">
                            <h3 class="text-lg font-semibold text-gray-800">Riwayat Peminjaman</h3>
                            <a href="{{route('user.pinjam')}}" class="text-sm text-blue-600 hover:underline">Lihat semua</a>
                        </div>

                        <div class="overflow-x-auto">
                            <table class="w-full text-left">
                                <thead>
                                    <tr class="text-sm text-gray-500 border-b">
                                        <th class="py-3">Buku</th>
                                        <th class="py-3">Tanggal Pinjam</th>
                                        <th class="py-3">Batas Kembali</th>
                                        <th class="py-3">Status</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <!-- contoh baris 1 -->
                                    <tr class="border-b hover:bg-gray-50">
                                        <td class="py-3">
                                            <div class="flex items-center gap-3">
                                                <img src="/assets/buku1.jpg" alt="The False Prince"
                                                    class="w-12 h-16 object-cover rounded">
                                                <div>
                                                    <div class="text-sm font-semibold text-gray-800">The False Prince</div>
                                                    <div class="text-xs text-gray-500">Jennifer A. Nielsen</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="py-3 text-sm text-gray-600">10 Nov 2025</td>
                                        <td class="py-3 text-sm text-gray-600">17 Nov 2025</td>
                                        <td class="py-3">
                                            <span
                                                class="px-3 py-1 rounded-full text-xs font-semibold bg-yellow-100 text-yellow-800">Dipinjam</span>
                                        </td>

                                    </tr>

                                    <!-- contoh baris 2 -->
                                    <tr class="border-b hover:bg-gray-50">
                                        <td class="py-3">
                                            <div class="flex items-center gap-3">
                                                <img src="/assets/buku2.jpg" alt="Iblis Tidak Akan Mati"
                                                    class="w-12 h-16 object-cover rounded">
                                                <div>
                                                    <div class="text-sm font-semibold text-gray-800">Iblis Tidak Akan Mati
                                                    </div>
                                                    <div class="text-xs text-gray-500">Penulis Contoh</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="py-3 text-sm text-gray-600">01 Okt 2025</td>
                                        <td class="py-3 text-sm text-gray-600">08 Okt 2025</td>
                                        <td class="py-3">
                                            <span
                                                class="px-3 py-1 rounded-full text-xs font-semibold bg-green-100 text-green-800">Dikembalikan</span>
                                        </td>

                                    </tr>

                                    <!-- contoh baris kosong / placeholder -->
                                    <tr>
                                        <td colspan="5" class="py-6 text-center text-gray-500">
                                            Jika belum ada riwayat, tempatkan pesan ini.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <!-- Pagination statis -->
                        <div class="mt-4 flex items-center justify-end space-x-2 text-sm text-gray-600">
                            <span class="px-3 py-1 border rounded">1</span>
                            <span class="px-3 py-1 border rounded">2</span>
                            <span class="px-3 py-1 border rounded">3</span>
                        </div>
                    </div>

                    <!-- Reservasi & Denda Ringkasan (Statis) -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="bg-white rounded-lg shadow p-4">
                            <h4 class="font-semibold text-gray-800 mb-3">Reservasi Saya</h4>
                            <ul class="space-y-2 text-sm text-gray-600">
                                <li class="flex items-center justify-between">
                                    <div>
                                        <div class="font-medium">Kedaulatan Sriwijaya</div>
                                        <div class="text-xs text-gray-500">Status: Menunggu</div>
                                    </div>
                                    <div class="text-xs text-gray-500">12 Nov 2025</div>
                                </li>
                            </ul>
                        </div>

                        <div class="bg-white rounded-lg shadow p-4">
                            <h4 class="font-semibold text-gray-800 mb-3">Denda & Pembayaran</h4>
                            <p class="text-sm text-gray-600">Total denda belum dibayar:</p>
                            <p class="text-xl font-bold text-red-600">Rp 0</p>

                            <div class="mt-4">
                                <a href="#"
                                    class="inline-block bg-yellow-500 hover:bg-yellow-600 text-blue-900 font-bold py-2 px-4 rounded-lg">Bayar
                                    Denda</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div> <!-- end grid -->

        </div>
    </section>
@endsection
