<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zona Nation | Murah, Cepat dan Aman</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    @vite('resources/css/app.css')
    <script src="https://cdn.jsdelivr.net/npm/alpinejs" defer></script>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            display: flex;
        }
        .flag {
            border-radius: 50%;
            width: 24px;
            height: 24px;
        }
        .main-content {
            flex: 1;
            margin-left: 6rem; /* Adjust based on your aside width */
        }
        footer {
            background-color: #2d3748;
            color: white;
            padding: 1rem 0;
            text-align: center;
        }
    </style>
    <script>
        function setLanguage(lang) {
            window.location.href = `/${lang}`;
        }
    </script>
</head>
<body class="bg-gray-100 text-gray-900">
    @include('layouts.aside')
    <div class="main-content">
        <nav class="bg-white shadow p-4">
            <div class="container mx-auto flex justify-between items-center">
                <a href="/" class="flex items-center">
                    <img src="{{ asset('assets/logo.png') }}" alt="ZonaNation Logo">
                </a>
                <div class="flex items-center space-x-4">
                    <div class="relative">
                        <input type="text" placeholder="Cari Game..." class="px-4 py-2 pl-10 rounded-full border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 transition duration-300 ease-in-out transform hover:scale-105">
                        <svg class="absolute left-3 top-1/2 transform -translate-y-1/2 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-4.35-4.35m1.35-5.65a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </div>
                    <a href="#" class="bg-gradient-to-r from-purple-700 to-purple-900 text-white px-4 py-2 rounded-full shadow-lg hover:from-purple-800 hover:to-purple-900 transition duration-300 ease-in-out transform hover:scale-105 font-poppins">Login</a>
                    <div class="flex items-center space-x-2">
                        <a href="#" class="text-gray-700" onclick="setLanguage('id')">
                            <img src="{{ asset('assets/indonesia.png') }}" alt="Indonesia" class="flag">
                        </a>
                        <a href="#" class="text-gray-700" onclick="setLanguage('en')">
                            <img src="{{ asset('assets/english.png') }}" alt="English" class="flag">
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
    </div>
</body>
</html>