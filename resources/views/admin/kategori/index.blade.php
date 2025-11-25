@extends('layouts.layoutAdmin')


@section('content')
 <main class="flex-1 p-8">

    <!-- HEADER SECTION -->
    <div class="flex justify-between items-center mb-6">
      <div>
        <h1 class="text-2xl font-bold text-blue-800">Data Category</h1>
        <p class="text-gray-600">Kelola kategori buku perpustakaan digital</p>
      </div>

      <!-- Header Icons -->
      <div class="flex items-center gap-4">

        <!-- User Profile -->
        <div class="relative dropdown">
          <button class="flex items-center space-x-3 p-2 rounded-lg bg-white shadow-md hover:bg-gray-50 transition-colors">
            <div class="w-8 h-8 bg-blue-600 rounded-full flex items-center justify-center">
              <i class="fas fa-user text-white text-sm"></i>
            </div>
            <span class="text-gray-700 font-medium">Admin</span>
            <i class="fas fa-chevron-down text-gray-400"></i>
          </button>
          <div class="dropdown-content absolute top-full left-0 min-w-full bg-white rounded-b-lg shadow-xl border border-gray-200 z-20 overflow-hidden">
            <a href="{{ route('login') }}" class="block px-4 py-3 text-red-600 hover:bg-red-50 transition-colors">
              <i class="fas fa-sign-out-alt mr-3"></i>
              Logout
            </a>
          </div>
        </div>
      </div>
    </div>

    <!-- SEARCH & FILTER BAR (dinaikkan ke atas menggantikan statistik) -->
    <div class="bg-white rounded-xl shadow-md p-6 mb-8">
      <div class="flex items-center space-x-4">
        <div class="flex-1 relative">
          <i class="fas fa-search absolute left-4 top-3 text-gray-400"></i>
          <input type="text"
                 placeholder="Cari judul, pengarang, atau kategori buku..."
                 class="w-full pl-12 pr-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
        </div>
        <select class="px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
          <option>Semua Kategori</option>
          <option>Fiksi</option>
          <option>Non-Fiksi</option>
          <option>Teknologi</option>
          <option>Sains</option>
        </select>
        <select class="px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
          <option>Semua Status</option>
          <option>Tersedia</option>
          <option>Dipinjam</option>
        </select>
        <a href="{{ route('admin.kategori.tambah') }}">
        <button class="bg-green-600 hover:bg-green-700 text-white px-6 py-3 rounded-lg font-medium transition-colors"><i class="fas fa-plus mr-2"></i>
        Tambah Category
        </button>
        </a>

      </div>
    </div>

     <!-- BOOKS TABLE -->
    <div class="bg-white rounded-xl shadow-md p-6">
      <div class="flex justify-between items-center mb-6">
        <h2 class="text-xl font-bold text-blue-800">
          <i class="fas fa-book mr-2"></i>
          Daftar Data Buku
        </h2>
        <div class="text-sm text-gray-600">
          <!-- Optional: total count can be injected server-side if needed -->
        </div>
      </div>

      <div class="overflow-x-auto">
        <table class="w-full text-left">
          <thead>
            <tr class="border-b border-gray-200">
              <th class="py-4 px-4 text-sm font-semibold text-gray-600">NO</th>
              <th class="py-4 px-4 text-sm font-semibold text-gray-600">Kategori</th>
              <th class="py-4 px-4 text-sm font-semibold text-gray-600">Status</th>
              <th class="py-4 px-4 text-sm font-semibold text-gray-600">Aksi</th>

            </tr>
          </thead>
          <tbody class="divide-y divide-gray-200">
            <!-- Buku 1 -->
            <tr class="hover:bg-gray-50 transition-colors">
              <td class="py-4 px-4">1</td>
              <td class="py-4 px-4">Fiksi</td>
              <td class="py-4 px-4">
                <span class="bg-green-100 text-green-800 text-xs px-2 py-1 rounded-full">Tersedia</span>
              </td>
              <td>
                <a href="{{ route('admin.kategori.edit') }}">
                <button class="bg-yellow-500 hover:bg-green-700 text-white px-6 py-3 rounded-lg font-medium transition-colors"><i class="fas fa-pen mr-2"></i>
                Edit Buku
                </button>
                </a>

                <a href="#">
                <button class="bg-red-500 hover:bg-green-700 text-white px-6 py-3 rounded-lg font-medium transition-colors"><i class="fas fa-trash mr-2"></i>
                Hapus Buku
                </button>
                </a>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
</main>

@endsection
