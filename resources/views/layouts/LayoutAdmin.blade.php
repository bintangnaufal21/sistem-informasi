<!doctype html>
<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>@yield('title', 'Admin Panel')</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    @yield('styles')

    <style>
        .dropdown-content {
            display: none;
            transform: translateY(-10px);
            opacity: 0;
            transition: all 0.3s ease;
        }

        .dropdown:hover .dropdown-content {
            display: block;
            transform: translateY(0);
            opacity: 1;
        }

        /* Sidebar hover effect */
        .sidebar {
            width: 80px;
            transition: width 0.3s ease;
            overflow: hidden;
        }

        .sidebar:hover {
            width: 280px;
        }

        .sidebar-content {
            min-width: 256px;
        }

        .menu-text {
            opacity: 0;
            transition: opacity 0.2s ease;
            white-space: nowrap;
        }

        .sidebar:hover .menu-text {
            opacity: 1;
        }

        .logo-text {
            opacity: 0;
            transition: opacity 0.2s ease;
            white-space: nowrap;
        }

        .sidebar:hover .logo-text {
            opacity: 1;
        }

        .admin-text {
            opacity: 0;
            transition: opacity 0.2s ease;
            white-space: nowrap;
        }

        .sidebar:hover .admin-text {
            opacity: 1;
        }

        .dropdown-arrow {
            opacity: 0;
            transition: opacity 0.2s ease;
        }

        .sidebar:hover .dropdown-arrow {
            opacity: 1;
        }
    </style>
</head>

<body class="bg-gray-50 min-h-screen font-sans text-gray-800">

    <div class="min-h-screen flex">
        <aside class="sidebar bg-blue-900 text-white shadow-xl flex-shrink-0 relative">
            <div class="sidebar-content">
                <!-- Logo Section -->
                <div class="px-6 py-5 border-b border-blue-800">
                    <div class="flex items-center space-x-3">
                        <div class="bg-white p-2 rounded-lg">
                            <i class="fas fa-book text-blue-700 text-xl"></i>
                        </div>
                        <div class="logo-text">
                            <h1 class="text-lg font-bold">BUKU JEMBATAN ILMU</h1>
                            <p class="text-blue-300 text-xs">Digital Library System</p>
                        </div>
                    </div>
                </div>

                <!-- Navigation Menu -->
                <nav class="mt-6">

                    <!-- Dashboard -->
                    <a href="{{ route('admin.dashboard') }}"
                        class="flex items-center px-6 py-4
        {{ request()->routeIs('admin.dashboard')
            ? 'bg-blue-700 text-white font-semibold border-r-4 border-orange-500'
            : 'hover:bg-blue-800 text-gray-200' }}">
                        <i class="fas fa-home mr-3"></i>
                        <span class="menu-text">Dashboard</span>
                    </a>

                    <!-- User Management -->
                    <a href="{{ route('admin.user.index') }}"
                        class="flex items-center px-6 py-4
        {{ request()->routeIs('admin.user.*')
            ? 'bg-blue-700 text-white font-semibold border-r-4 border-orange-500'
            : 'hover:bg-blue-800 text-gray-200' }}">
                        <i class="fas fa-users mr-3"></i>
                        <span class="menu-text">User Management</span>
                    </a>

                    {{-- Category --}}
                    <a href="{{ route('admin.kategori.index') }}"
                        class="flex items-center px-6 py-4
        {{ request()->routeIs('#')
            ? 'bg-blue-700 text-white font-semibold border-r-4 border-orange-500'
            : 'hover:bg-blue-800 text-gray-200' }}">
                        <i class="fas fa-filter mr-3"></i>
                        <span class="menu-text">Category</span>
                    </a>

                    <!-- Data Buku -->
                    <a href="{{ route('admin.buku.index') }}"
                        class="flex items-center px-6 py-4
        {{ request()->routeIs('admin.buku.*')
            ? 'bg-blue-700 text-white font-semibold border-r-4 border-orange-500'
            : 'hover:bg-blue-800 text-gray-200' }}">
                        <i class="fas fa-book-open mr-3"></i>
                        <span class="menu-text">Data Buku</span>
                    </a>

                    <!-- Agenda -->
                    <a href="{{ route('admin.agenda.index') }}"
                        class="flex items-center px-6 py-4
        {{ request()->routeIs('admin.agenda.*')
            ? 'bg-blue-700 text-white font-semibold border-r-4 border-orange-500'
            : 'hover:bg-blue-800 text-gray-200' }}">
                        <i class="fas fa-calendar-alt mr-3"></i>
                        <span class="menu-text">Agenda</span>
                    </a>


                </nav>


                <!-- User Info Section -->
                <div class="absolute bottom-0 w-full p-4 border-t border-blue-800">
                    <div class="flex items-center space-x-3">
                        <div class="w-10 h-10 bg-blue-700 rounded-full flex items-center justify-center">
                            <i class="fas fa-user text-white"></i>
                        </div>
                        <div class="admin-text">
                            <p class="text-sm font-medium">Admin User</p>
                            <p class="text-blue-300 text-xs">Administrator</p>
                        </div>
                    </div>
                </div>
            </div>
        </aside>
        @yield('content')
    </div>

</body>

</html>
