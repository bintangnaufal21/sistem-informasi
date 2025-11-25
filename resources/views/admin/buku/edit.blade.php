@extends('layouts.layoutAdmin')


@section('content')

 <main class="flex-1 p-8">

    <!-- HEADER SECTION -->
    <div class="flex justify-between items-center mb-8">
      <div>
        <h1 class="text-2xl font-bold text-blue-800">Tambah Buku Baru</h1>
        <p class="text-gray-600">Tambahkan buku baru ke dalam koleksi perpustakaan</p>
      </div>

      <!-- Header Icons -->
      <div class="flex items-center gap-4">
        <!-- Notification Bell -->
        <button class="relative p-3 rounded-full bg-white shadow-md hover:bg-gray-50 transition-colors">
          <i class="fas fa-bell text-blue-600"></i>
          <span class="absolute -top-1 -right-1 w-3 h-3 bg-red-500 rounded-full"></span>
        </button>

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
            <a href="{{-- {{ route('login') }} --}}" class="block px-4 py-3 text-red-600 hover:bg-red-50 transition-colors">
              <i class="fas fa-sign-out-alt mr-3"></i>
              Logout
            </a>
          </div>
        </div>
      </div>
    </div>

    <!-- FORM SECTION (form now spans full width) -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
      <!-- Main Form -->
      <div class="lg:col-span-3">
        <div class="bg-white rounded-xl shadow-md p-6">
          <div class="flex justify-between items-center mb-6">
            <h2 class="text-xl font-bold text-blue-800">
              <i class="fas fa-edit mr-2"></i>
              Informasi Buku
            </h2>
          </div>

          <!-- Alert placeholder -->
          <div id="flash" class="hidden mb-6 p-4 rounded-lg border-2 bg-green-50 border-green-200 text-green-700">
            <i class="fas fa-check-circle mr-2"></i>
            <span id="flash-message"></span>
          </div>

          <form id="form-create" action="#" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
              <!-- Judul Buku -->
              <div class="md:col-span-2">
                <label class="block mb-2 font-medium text-gray-700">
                  Judul Buku <span class="text-red-500">*</span>
                </label>
                <input name="title" type="text" placeholder="Masukkan judul buku lengkap"
                  class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-colors">
              </div>

              <!-- Pengarang -->
              <div class="md:col-span-2">
                <label class="block mb-2 font-medium text-gray-700">
                  Pengarang <span class="text-red-500">*</span>
                </label>
                <input name="author" type="text" placeholder="Nama pengarang lengkap"
                  class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-colors">
              </div>

              <!-- ISBN -->
              <div>
                <label class="block mb-2 font-medium text-gray-700">ISBN</label>
                <input name="isbn" type="text" placeholder="Nomor ISBN (opsional)"
                  class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-colors">
              </div>

              <!-- Penerbit -->
              <div>
                <label class="block mb-2 font-medium text-gray-700">Penerbit</label>
                <input name="publisher" type="text" placeholder="Nama penerbit"
                  class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-colors">
              </div>

              <!-- Kategori -->
              <div>
                <label class="block mb-2 font-medium text-gray-700">
                  Kategori <span class="text-red-500">*</span>
                </label>
                <select name="category" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-colors">
                  <option value="">-- Pilih kategori --</option>
                  <option value="Fiksi">Fiksi</option>
                  <option value="Non-Fiksi">Non-Fiksi</option>
                  <option value="Teknologi">Teknologi</option>
                  <option value="Sains">Sains</option>
                  <option value="Sejarah">Sejarah</option>
                  <option value="Biografi">Biografi</option>
                  <option value="Pelajaran">Pelajaran</option>
                  <option value="Komik">Komik</option>
                </select>
              </div>

              <!-- Tahun Terbit -->
              <div>
                <label class="block mb-2 font-medium text-gray-700">Tahun Terbit</label>
                <input name="year" type="number" min="1900" max="2024" placeholder="Tahun"
                  class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-colors">
              </div>

              <!-- Status -->
              <div>
                <label class="block mb-2 font-medium text-gray-700">
                  Status <span class="text-red-500">*</span>
                </label>
                <select name="status" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-colors">
                  <option value="Tersedia">Tersedia</option>
                  <option value="Dipinjam">Dipinjam</option>
                  <option value="Rusak">Rusak</option>
                </select>
              </div>

              <!-- Stok -->
              <div>
                <label class="block mb-2 font-medium text-gray-700">
                  Stok <span class="text-red-500">*</span>
                </label>
                <input name="stock" type="number" min="1" value="1"
                  class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-colors">
              </div>
            </div>

            <!-- Deskripsi -->
            <div class="mt-6">
              <label class="block mb-2 font-medium text-gray-700">Deskripsi Buku</label>
              <textarea name="description" rows="4" placeholder="Deskripsi singkat tentang buku..."
                class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-colors resize-none"></textarea>
            </div>

            <!-- Upload Cover -->
            <div class="mt-6">
              <label class="block mb-2 font-medium text-gray-700">Cover Buku</label>

              <div class="flex flex-col md:flex-row gap-6 items-start">
                <!-- Preview Area -->
                <div class="md:w-48">
                  <div class="w-full h-64 bg-gray-100 rounded-xl overflow-hidden flex items-center justify-center border-2 border-dashed border-gray-300">
                    <img id="coverPreview" src="" alt="Preview cover" class="w-full h-full object-cover hidden">
                    <div id="coverPlaceholder" class="text-gray-400 text-center px-4">
                      <i class="fas fa-image text-4xl mb-3"></i>
                      <div class="text-sm">Preview cover akan muncul di sini</div>
                    </div>
                  </div>
                </div>

                <!-- Upload Area -->
                <div class="flex-1">
                  <input id="coverInput" name="cover" type="file" accept="image/*"
                    class="block w-full text-sm text-gray-600 file:mr-4 file:py-3 file:px-6 file:rounded-lg file:border-0 file:text-sm file:font-medium
                           file:bg-blue-100 file:text-blue-700 hover:file:bg-blue-200 transition-colors">
                  <div class="mt-3 text-sm text-gray-500">
                    <p class="mb-1"><i class="fas fa-info-circle mr-2"></i>Format yang didukung: JPG, PNG, JPEG</p>
                    <p><i class="fas fa-info-circle mr-2"></i>Ukuran maksimal: 2MB</p>
                  </div>
                </div>
              </div>
            </div>

            <!-- Action Buttons -->
            <div class="flex gap-3 mt-8 pt-6 border-t border-gray-200">
              <button type="button" id="btn-simulate" class="px-8 py-3 bg-green-600 hover:bg-green-700 text-white rounded-lg font-semibold transition-colors flex items-center">
                <i class="fas fa-save mr-2"></i>
                Simpan Buku
              </button>
              <a href="{{-- {{ route('data-buku') }} --}}" class="px-6 py-3 bg-blue-600 hover:bg-blue-700 text-white rounded-lg font-medium transition-colors flex items-center">
                <i class="fas fa-arrow-left mr-2"></i>
                Kembali
              </a>
            </div>
          </form>
        </div>
      </div>

    </div>

  </main>
@endsection
