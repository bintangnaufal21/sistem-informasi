@extends('layouts.LayoutUser')

@section('title', 'Tentang Kami')
@section('content')
    <!-- MAIN CONTENT -->
    <main class="container mx-auto px-4 py-8">
        <!-- Breadcrumb -->
        <div class="mb-6">
            <nav class="text-sm text-gray-500">
                <a href="{{route('user.home')}}" class="hover:text-blue-600">Beranda</a> /
                <span class="text-blue-800 font-medium">Tentang Kami</span>
            </nav>
        </div>

        <!-- Page Header -->
        <div class="mb-12 text-center">
            <h1 class="text-4xl font-bold text-blue-800 mb-4">TENTANG KAMI</h1>
            <div class="w-24 h-1 bg-blue-600 mx-auto mb-6"></div>
            <p class="text-gray-600 text-lg max-w-3xl mx-auto">
                Platform digital yang dirancang untuk memudahkan siapa pun dalam membaca dan meminjam buku
                tanpa harus datang ke perpustakaan.
            </p>
        </div>

        <!-- Content Sections... (isi dengan konten sebelumnya) -->

    </main>
@endsection
