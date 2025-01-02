@extends('layouts.app')

@section('content')
<div class="text-center">
    <!-- Slider Section -->
    <div class="relative w-full mx-auto overflow-hidden">
        <div class="flex transition-transform duration-500 ease-in-out" id="promo-slider">
            <div class="w-full flex-shrink-0">
                <img src="{{ asset('assets/promo1.jpg') }}" alt="Promo 1" class="w-full h-64 object-cover">
            </div>
            <div class="w-full flex-shrink-0">
                <img src="{{ asset('assets/promo2.jpg') }}" alt="Promo 2" class="w-full h-64 object-cover">
            </div>
            <div class="w-full flex-shrink-0">
                <img src="{{ asset('assets/promo3.jpg') }}" alt="Promo 3" class="w-full h-64 object-cover">
            </div>
        </div>
        <div class="absolute inset-0 flex items-center justify-between">
            <button class="bg-[#000000] text-white p-2 rounded-full" onclick="prevSlide()">&#10094;</button>
            <button class="bg-[#000000] text-white p-2 rounded-full" onclick="nextSlide()">&#10095;</button>
        </div>
    </div>

    <!-- Navigation Section -->
    <div class="mt-8 flex justify-center space-x-4">
        <a href="#popular-games" class="border border-black text-black py-1 px-2 w-40 rounded-full hover:bg-[#FB2576] transition">🔥Lagi Populer🔥</a>
        <a href="#game-vouchers" class="border border-black text-black py-1 px-2 w-40 rounded-full hover:bg-[#FB2576] transition">Game Mobile</a>
        <a href="#game-vouchers" class="border border-black text-black py-1 px-2 w-40 rounded-full hover:bg-[#FB2576] transition">Game PC</a>
        <a href="#game-vouchers" class="border border-black text-black py-1 px-2 w-40 rounded-full hover:bg-[#FB2576] transition">🌟Baru Rilis🌟</a>
        <a href="#game-vouchers" class="border border-black text-black py-1 px-2 w-40 rounded-full hover:bg-[#FB2576] transition">Voucher</a>
    </div>

    <!-- Popular Games Section -->
    <div id="popular-games" class="mt-12">
        <h2 class="text-2xl font-bold text-[#150050]">Game Populer</h2>
        <div class="mt-4 grid grid-cols-2 md:grid-cols-4 gap-4">
            <!-- Example Game Item -->
            <div class="flex flex-col items-center">
                <img src="{{ asset('assets/game1.jpg') }}" alt="Game 1" class="w-24 h-24 rounded-full object-cover">
                <span class="mt-2 text-gray-700">Game 1</span>
            </div>
            <!-- Add more game items here -->
        </div>
    </div>

    <!-- Game Vouchers Section -->
    <div id="game-vouchers" class="mt-12">
        <h2 class="text-2xl font-bold text-[#150050]">Voucher Game</h2>
        <div class="mt-4 grid grid-cols-2 md:grid-cols-4 gap-4">
            <!-- Example Voucher Item -->
            <div class="flex flex-col items-center">
                <img src="{{ asset('assets/voucher1.jpg') }}" alt="Voucher 1" class="w-24 h-24 rounded-full object-cover">
                <span class="mt-2 text-gray-700">Voucher 1</span>
            </div>
            <!-- Add more voucher items here -->
        </div>
    </div>
</div>

<script>
    let currentSlide = 0;
    const slides = document.querySelectorAll('#promo-slider > div');
    const totalSlides = slides.length;

    function showSlide(index) {
        const slider = document.getElementById('promo-slider');
        slider.style.transform = `translateX(-${index * 100}%)`;
    }

    function nextSlide() {
        currentSlide = (currentSlide + 1) % totalSlides;
        showSlide(currentSlide);
    }

    function prevSlide() {
        currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
        showSlide(currentSlide);
    }

    setInterval(nextSlide, 5000); // Auto-slide every 5 seconds
</script>
@endsection