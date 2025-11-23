<!-- resources/views/data_buku.blade.php -->
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Data Buku - Perpustakaan</title>
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
        <a href="/data-buku" class="block px-6 py-4 bg-orange-500 text-black font-bold">Data Buku</a>
      </nav>
    </aside>

    <!-- MAIN -->
    <main class="flex-1 p-10">
      <div class="flex items-center justify-between mb-6">
        <h1 class="text-3xl font-extrabold">Data Buku</h1>

        <div class="flex items-center gap-3">
          <input type="text" placeholder="Cari judul / pengarang..." class="px-4 py-2 border rounded-lg w-80">
          <a href="#" class="px-4 py-2 bg-green-600 text-white rounded-lg">Tambah Buku</a>
        </div>
      </div>

      {{-- FILTERS REMOVED --}}

      <!-- TABLE -->
      <div class="bg-white rounded-2xl shadow p-6">
        <table class="w-full text-left">
          <thead>
            <tr class="text-sm text-gray-600 border-b">
              <th class="py-3 px-4 w-16">NO</th>
              <th class="py-3 px-4">Judul</th>
              <th class="py-3 px-4">Pengarang</th>
              <th class="py-3 px-4">Kategori</thNO
              <th class="py-3 px-4">Status</th>
              <th class="py-3 px-4">Stok</th>
              <th class="py-3 px-4">Aksi</th>
            </tr>
          </thead>

          <tbody class="text-gray-700">
            <tr class="border-t">
              <td class="py-4 px-4">1</td>
              <td class="py-4 px-4">Iblis tidak Pernah Mati</td>
              <td class="py-4 px-4">Penulis Nama</td>
              <td class="py-4 px-4">Fiksi</td>
              <td class="py-4 px-4">Tersedia</td>
              <td class="py-4 px-4">3</td>
              <td class="py-4 px-4 flex gap-2">
                <button class="px-3 py-1 bg-yellow-400 rounded text-sm">Edit</button>
                <button class="px-3 py-1 bg-red-600 text-white rounded text-sm">Hapus</button>
              </td>
            </tr>

            <tr class="border-t">
              <td class="py-4 px-4">2</td>
              <td class="py-4 px-4">Iblis tidak Pernah Mati</td>
              <td class="py-4 px-4">Penulis Nama</td>
              <td class="py-4 px-4">Fiksi</td>
              <td class="py-4 px-4">Tersedia</td>
              <td class="py-4 px-4">3</td>
              <td class="py-4 px-4 flex gap-2">
                <button class="px-3 py-1 bg-yellow-400 rounded text-sm">Edit</button>
                <button class="px-3 py-1 bg-red-600 text-white rounded text-sm">Hapus</button>
              </td>
            </tr>

            <tr class="border-t">
              <td class="py-4 px-4">3</td>
              <td class="py-4 px-4">Iblis tidak Pernah Mati</td>
              <td class="py-4 px-4">Penulis Nama</td>
              <td class="py-4 px-4">Fiksi</td>
              <td class="py-4 px-4">Tersedia</td>
              <td class="py-4 px-4">3</td>
              <td class="py-4 px-4 flex gap-2">
                <button class="px-3 py-1 bg-yellow-400 rounded text-sm">Edit</button>
                <button class="px-3 py-1 bg-red-600 text-white rounded text-sm">Hapus</button>
              </td>
            </tr>
          </tbody>
        </table>

        <div class="flex justify-end mt-4">
          <nav class="inline-flex -space-x-px">
            <a class="px-3 py-2 border rounded-l">Prev</a>
            <a class="px-3 py-2 border">1</a>
            <a class="px-3 py-2 border">2</a>
            <a class="px-3 py-2 border rounded-r">Next</a>
          </nav>
        </div>
      </div>
    </main>
  </div>
</body>
</html>
