@extends('layouts.LayoutUser')

@section('title', 'Riwayat Peminjaman — Semua')

@section('content')
<section class="py-10">
    <div class="container mx-auto px-4">

        <div class="flex items-center justify-between mb-6">
            <h1 class="text-2xl font-bold">Riwayat Peminjaman — Semua</h1>
            <div class="flex items-center gap-3">
                <a href="{{ route('user.profile') ?? '/profil' }}" class="text-sm text-gray-600 hover:underline">← Kembali ke Profil</a>
            </div>
        </div>

        <!-- Controls (static visual only) -->
        <div class="bg-white p-4 rounded-lg shadow mb-6 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
            <div class="flex items-center gap-3">
                <label class="text-sm text-gray-600">Filter status:</label>
                <select class="border rounded px-3 py-2 text-sm">
                    <option>Semua</option>
                    <option>Dipinjam</option>
                    <option>Pending</option>
                    <option>Dikembalikan</option>
                    <option>Overdue</option>
                </select>
            </div>

            <div class="flex items-center gap-3">
                <input type="text" placeholder="Cari judul atau penulis..." class="px-3 py-2 border rounded w-64 text-sm">
                <button class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded text-sm">Cari</button>
            </div>
        </div>

        <!-- Table -->
        <div class="bg-white rounded-lg shadow overflow-x-auto">
            <table class="w-full min-w-[720px]">
                <thead class="bg-gray-50 text-sm text-gray-600">
                    <tr>
                        <th class="py-3 px-4 text-left">Buku</th>
                        <th class="py-3 px-4 text-left">Tanggal Pinjam</th>
                        <th class="py-3 px-4 text-left">Batas Kembali</th>
                        <th class="py-3 px-4 text-left">Tanggal Kembali</th>
                        <th class="py-3 px-4 text-left">Status</th>
                        <th class="py-3 px-4 text-left">Denda</th>
                        <th class="py-3 px-4 text-left">Aksi</th>
                    </tr>
                </thead>

                <tbody class="text-sm text-gray-700 divide-y">
                    <!-- Row 1 -->
                    <tr>
                        <td class="py-4 px-4">
                            <div class="flex items-center gap-3">
                                <img src="/assets/buku1.jpg" alt="The False Prince" class="w-12 h-16 object-cover rounded">
                                <div>
                                    <div class="font-semibold">The False Prince</div>
                                    <div class="text-xs text-gray-500">Jennifer A. Nielsen</div>
                                </div>
                            </div>
                        </td>
                        <td class="py-4 px-4">10 Nov 2025</td>
                        <td class="py-4 px-4">17 Nov 2025</td>
                        <td class="py-4 px-4">—</td>
                        <td class="py-4 px-4">
                            <span class="px-3 py-1 rounded-full bg-yellow-100 text-yellow-800 text-xs font-semibold">Dipinjam</span>
                        </td>
                        <td class="py-4 px-4">Rp 0</td>
                        <td class="py-4 px-4">
                            <div class="flex items-center gap-2">
                                <a href="{{route('user.perpanjang')}}" class="text-sm text-green-600 hover:underline">Perpanjang</a>
                            </div>
                        </td>
                    </tr>

                    <!-- Row 2 -->
                    <tr>
                        <td class="py-4 px-4">
                            <div class="flex items-center gap-3">
                                <img src="/assets/buku2.jpg" alt="Iblis Tidak Akan Mati" class="w-12 h-16 object-cover rounded">
                                <div>
                                    <div class="font-semibold">Iblis Tidak Akan Mati</div>
                                    <div class="text-xs text-gray-500">Penulis Contoh</div>
                                </div>
                            </div>
                        </td>
                        <td class="py-4 px-4">01 Okt 2025</td>
                        <td class="py-4 px-4">08 Okt 2025</td>
                        <td class="py-4 px-4">08 Okt 2025</td>
                        <td class="py-4 px-4">
                            <span class="px-3 py-1 rounded-full bg-green-100 text-green-800 text-xs font-semibold">Dikembalikan</span>
                        </td>
                        <td class="py-4 px-4">Rp 0</td>
                        <td class="py-4 px-4">
                            <a href="#" class="text-sm text-blue-600 hover:underline">Detail</a>
                        </td>
                    </tr>

                    <!-- Row 3: overdue -->
                    <tr>
                        <td class="py-4 px-4">
                            <div class="flex items-center gap-3">
                                <img src="/assets/buku3.jpg" alt="Kedaulatan Sriwijaya" class="w-12 h-16 object-cover rounded">
                                <div>
                                    <div class="font-semibold">Kedaulatan Sriwijaya</div>
                                    <div class="text-xs text-gray-500">Penulis Contoh</div>
                                </div>
                            </div>
                        </td>
                        <td class="py-4 px-4">20 Sep 2025</td>
                        <td class="py-4 px-4">27 Sep 2025</td>
                        <td class="py-4 px-4">—</td>
                        <td class="py-4 px-4">
                            <span class="px-3 py-1 rounded-full bg-red-100 text-red-800 text-xs font-semibold">Overdue</span>
                        </td>
                        <td class="py-4 px-4">Rp 15.000</td>
                        <td class="py-4 px-4">
                            <div class="flex items-center gap-2">
                                <a href="{{route('user.denda')}}" class="text-sm text-red-600 hover:underline">Bayar Denda</a>
                            </div>
                        </td>
                    </tr>

                    <!-- Empty placeholder row -->
                    <tr>
                        <td colspan="7" class="py-8 text-center text-gray-500">
                            Jika belum ada data, tampilkan pesan ini. (Halaman statis untuk preview)
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Pagination (statis) -->
        <div class="mt-6 flex items-center justify-between">
            <div class="text-sm text-gray-600">Menampilkan 1-3 dari 3 entri</div>
            <div class="flex items-center space-x-2">
                <a href="#" class="px-3 py-1 border rounded text-sm">Prev</a>
                <a href="#" class="px-3 py-1 border rounded bg-blue-600 text-white text-sm">1</a>
                <a href="#" class="px-3 py-1 border rounded text-sm">2</a>
                <a href="#" class="px-3 py-1 border rounded text-sm">Next</a>
            </div>
        </div>

    </div>
</section>
@endsection
