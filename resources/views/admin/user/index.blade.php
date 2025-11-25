@extends('layouts.layoutAdmin')


@section('content')

<main class="flex-1 p-8">

    <!-- HEADER SECTION -->
    <div class="flex justify-between items-center mb-6">
      <div>
        <h1 class="text-2xl font-bold text-blue-800">Data User</h1>
        <p class="text-gray-600">Kelola data lengkap pengguna sistem perpustakaan</p>
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
                 placeholder="Cari user berdasarkan nama, email, atau username..."
                 class="w-full pl-12 pr-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
        </div>
        <select class="px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
          <option>Semua Role</option>
          <option>Admin</option>
          <option>Anggota</option>
        </select>
        <select class="px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
          <option>Semua Status</option>
          <option>Aktif</option>
          <option>Non-Aktif</option>
        </select>
      </div>
    </div>

    <!-- USERS TABLE -->
    <div class="bg-white rounded-xl shadow-md p-6">
      <div class="flex justify-between items-center mb-6">
        <h2 class="text-xl font-bold text-blue-800">
          <i class="fas fa-list mr-2"></i>
          Daftar Data User
        </h2>
        <div class="text-sm text-gray-600">

        </div>
      </div>

      <div class="overflow-x-auto">
        <table class="w-full text-left">
          <thead>
            <tr class="border-b border-gray-200">
              <th class="py-4 px-4 text-sm font-semibold text-gray-600">No</th>
              <th class="py-4 px-4 text-sm font-semibold text-gray-600">User</th>
              <th class="py-4 px-4 text-sm font-semibold text-gray-600">Email</th>

            </tr>
          </thead>
          <tbody class="divide-y divide-gray-200">
            <!-- User 1 -->
            <tr class="hover:bg-gray-50 transition-colors">
              <td class="py-4 px-4">1</td>
              <td class="py-4 px-4">
                <div class="flex items-center space-x-3">
                  <div class="w-10 h-10 bg-green-100 rounded-full flex items-center justify-center">
                    <i class="fas fa-user-shield text-green-600"></i>
                  </div>
                  <div>
                    <p class="font-medium text-gray-800">Siti Nur</p>
                    <p class="text-sm text-gray-500">siti_nur</p>
                  </div>
                </div>
              </td>
              <td class="py-4 px-4">siti@example.com</td>
            </tr>
          </tbody>
        </table>
      </div>

      <!-- Pagination -->
      <div class="mt-6 flex items-center justify-between">
        <div class="text-sm text-gray-600">
        </div>
        <nav class="inline-flex -space-x-px">
          <a class="px-3 py-2 border border-gray-300 rounded-l-lg hover:bg-gray-50 transition-colors">Prev</a>
          <a class="px-3 py-2 border border-gray-300 bg-blue-600 text-white">1</a>
          <a class="px-3 py-2 border border-gray-300 hover:bg-gray-50 transition-colors">2</a>
          <a class="px-3 py-2 border border-gray-300 hover:bg-gray-50 transition-colors">3</a>
          <a class="px-3 py-2 border border-gray-300 rounded-r-lg hover:bg-gray-50 transition-colors">Next</a>
        </nav>
      </div>
    </div>

</main>


@endsection
