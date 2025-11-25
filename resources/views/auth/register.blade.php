<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Perpustakaan</title>
    @vite(['resources/css/app.css'])
</head>

<body class="bg-gray-200 flex items-center justify-center min-h-screen">

    <div class="bg-white w-[900px] h-[520px] rounded-xl shadow-lg flex overflow-hidden">

        <!-- LEFT -->
        <div class="w-1/2 bg-[#13275B] text-white flex flex-col items-center justify-center p-8">

            <h1 class="text-3xl font-bold text-[#F2A873] text-center leading-snug">
                Buat Akun Baru<br>
                di Midgard Library
            </h1>

            <!-- gunakan path file lokal yang kamu upload -->
            <img src="assets/buku.png"
                 alt="illustration"
                 class="w-50 mt-8">


        </div>

        <!-- RIGHT -->
        <div class="w-1/2 bg-gray-100 p-10 flex flex-col">

            <h2 class="text-3xl font-bold text-[#13275B]">Register</h2>

            <p class="mt-2 text-sm">
                Sudah punya akun?
                <a href="{{ route('login') }}" class="text-[#F2A873] font-semibold">Login disini</a>
            </p>

            <!-- FORM -->
            <!-- FORM -->
<div class="mt-6 space-y-4">
    {{-- <form action="{{ route('register.store') }}" method="POST" class="space-y-4"> --}}
        @csrf

        <input type="text"
               name="name"
               placeholder="Username"
               value="{{ old('name') }}"
               class="w-full px-3 py-2 bg-white border rounded focus:outline-none">

        @error('name')
            <div class="text-red-600 text-sm">{{ $message }}</div>
        @enderror

        <input type="email"
               name="email"
               placeholder="Email"
               value="{{ old('email') }}"
               class="w-full px-3 py-2 bg-white border rounded focus:outline-none">

        @error('email')
            <div class="text-red-600 text-sm">{{ $message }}</div>
        @enderror

        <div class="relative">
            <input type="password"
                   name="password"
                   placeholder="Password"
                   class="w-full px-3 py-2 bg-white border rounded focus:outline-none">
        </div>
        @error('password')
            <div class="text-red-600 text-sm">{{ $message }}</div>
        @enderror

        <div class="relative">
            <input type="password"
                   name="password_confirmation"
                   placeholder="Confirm Password"
                   class="w-full px-3 py-2 bg-white border rounded focus:outline-none">
        </div>

        <button type="submit" class="w-full py-2 bg-white border rounded-lg text-black font-bold hover:bg-gray-200">
            Register
        </button>
    </form>
</div>

