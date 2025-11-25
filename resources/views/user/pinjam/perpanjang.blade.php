@extends('layouts.LayoutUser')

@section('title', 'Perpanjang Peminjaman')

@section('content')
<section class="py-10">
    <div class="container mx-auto px-4 max-w-2xl">

        <div class="bg-white rounded-lg shadow p-6">

            <h1 class="text-2xl font-bold mb-4">Perpanjang Peminjaman</h1>

            <div class="space-y-2 text-gray-700 text-sm mb-6">
                <p><strong>Judul Buku:</strong> The False Prince</p>
                <p><strong>Tanggal Pinjam:</strong> 10 Nov 2025</p>
                <p><strong>Batas Pengembalian Saat Ini:</strong> 17 Nov 2025</p>
                <p><strong>Batas Pengembalian Baru:</strong> 24 Nov 2025</p>
            </div>

            <p class="text-sm text-gray-600 mb-4">
                Anda dapat memperpanjang peminjaman 1 kali dengan durasi tambahan 7 hari.
                Pastikan buku tidak sedang dipesan oleh user lain.
            </p>

            <div class="flex gap-3">
                <a href="#" class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-2 rounded-lg">Konfirmasi Perpanjang</a>
                <a href="/riwayat-peminjaman" class="border px-4 py-2 rounded-lg hover:bg-gray-50">Batal</a>
            </div>

        </div>

    </div>
</section>
@endsection
