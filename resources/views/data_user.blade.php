<!-- resources/views/data_user.blade.php -->
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Data User - Perpustakaan</title>
  @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="bg-gray-100 min-h-screen font-sans text-gray-800">

  <div class="min-h-screen flex">
    <!-- SIDEBAR (same style) -->
    <aside class="w-64 bg-blue-900 text-white shadow-lg flex-shrink-0">
      <div class="px-6 py-5 border-b border-blue-800">
        <div class="bg-orange-500 inline-block px-3 py-2 rounded-lg text-sm font-semibold">
          Sistem Informasi Perpustakaan
        </div>
      </div>

      <nav class="mt-6">
        <a href="/dashboard" class="block px-6 py-4 hover:bg-blue-800">Dashboard</a>
        <a href="/user" class="block px-6 py-4 hover:bg-blue-800">User</a>
        <a href="/data-user" class="block px-6 py-4 bg-orange-500 text-black font-bold">Data Buku</a>
      </nav>
    </aside>

    <!-- MAIN -->
    <main class="flex-1 p-10">
      <div class="flex items-center justify-between mb-6">
        <h1 class="text-3xl font-extrabold">Data User</h1>
        <div class="flex items-center gap-4">
          <a href="#" class="px-4 py-2 bg-blue-700 text-white rounded-lg">Export CSV</a>
          <a href="#" class="px-4 py-2 bg-green-600 text-white rounded-lg">Tambah Data</a>
        </div>
      </div>

      <!-- Filters row -->
      <div class="flex justify-between items-center mb-6">
        <div class="flex gap-3 items-center">
          <input type="text" placeholder="Cari nama / email..." class="px-4 py-2 rounded-lg border w-80">
          <select class="px-3 py-2 rounded-lg border">
            <option value="">Semua Role</option>
            <option>Admin</option>
            <option>Anggota</option>
          </select>
        </div>

        <div class="text-sm text-gray-600">Total pengguna: <span class="font-semibold">3</span></div>
      </div>

      <!-- Table -->
      <div class="bg-white rounded-2xl shadow p-6 overflow-x-auto">
        <table class="w-full text-left">
          <thead>
            <tr class="text-sm text-gray-600 border-b">
              <th class="py-3 px-4 w-16">#</th>
              <th class="py-3 px-4">Nama</th>
              <th class="py-3 px-4">Email</th>
              <th class="py-3 px-4">Role</th>
              <th class="py-3 px-4">Telepon</th>
              <th class="py-3 px-4">Alamat</th>
            </tr>
          </thead>

          <tbody class="text-gray-700">
            <tr class="border-b">
              <td class="py-4 px-4">1</td>
              <td class="py-4 px-4 flex items-center gap-3">
                <!-- menggunakan file yang sudah diupload sebagai placeholder avatar -->
                <img src="/mnt/data/63c50940-d495-4774-844a-06ba00504126.png" alt="avatar" class="w-10 h-10 rounded-full object-cover border" />
                <div>
                  <div class="font-semibold">Siti Nur</div>
                  <div class="text-sm text-gray-500">siti_nur</div>
                </div>
              </td>
              <td class="py-4 px-4">siti@example.com</td>
              <td class="py-4 px-4">Admin</td>
              <td class="py-4 px-4">+62 812 3456 7890</td>
              <td class="py-4 px-4">Banda Aceh</td>
            </tr>

            <tr class="border-b">
              <td class="py-4 px-4">2</td>
              <td class="py-4 px-4 flex items-center gap-3">
                <img src="/mnt/data/63c50940-d495-4774-844a-06ba00504126.png" alt="avatar" class="w-10 h-10 rounded-full object-cover border" />
                <div>
                  <div class="font-semibold">Budi Santoso</div>
                  <div class="text-sm text-gray-500">budi_s</div>
                </div>
              </td>
              <td class="py-4 px-4">budi@example.com</td>
              <td class="py-4 px-4">Anggota</td>
              <td class="py-4 px-4">+62 812 9876 5432</td>
              <td class="py-4 px-4">Aceh</td>
            </tr>

            <tr>
              <td class="py-4 px-4">3</td>
              <td class="py-4 px-4 flex items-center gap-3">
                <img src="/mnt/data/63c50940-d495-4774-844a-06ba00504126.png" alt="avatar" class="w-10 h-10 rounded-full object-cover border" />
                <div>
                  <div class="font-semibold">Amanda</div>
                  <div class="text-sm text-gray-500">amanda23</div>
                </div>
              </td>
              <td class="py-4 px-4">amanda@example.com</td>
              <td class="py-4 px-4">Anggota</td>
              <td class="py-4 px-4">+62 813 1111 2222</td>
              <td class="py-4 px-4">Banda Aceh</td>
            </tr>

          </tbody>
        </table>

        <!-- Pagination -->
        <div class="flex justify-end mt-6">
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
