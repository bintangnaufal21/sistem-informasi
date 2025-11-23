<!-- resources/views/status_buku.blade.php -->
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Status Buku - Perpustakaan</title>
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
        <a href="{{ route('status-buku') }}" class="block px-6 py-4 bg-orange-500 text-black font-bold">Status Buku</a>
      </nav>
    </aside>

    <!-- MAIN -->
    <main class="flex-1 p-10">
      <div class="flex items-center justify-between mb-6">
        <h1 class="text-3xl font-extrabold">Status Buku</h1>
        <div>
          <a href="{{ route('data-buku') }}" class="px-4 py-2 bg-gray-300 text-gray-800 rounded-lg">Kembali ke Daftar Buku</a>
        </div>
      </div>

      <!-- Status Cards -->
      <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
        <div class="bg-white rounded-xl p-6 shadow flex flex-col">
          <div class="text-sm text-gray-500">Total Buku</div>
          <div class="text-3xl font-bold mt-2">{{ $status->total }}</div>
        </div>

        <div class="bg-white rounded-xl p-6 shadow flex flex-col">
          <div class="text-sm text-gray-500">Tersedia</div>
          <div class="text-3xl font-bold mt-2 text-green-600">{{ $status->tersedia }}</div>
        </div>

        <div class="bg-white rounded-xl p-6 shadow flex flex-col">
          <div class="text-sm text-gray-500">Dipinjam</div>
          <div class="text-3xl font-bold mt-2 text-yellow-600">{{ $status->dipinjam }}</div>
        </div>

        <div class="bg-white rounded-xl p-6 shadow flex flex-col">
          <div class="text-sm text-gray-500">Rusak / Hilang</div>
          <div class="text-3xl font-bold mt-2 text-red-600">{{ $status->rusak }}</div>
        </div>
      </div>

      <!-- Chart & Recent list (UI only) -->
      <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        <!-- Chart placeholder -->
        <div class="lg:col-span-2 bg-white rounded-2xl p-6 shadow">
          <h2 class="text-xl font-semibold mb-4">Distribusi Status (UI)</h2>
          <!-- simple horizontal bars -->
          <div class="space-y-4">
            <div>
              <div class="flex justify-between text-sm mb-1">
                <div class="text-gray-600">Tersedia</div>
                <div class="text-gray-500">{{ $status->tersedia }}</div>
              </div>
              <div class="w-full bg-gray-200 rounded h-3 overflow-hidden">
                <div class="h-3 bg-green-600" style="width: {{ round(($status->tersedia / max($status->total,1))*100,0) }}%"></div>
              </div>
            </div>

            <div>
              <div class="flex justify-between text-sm mb-1">
                <div class="text-gray-600">Dipinjam</div>
                <div class="text-gray-500">{{ $status->dipinjam }}</div>
              </div>
              <div class="w-full bg-gray-200 rounded h-3">
                <div class="h-3 bg-yellow-600" style="width: {{ round(($status->dipinjam / max($status->total,1))*100,0) }}%"></div>
              </div>
            </div>

            <div>
              <div class="flex justify-between text-sm mb-1">
                <div class="text-gray-600">Reserved</div>
                <div class="text-gray-500">{{ $status->reserved ?? 0 }}</div>
              </div>
              <div class="w-full bg-gray-200 rounded h-3">
                <div class="h-3 bg-blue-600" style="width: {{ round((($status->reserved ?? 0) / max($status->total,1))*100,0) }}%"></div>
              </div>
            </div>

            <div>
              <div class="flex justify-between text-sm mb-1">
                <div class="text-gray-600">Rusak</div>
                <div class="text-gray-500">{{ $status->rusak }}</div>
              </div>
              <div class="w-full bg-gray-200 rounded h-3">
                <div class="h-3 bg-red-600" style="width: {{ round(($status->rusak / max($status->total,1))*100,0) }}%"></div>
              </div>
            </div>
          </div>
        </div>

        <!-- Recent books -->
        <div class="bg-white rounded-2xl p-6 shadow">
          <h2 class="text-xl font-semibold mb-4">Buku Terbaru</h2>

          <ul class="space-y-4">
            @foreach($books as $b)
              <li class="flex items-start gap-4">
                <div class="w-12 h-12 rounded overflow-hidden bg-gray-100 flex items-center justify-center">
                  <!-- contoh path gambar di project (opsional) -->
                  <img src="/mnt/data/f2bfd086-3439-4fd5-984c-4532bc9c3124.png" alt="cover" class="w-full h-full object-cover">
                </div>
                <div class="flex-1">
                  <div class="font-semibold">{{ $b->title }}</div>
                  <div class="text-sm text-gray-500">Status: <span class="font-medium">{{ $b->status }}</span></div>
                </div>
                <div>
                  <span class="px-3 py-1 text-sm rounded {{ $b->status == 'Tersedia' ? 'bg-green-100 text-green-800' : 'bg-yellow-100 text-yellow-800' }}">
                    {{ $b->status }}
                  </span>
                </div>
              </li>
            @endforeach
          </ul>

        </div>
      </div>

      <!-- table detail (opsional) -->
      <div class="mt-8 bg-white rounded-2xl p-6 shadow">
        <h3 class="text-lg font-semibold mb-4">Daftar Ringkas Buku</h3>
        <table class="w-full text-left">
          <thead>
            <tr class="text-sm text-gray-600 border-b">
              <th class="py-3 px-4">#</th>
              <th class="py-3 px-4">Judul</th>
              <th class="py-3 px-4">Status</th>
            </tr>
          </thead>
          <tbody>
            @foreach($books as $b)
              <tr class="border-t">
                <td class="py-3 px-4">{{ $loop->iteration }}</td>
                <td class="py-3 px-4">{{ $b->title }}</td>
                <td class="py-3 px-4">{{ $b->status }}</td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>

    </main>
  </div>
</body>
</html>
