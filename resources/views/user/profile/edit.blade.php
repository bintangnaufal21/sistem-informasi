@extends('layouts.LayoutUser')

@section('title', 'Edit Profil')

@section('content')
<section class="py-12">
    <div class="container mx-auto px-4 max-w-3xl">
        <div class="bg-white rounded-lg shadow p-6">

            <div class="flex items-center justify-between mb-6">
                <h1 class="text-2xl font-bold">Edit Profil</h1>
                <a href="{{ route('user.profile') ?? '/profil' }}" class="text-sm text-gray-600 hover:underline">← Kembali ke Profil</a>
            </div>

            <!-- Info notice -->
            <div class="mb-6 text-sm text-gray-600">
                Silakan perbarui informasi profil Anda. Field yang bertanda * wajib diisi.
            </div>

            <!-- Form (static) -->
            <form action="#" method="POST" enctype="multipart/form-data" class="space-y-6">
                {{-- tambahkan @csrf ketika mulai connect ke backend --}}
                {{-- @csrf --}}

                <!-- Avatar -->
                <div class="flex items-center gap-6">
                    <div class="w-24 h-24 rounded-full bg-gray-100 overflow-hidden flex items-center justify-center">
                        <img src="/assets/default-avatar.png" alt="Avatar" class="w-full h-full object-cover">
                    </div>

                    <div class="flex-1">
                        <label class="block text-sm font-medium text-gray-700 mb-1">Ganti Foto Profil</label>
                        <input type="file" name="avatar" accept="image/*" class="text-sm text-gray-600">
                        <p class="mt-2 text-xs text-gray-500">Format: JPG/PNG. Maks 2MB. (Untuk preview nanti, tambahkan logic di backend atau JS)</p>
                    </div>
                </div>

                <!-- Nama -->
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Nama <span class="text-red-500">*</span></label>
                    <input id="name" name="name" type="text" value="Bintang Naufal"
                        class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <!-- Email -->
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email <span class="text-red-500">*</span></label>
                    <input id="email" name="email" type="email" value="bintang@example.com"
                        class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <!-- Telepon -->
                <div>
                    <label for="phone" class="block text-sm font-medium text-gray-700 mb-1">Telepon</label>
                    <input id="phone" name="phone" type="text" value="+62 812 3456 7890"
                        class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <!-- Alamat -->
                <div>
                    <label for="address" class="block text-sm font-medium text-gray-700 mb-1">Alamat</label>
                    <textarea id="address" name="address" rows="3"
                        class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">Jl. Sylah Kuala, Banda Aceh</textarea>
                </div>

                <!-- Buttons -->
                <div class="flex items-center gap-3">
                    <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-2 rounded-lg font-semibold">
                        Simpan Perubahan
                    </button>

                    <a href="{{ route('user.profile') ?? '/profil' }}" class="inline-block border border-gray-200 px-4 py-2 rounded-lg text-gray-700 hover:shadow">
                        Batal
                    </a>
                </div>
            </form>

            <!-- Footer note -->
            <p class="mt-6 text-xs text-gray-500">
                Catatan: ini tampilan statis. Saat kamu siap menghubungkan ke backend, gantikan `action="#"` dengan route update (mis. <code>route('user.profile.update')</code>), aktifkan <code>@csrf</code>, lalu proses upload & validasi di controller.
            </p>
        </div>
    </div>
</section>
@endsection
