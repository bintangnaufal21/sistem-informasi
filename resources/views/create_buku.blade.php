<!-- resources/views/create_buku.blade.php -->
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Tambah Buku - Perpustakaan</title>
  @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="bg-gray-100 min-h-screen font-sans text-gray-800">

  <div class="min-h-screen flex">
    <!-- SIDEBAR -->
    <aside class="w-64 bg-blue-900 text-white shadow-lg flex-shrink-0">
      <div class="px-6 py-5 border-b border-blue-800">
        <div class="bg-orange-500 inline-block px-3 py-2 rounded-lg text-sm font-semibold">
          Sistem Informasi Perpustakaan
        </div>
      </div>

      <nav class="mt-6">
        <a href="/dashboard" class="block px-6 py-4 hover:bg-blue-800">Dashboard</a>
        <a href="/user" class="block px-6 py-4 hover:bg-blue-800">User</a>
        <a href="/data-buku" class="block px-6 py-4 hover:bg-blue-800">Data Buku</a>
      </nav>
    </aside>

    <!-- MAIN -->
    <main class="flex-1 p-10">
      <header class="flex items-center justify-between mb-6">
        <h1 class="text-3xl font-extrabold">Tambah Buku (Tampilan)</h1>
        <a href="{{ route('data-buku') }}" class="px-4 py-2 bg-gray-300 text-gray-800 rounded-lg">Kembali</a>
      </header>

      <div class="bg-white rounded-2xl shadow p-8 max-w-3xl">
        <!-- Alert placeholder -->
        <div id="flash" class="hidden mb-4 p-3 rounded border text-sm"></div>

        <form id="form-create" action="#" method="POST" enctype="multipart/form-data">
          @csrf

          <div class="grid grid-cols-1 gap-4">
            <div>
              <label class="block mb-1 font-medium">Judul Buku</label>
              <input name="title" type="text" placeholder="Masukkan judul buku"
                class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-200">
            </div>

            <div>
              <label class="block mb-1 font-medium">Pengarang</label>
              <input name="author" type="text" placeholder="Nama pengarang"
                class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-200">
            </div>

            <div class="md:flex md:gap-4">
              <div class="md:flex-1">
                <label class="block mb-1 font-medium">Kategori</label>
                <select name="category" class="w-full px-4 py-2 border rounded-lg">
                  <option value="">-- Pilih kategori --</option>
                  <option>Fiksi</option>
                  <option>Non-Fiksi</option>
                  <option>Komik</option>
                  <option>Pelajaran</option>
                </select>
              </div>

              <div class="md:w-40">
                <label class="block mb-1 font-medium">Status</label>
                <select name="status" class="w-full px-4 py-2 border rounded-lg">
                  <option value="Tersedia">Tersedia</option>
                  <option value="Dipinjam">Dipinjam</option>
                </select>
              </div>

              <div class="md:w-32">
                <label class="block mb-1 font-medium">Stok</label>
                <input name="stock" type="number" min="0" value="1"
                  class="w-full px-4 py-2 border rounded-lg">
              </div>
            </div>

            <div>
              <label class="block mb-1 font-medium">Upload Cover</label>

              <div class="flex items-start gap-6">
                <div class="w-40">
                  <div class="w-40 h-52 bg-gray-100 rounded overflow-hidden flex items-center justify-center border">
                    <img id="coverPreview" src="" alt="preview" class="w-full h-full object-cover hidden">
                    <div id="coverPlaceholder" class="text-gray-400 text-center px-2">
                      <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V7M3 7l9 6 9-6M3 7v10" />
                      </svg>
                      <div class="text-xs mt-2">Preview cover</div>
                    </div>
                  </div>
                </div>

                <div class="flex-1">
                  <input id="coverInput" name="cover" type="file" accept="image/*"
                    class="block w-full text-sm text-gray-600 file:mr-4 file:py-2 file:px-4 file:rounded file:border-0 file:text-sm
                           file:bg-blue-100 file:text-blue-700 hover:file:bg-blue-200">
                  <p class="text-sm text-gray-500 mt-2">Pilih file gambar (jpg, png). Hanya preview — tidak tersimpan di server pada view ini.</p>
                </div>
              </div>
            </div>

            <div class="flex gap-3 mt-4">
              <button type="button" id="btn-simulate" class="px-6 py-2 bg-green-600 text-white rounded-lg font-semibold">
                Simpan (Demo)
              </button>
              <button type="reset" class="px-6 py-2 bg-gray-300 text-gray-800 rounded-lg">Reset</button>
            </div>
          </div>
        </form>

        <!-- small note -->
        <p class="mt-4 text-sm text-gray-500">Catatan: halaman ini hanya tampilan (UI). Tekan "Simpan (Demo)" untuk melihat notifikasi sukses sementara.</p>
      </div>
    </main>
  </div>

  <script>
    // preview gambar
    const coverInput = document.getElementById('coverInput');
    const coverPreview = document.getElementById('coverPreview');
    const coverPlaceholder = document.getElementById('coverPlaceholder');

    coverInput?.addEventListener('change', (e) => {
      const file = e.target.files[0];
      if (!file) {
        coverPreview.src = '';
        coverPreview.classList.add('hidden');
        coverPlaceholder.classList.remove('hidden');
        return;
      }
      coverPreview.src = URL.createObjectURL(file);
      coverPreview.onload = () => URL.revokeObjectURL(coverPreview.src);
      coverPreview.classList.remove('hidden');
      coverPlaceholder.classList.add('hidden');
    });

    // tombol simulate save (hanya UI)
    document.getElementById('btn-simulate').addEventListener('click', () => {
      const flash = document.getElementById('flash');
      flash.className = 'mb-4 p-3 rounded border bg-green-50 text-green-700';
      flash.innerText = 'Sukses — (demo) buku berhasil disimpan (tampilan).';
      flash.classList.remove('hidden');

      // scroll to top of card to show message
      flash.scrollIntoView({ behavior: 'smooth', block: 'center' });

      // hide message after 3.5s
      setTimeout(() => {
        flash.classList.add('hidden');
      }, 3500);
    });
  </script>

</body>
</html>
