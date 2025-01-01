@extends('layouts.app')

@section('title', 'Top Up - ZonaNation')

@section('content')
<div>
    <h2 class="text-2xl font-bold mb-4">Top-Up Game</h2>
    <form action="/topup/process" method="POST" class="bg-white p-6 rounded shadow-md">
        @csrf
        <div class="mb-4">
            <label for="game" class="block text-gray-700">Pilih Game</label>
            <select id="game" name="game" class="w-full border-gray-300 rounded">
                <option value="mobile-legends">Mobile Legends</option>
                <option value="free-fire">Free Fire</option>
                <option value="pubg-mobile">PUBG Mobile</option>
            </select>
        </div>
        <div class="mb-4">
            <label for="id" class="block text-gray-700">ID Pemain</label>
            <input type="text" id="id" name="id" class="w-full border-gray-300 rounded">
        </div>
        <div class="mb-4">
            <label for="nominal" class="block text-gray-700">Nominal Top-Up</label>
            <select id="nominal" name="nominal" class="w-full border-gray-300 rounded">
                <option value="50000">50.000</option>
                <option value="100000">100.000</option>
                <option value="200000">200.000</option>
            </select>
        </div>
        <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">Submit</button>
    </form>
</div>
@endsection
