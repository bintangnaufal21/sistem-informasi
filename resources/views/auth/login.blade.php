<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Perpustakaan</title>
    @vite(['resources/css/app.css'])
</head>

<body class="bg-gray-200 flex items-center justify-center min-h-screen">

    <div class="bg-white w-[900px] h-[520px] rounded-xl shadow-lg flex overflow-hidden">

        <!-- LEFT -->
        <div class="w-1/2 bg-[#13275B] text-white flex flex-col items-center justify-center p-8">

            <h1 class="text-3xl font-bold text-[#F2A873] text-center leading-snug">
                Selamat Datang <br>
                kembali di Midgard
            </h1>

            <img src="assets/buku.png"
                 alt="book"
                 class="w-50 mt-8">

        </div>

        <!-- RIGHT -->
        <div class="w-1/2 bg-gray-100 p-10 flex flex-col">

            <h2 class="text-3xl font-bold text-[#13275B]">Login</h2>

            <p class="mt-2 text-sm">
                Don’t have an account?
                <a href="{{ route('register') }}" class="text-[#F2A873] font-semibold">Sign up</a>

            </p>

            <!-- FORM -->
            {{-- <form method="POST" action="{{ route('login.post') }}" class="mt-6 space-y-4"> --}}
                @csrf
                <input type="email"
                       name="email"
                       placeholder="Email"
                       value="{{ old('email') }}"
                       class="w-full px-3 py-2 bg-white border rounded focus:outline-none @error('email') border-red-500 @enderror">

                @error('email')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror

                <div class="relative">
                    <input type="password"
                           name="password"
                           placeholder="Password"
                           class="w-full px-3 py-2 bg-white border rounded focus:outline-none @error('password') border-red-500 @enderror">
                    <span class="absolute right-3 top-2.5 cursor-pointer">

                    </span>
                </div>

                @error('password')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror

                <div class="flex justify-between items-center text-sm">
                    <label class="flex items-center space-x-2">
                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                        <span>remember me</span>
                    </label>
                    <a href="#" class="font-semibold text-[#13275B]">forgot password?</a>
                </div>

                <button type="submit" class="w-full py-2 bg-white border rounded-lg text-black font-bold hover:bg-gray-200">
                    Login
                </button>
            </form>

@if(session('success'))
    <div class="mb-4 p-3 text-green-800 bg-green-100 rounded">
        {{ session('success') }}
    </div>
@endif

        </div>
    </div>
    @vite(['resources/js/app.js'])
</body>
</html>
