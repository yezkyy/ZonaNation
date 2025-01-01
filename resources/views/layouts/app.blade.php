<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ZonaNation</title>
    @vite('resources/css/app.css')
    <script src="https://cdn.jsdelivr.net/npm/alpinejs" defer></script>
</head>
<body class="bg-gray-100 text-gray-900">
    <nav class="bg-blue-500 p-4">
        <div class="container mx-auto flex justify-between items-center">
            <a href="/" class="text-white text-lg font-bold">ZonaNation</a>
            <div>
                <a href="#" class="text-white px-4">Home</a>
                <a href="#" class="text-white px-4">Top Up</a>
                <a href="#" class="text-white px-4">Contact</a>
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