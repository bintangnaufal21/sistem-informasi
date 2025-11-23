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
            <div class="mt-6 space-y-4">

                <input type="text"
                       placeholder="Username"
                       class="w-full px-3 py-2 bg-white border rounded focus:outline-none">

                <input type="email"
                       placeholder="Email"
                       class="w-full px-3 py-2 bg-white border rounded focus:outline-none">

                <div class="relative">
                    <input type="password"
                           placeholder="Password"
                           class="w-full px-3 py-2 bg-white border rounded focus:outline-none">
                </div>

                <div class="relative">
                    <input type="password"
                           placeholder="Confirm Password"
                           class="w-full px-3 py-2 bg-white border rounded focus:outline-none">
                </div>

                <button class="w-full py-2 bg-white border rounded-lg text-black font-bold hover:bg-gray-200">
                    Register
                </button>

            </div>

        </div>
    </div>

    @vite(['resources/js/app.js'])
</body>
</html>
