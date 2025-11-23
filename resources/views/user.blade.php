<!-- resources/views/user.blade.php -->
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>User Management - Perpustakaan</title>
  @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="bg-gray-100 min-h-screen font-sans text-gray-800">

  <div class="min-h-screen flex">
    <!-- SIDEBAR (same style as dashboard) -->
    <aside class="w-64 bg-blue-900 text-white shadow-lg flex-shrink-0">
      <div class="px-6 py-5 border-b border-blue-800">
        <div class="bg-orange-500 inline-block px-3 py-2 rounded-lg text-sm font-semibold">
          Sistem Informasi Perpustakaan
        </div>
      </div>

      <nav class="mt-6">
        <a href="{{ route('dashboard') ?? '/dashboard' }}" class="block px-6 py-4 hover:bg-blue-800">Dashboard</a>
        <a href="{{ url('/user') }}" class="block px-6 py-4 bg-orange-500 text-black font-bold">User</a>
        <a href="#" class="block px-6 py-4 hover:bg-blue-800">Data Buku</a>
      </nav>
    </aside>

    <!-- MAIN -->
    <main class="flex-1 p-10">
      <div class="flex justify-between items-center mb-8">
        <h1 class="text-3xl font-extrabold">Manajemen User</h1>
        <div>
          <a href="#" class="inline-block bg-blue-700 text-white px-4 py-2 rounded-lg shadow">Tambah User</a>
        </div>
      </div>

      <!-- Search & filters -->
      <div class="flex items-center justify-between mb-6 max-w-4xl">
        <input type="text" placeholder="Cari user..." class="w-1/3 px-4 py-2 rounded-lg border border-gray-300 focus:outline-none" />
        <div class="flex gap-3">
          <select class="px-3 py-2 rounded-lg border">
            <option>Semua Role</option>
            <option>Admin</option>
            <option>Anggota</option>
          </select>
          <button class="px-4 py-2 bg-white border rounded-lg">Reset</button>
        </div>
      </div>

      <!-- Users Table -->
      <div class="bg-white rounded-2xl shadow p-6">
        <table class="w-full text-left border-collapse">
          <thead>
            <tr class="text-sm text-gray-600">
              <th class="py-3">#</th>
              <th class="py-3">Avatar</th>
              <th class="py-3">Nama</th>
              <th class="py-3">Email</th>
              <th class="py-3">Role</th>

            </tr>
          </thead>

          <tbody class="text-gray-700">
            <!-- row 1 -->
            <tr class="border-t">
              <td class="py-4">1</td>
              <td class="py-4">
                <img src="{{ asset('images/book-sample.png') }}" alt="avatar" class="w-12 h-12 object-cover rounded-full border" />
              </td>
              <td class="py-4">Asep Rahman</td>
              <td class="py-4">asep@example.com</td>
              <td class="py-4">Anggota</td>
            </tr>

            <!-- row 2 -->
            <tr class="border-t">
              <td class="py-4">2</td>
              <td class="py-4">
                <img src="{{ asset('images/book-sample.png') }}" alt="avatar" class="w-12 h-12 object-cover rounded-full border" />
              </td>
              <td class="py-4">Siti Nur</td>
              <td class="py-4">siti@example.com</td>
              <td class="py-4">Admin</td>
            </tr>

            <!-- row 3 -->
            <tr class="border-t">
              <td class="py-4">3</td>
              <td class="py-4">
                <img src="{{ asset('images/book-sample.png') }}" alt="avatar" class="w-12 h-12 object-cover rounded-full border" />
              </td>
              <td class="py-4">Budi Santoso</td>
              <td class="py-4">budi@example.com</td>
              <td class="py-4">Anggota</td>
            </tr>

          </tbody>
        </table>

        <!-- pagination (UI only) -->
        <div class="mt-6 flex justify-end">
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
