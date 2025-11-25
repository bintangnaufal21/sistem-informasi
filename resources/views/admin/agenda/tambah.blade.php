@extends('layouts.layoutAdmin')


@section('content')

    <main class="container mx-auto px-4 py-8">
      <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">

        <!-- Form (wide column) -->
        <section class="lg:col-span-2">
          <div class="bg-white rounded-2xl shadow p-6">
            <h2 class="text-2xl font-bold text-gray-800 mb-2">Buat Agenda Baru</h2>
            <p class="text-sm text-gray-500 mb-6">Isi informasi kegiatan dengan lengkap. Field yang diberi tanda <span class="text-red-500">*</span> wajib diisi.</p>

            <form id="agendaForm" class="space-y-6" enctype="multipart/form-data" method="POST" action="#">
              <!-- Judul -->
              <div>
                <label class="block text-sm font-medium text-gray-700">Judul Kegiatan <span class="text-red-500">*</span></label>
                <input type="text" name="title" required placeholder="Contoh: Workshop Literasi Digital"
                       class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500">
              </div>

              <!-- Date & Time -->
              <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <div>
                  <label class="block text-sm font-medium text-gray-700">Tanggal <span class="text-red-500">*</span></label>
                  <input type="date" name="date" required class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500">
                </div>
                <div>
                  <label class="block text-sm font-medium text-gray-700">Waktu Mulai</label>
                  <input type="time" name="time_start" class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500">
                </div>
                <div>
                  <label class="block text-sm font-medium text-gray-700">Waktu Selesai</label>
                  <input type="time" name="time_end" class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500">
                </div>
              </div>

              <!-- Lokasi & Kategori -->
              <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                  <label class="block text-sm font-medium text-gray-700">Lokasi <span class="text-red-500">*</span></label>
                  <input type="text" name="location" required placeholder="Contoh: Ruang Seminar Lt.2"
                         class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500">
                </div>
                <div>
                  <label class="block text-sm font-medium text-gray-700">Kategori</label>
                  <select name="category" class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500">
                    <option value="">-- Pilih kategori --</option>
                    <option value="Umum">Umum</option>
                    <option value="Workshop">Workshop</option>
                    <option value="Pelatihan">Pelatihan</option>
                    <option value="Rapat">Rapat</option>
                  </select>
                </div>
              </div>

              <!-- Organizer & Contact -->
              <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                  <label class="block text-sm font-medium text-gray-700">Penyelenggara</label>
                  <input type="text" name="organizer" placeholder="Contoh: Divisi Literasi"
                         class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500">
                </div>
                <div>
                  <label class="block text-sm font-medium text-gray-700">Kontak (telp / email)</label>
                  <input type="text" name="contact" placeholder="+62... atau email@domain.com"
                         class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500">
                </div>
              </div>

              <!-- Description -->
              <div>
                <label class="block text-sm font-medium text-gray-700">Deskripsi</label>
                <textarea name="description" rows="5" placeholder="Ringkasan kegiatan, agenda, catatan penting"
                          class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500"></textarea>
              </div>

              <!-- Publish & Actions -->
              <div class="flex items-center gap-4">
                <label class="inline-flex items-center gap-2">
                  <input type="checkbox" name="published" class="w-4 h-4 text-blue-600" />
                  <span class="text-sm text-gray-700">Publikasikan sekarang</span>
                </label>

                <div class="ml-auto flex items-center gap-3">
                  <button type="submit" class="px-5 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-lg font-semibold">Simpan</button>
                  <a href="/admin/agenda" class="px-4 py-2 border border-gray-200 rounded-lg text-gray-700 hover:bg-gray-50">Batal</a>
                </div>
              </div>

            </form>
          </div>
        </section>

      </div>
    </main>
@endsection
