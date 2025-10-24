@extends('layouts.app')

@section('content')
<div class="p-8 bg-[#eef5ff] min-h-screen">
    <h1 class="text-3xl font-semibold text-[#004aad] mb-6">Device Control</h1>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Pompa Air -->
        <div class="bg-white shadow-md rounded-2xl p-6 text-center transition transform hover:scale-[1.02]">
            <h2 class="text-xl font-semibold mb-2 text-gray-800">Pompa Air</h2>
            <p class="text-gray-500 mb-4">Status: <span class="font-semibold text-green-600">Aktif</span></p>
            <button class="bg-red-500 hover:bg-red-600 text-white px-6 py-2 rounded-xl transition duration-300">
                Matikan
            </button>
        </div>

        <!-- Kipas Pendingin -->
        <div class="bg-white shadow-md rounded-2xl p-6 text-center transition transform hover:scale-[1.02]">
            <h2 class="text-xl font-semibold mb-2 text-gray-800">Kipas Pendingin</h2>
            <p class="text-gray-500 mb-4">Status: <span class="font-semibold text-red-600">Nonaktif</span></p>
            <button class="bg-green-500 hover:bg-green-600 text-white px-6 py-2 rounded-xl transition duration-300">
                Nyalakan
            </button>
        </div>

        <!-- Lampu Greenhouse -->
        <div class="bg-white shadow-md rounded-2xl p-6 text-center transition transform hover:scale-[1.02]">
            <h2 class="text-xl font-semibold mb-2 text-gray-800">Lampu Greenhouse</h2>
            <p class="text-gray-500 mb-4">Status: <span class="font-semibold text-green-600">Aktif</span></p>
            <button class="bg-red-500 hover:bg-red-600 text-white px-6 py-2 rounded-xl transition duration-300">
                Matikan
            </button>
        </div>

        <!-- Sensor Tanah -->
        <div class="bg-white shadow-md rounded-2xl p-6 text-center transition transform hover:scale-[1.02]">
            <h2 class="text-xl font-semibold mb-2 text-gray-800">Sensor Kelembapan Tanah</h2>
            <p class="text-gray-500 mb-4">Status: <span class="font-semibold text-green-600">Aktif</span></p>
            <button class="bg-red-500 hover:bg-red-600 text-white px-6 py-2 rounded-xl transition duration-300">
                Matikan
            </button>
        </div>

        <!-- Sensor Hujan -->
        <div class="bg-white shadow-md rounded-2xl p-6 text-center transition transform hover:scale-[1.02]">
            <h2 class="text-xl font-semibold mb-2 text-gray-800">Sensor Hujan</h2>
            <p class="text-gray-500 mb-4">Status: <span class="font-semibold text-green-600">Aktif</span></p>
            <button class="bg-red-500 hover:bg-red-600 text-white px-6 py-2 rounded-xl transition duration-300">
                Matikan
            </button>
        </div>

        <!-- Emisi Karbon -->
        <div class="bg-white shadow-md rounded-2xl p-6 text-center transition transform hover:scale-[1.02]">
            <h2 class="text-xl font-semibold mb-2 text-gray-800">Sensor Emisi Karbon</h2>
            <p class="text-gray-500 mb-4">Status: <span class="font-semibold text-red-600">Nonaktif</span></p>
            <button class="bg-green-500 hover:bg-green-600 text-white px-6 py-2 rounded-xl transition duration-300">
                Nyalakan
            </button>
        </div>
    </div>
</div>
@endsection
