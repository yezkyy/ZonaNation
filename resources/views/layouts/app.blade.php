<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zona Nation | Murah, Cepat dan Aman</title>
    @vite('resources/css/app.css')
    <script src="https://cdn.jsdelivr.net/npm/alpinejs" defer></script>
</head>
<body class="bg-gray-100 text-gray-900">
    <nav class="bg-white shadow p-4">
        <div class="container mx-auto flex justify-between items-center">
            <a href="/" class="flex items-center">
                <img src="{{ asset('assets/logo.png') }}" alt="ZonaNation Logo">
            </a>
            <div class="flex items-center space-x-4">
                <div class="relative">
                    <input type="text" placeholder="Cari Game..." class="px-4 py-2 rounded-full border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 transition duration-300 ease-in-out transform hover:scale-105">
                    <svg class="absolute right-3 top-1/2 transform -translate-y-1/2 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-4.35-4.35m1.35-5.65a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </div>
                <a href="#" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition">Login</a>
                <div class="flex items-center space-x-2">
                    <a href="#" class="text-gray-700">
                        <img src="{{ asset('indonesia-flag.png') }}" alt="Indonesia" class="h-4 w-6">
                    </a>
                    <a href="#" class="text-gray-700">
                        <img src="{{ asset('english-flag.png') }}" alt="English" class="h-4 w-6">
                    </a>
                </div>
            </div>
        </div>
    </nav>
    <main class="container mx-auto py-8">
        @yield('content')
    </main>
    <footer class="bg-gray-800 text-white py-4">
        <div class="container mx-auto text-center">
            &copy; 2025 ZonaNation. All rights reserved.
        </div>
    </footer>
</body>
</html>