<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Dashboard Perpustakaan</title>

  {{-- pastikan app.css dan app.js dimuat lewat Vite --}}
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
        <a href="#" class="block px-6 py-4 bg-orange-500 text-black font-bold">Dashboard</a>
        <a href="#" class="block px-6 py-4 hover:bg-blue-800">User</a>
        <a href="#" class="block px-6 py-4 hover:bg-blue-800">Data Buku</a>
      </nav>
    </aside>

    <!-- MAIN -->
    <main class="flex-1 p-10">
      <!-- HEADER ICONS -->
      <div class="flex justify-end items-center mb-6">
        <div class="flex items-center gap-4 text-gray-600">
          <button class="p-2 rounded hover:bg-gray-200">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM4 21v-2a4 4 0 014-4h8a4 4 0 014 4v2"/></svg>
          </button>
          <button class="p-2 rounded hover:bg-gray-200">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 16l4-4m0 0l-4-4m4 4H7"/></svg>
          </button>
        </div>
      </div>

      <!-- TITLE -->
      <h1 class="text-3xl font-extrabold text-center mb-8">BUKU JEMBATAN ILMU</h1>

      <!-- CARDS ROW -->
      <div class="grid grid-cols-3 gap-8 max-w-5xl mx-auto mb-20">
        @for ($i = 0; $i < 3; $i++)
        <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
          <div class="bg-blue-700 text-white text-center py-3 rounded-t-2xl font-semibold">
            @if($i==0)BUKU BARU
            @elseif($i==1)BEST SELLER
            @else REKOMENDASI @endif
          </div>

          <div class="p-6 flex flex-col items-center">
            {{-- gunakan gambar dari public/images --}}
            <img src="{{ asset('images/book-sample.png') }}" alt="cover" class="w-28 h-36 object-cover rounded shadow-md -mt-6">
            <p class="mt-4 text-sm text-center text-gray-600">Iblis tidak Pernah Mati</p>
          </div>
        </div>
        @endfor
      </div>

      <!-- FOOTER INFO -->
      <div class="max-w-6xl mx-auto flex justify-between items-end text-sm text-gray-700">
        <div>
          <h4 class="font-semibold mb-2">Operasional Hour</h4>
          <p>Senin - Kamis : 08:00 - 18:00 WIB<br>Jum'at : 13:00 - 18:00 WIB</p>
        </div>

        <div class="text-center">
          <h4 class="font-semibold mb-2">Location</h4>
          <p>Jln. Syiah Kuala, Aceh, Banda Aceh</p>
        </div>

        <div class="text-right">
          <h4 class="font-semibold mb-2">Contact</h4>
          <p>+62 812 3456 7890<br>text@test.com</p>
        </div>
      </div>

    </main>
  </div>

</body>
</html>
