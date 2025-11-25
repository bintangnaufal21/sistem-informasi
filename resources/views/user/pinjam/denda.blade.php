@extends('layouts.LayoutUser')

@section('title', 'Bayar Denda')

@section('content')
<section class="py-10">
    <div class="container mx-auto px-4 max-w-2xl">

        <div class="bg-white rounded-lg shadow p-6">

            <h1 class="text-2xl font-bold mb-4">Bayar Denda</h1>

            <div class="space-y-2 text-gray-700 text-sm mb-6">
                <p><strong>Judul Buku:</strong> Kedaulatan Sriwijaya</p>
                <p><strong>Denda:</strong> Rp 15.000</p>
                <p><strong>Keterlambatan:</strong> 3 Hari</p>
            </div>

            <h2 class="text-lg font-semibold mb-3">Metode Pembayaran</h2>

            <ul class="space-y-3 text-sm text-gray-700 mb-6">
                <li>• Transfer Bank (BCA / BRI / Mandiri)</li>
                <li>• E-Wallet: Dana, OVO, Gopay</li>
                <li>• Bayar ke petugas perpustakaan</li>
            </ul>

            <div class="flex gap-3">
                <a href="#" class="bg-yellow-500 hover:bg-yellow-600 text-blue-900 px-5 py-2 rounded-lg">Tandai Sudah Bayar</a>
                <a href="/riwayat-peminjaman" class="border px-4 py-2 rounded-lg hover:bg-gray-50">Batal</a>
            </div>

        </div>

    </div>
</section>
@endsection
