@extends('layouts.app')

@section('content')
<div class="text-center relative">
    <h1 class="text-3xl font-bold text-blue-700 mb-10">Settings ⚙️</h1>

    <div x-data="{ open: false }" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 justify-center">

        <!-- Profil Pengguna -->
        <div class="bg-white/80 rounded-2xl shadow-lg p-6">
            <h3 class="text-lg font-semibold">Profil Pengguna</h3>
            <p class="text-gray-600 text-sm mb-4">Kelola nama dan informasi akun</p>
            <button class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg transition">Edit</button>
        </div>

        <!-- Keamanan -->
        <div class="bg-white/80 rounded-2xl shadow-lg p-6">
            <h3 class="text-lg font-semibold">Keamanan</h3>
            <p class="text-gray-600 text-sm mb-4">Ubah kata sandi akun Anda</p>
            <button class="bg-indigo-500 hover:bg-indigo-600 text-white px-4 py-2 rounded-lg transition">Update</button>
        </div>

        <!-- Tema Tampilan -->
        <div class="bg-white/80 rounded-2xl shadow-lg p-6">
            <h3 class="text-lg font-semibold">Tema Tampilan</h3>
            <p class="text-gray-600 text-sm mb-4">Sesuaikan mode terang atau gelap</p>
            <button class="bg-pink-500 hover:bg-pink-600 text-white px-4 py-2 rounded-lg transition">Sesuaikan</button>
        </div>

        <!-- Bahasa -->
        <div class="relative">
            <!-- Card default -->
            <div x-show="!open"
                 x-transition:enter="transition transform duration-300"
                 x-transition:enter-start="scale-90 opacity-0"
                 x-transition:enter-end="scale-100 opacity-100"
                 x-transition:leave="transition transform duration-300"
                 x-transition:leave-start="scale-100 opacity-100"
                 x-transition:leave-end="scale-90 opacity-0"
                 class="bg-white/80 rounded-2xl shadow-lg p-6">
                <h3 class="text-lg font-semibold">Bahasa</h3>
                <p class="text-gray-600 text-sm mb-4">Atur bahasa antarmuka</p>
                <button @click="open = true"
                        class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-lg transition">
                    Pilih
                </button>
            </div>

            <!-- Card expanded -->
            <div x-show="open"
                 x-transition:enter="transition transform duration-300"
                 x-transition:enter-start="scale-90 opacity-0"
                 x-transition:enter-end="scale-100 opacity-100"
                 x-transition:leave="transition transform duration-300"
                 x-transition:leave-start="scale-100 opacity-100"
                 x-transition:leave-end="scale-90 opacity-0"
                 class="absolute inset-0 z-50 bg-white/95 rounded-2xl shadow-2xl p-6 flex flex-col justify-center items-center text-center">
                <h3 class="text-xl font-semibold mb-4 text-gray-800">Pilih Bahasa 🌐</h3>

                <div class="grid grid-cols-2 gap-4 mb-6">
                    <button class="bg-blue-500 hover:bg-blue-600 text-white py-2 rounded-lg transition">🇮🇩 Indonesia</button>
                    <button class="bg-gray-700 hover:bg-gray-800 text-white py-2 rounded-lg transition">🇬🇧 English</button>
                    <button class="bg-blue-400 hover:bg-blue-500 text-white py-2 rounded-lg transition">🇫🇷 Français</button>
                    <button class="bg-red-500 hover:bg-red-600 text-white py-2 rounded-lg transition">🇨🇳 中文</button>
                </div>

                <button @click="open = false"
                        class="bg-gray-500 hover:bg-gray-600 text-white px-6 py-2 rounded-lg transition">
                    Kembali
                </button>
            </div>
        </div>

        <!-- Notifikasi -->
        <div class="bg-white/80 rounded-2xl shadow-lg p-6">
            <h3 class="text-lg font-semibold">Notifikasi</h3>
            <p class="text-gray-600 text-sm mb-4">Kelola pemberitahuan sistem</p>
            <button class="bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded-lg transition">Kelola</button>
        </div>

        <!-- Tentang Sistem -->
        <div class="bg-white/80 rounded-2xl shadow-lg p-6">
            <h3 class="text-lg font-semibold">Tentang Sistem</h3>
            <p class="text-gray-600 text-sm mb-4">Lihat versi & pengembang</p>
            <button class="bg-gray-600 hover:bg-gray-700 text-white px-4 py-2 rounded-lg transition">Detail</button>
        </div>

    </div>
</div>

<!-- Alpine.js -->
<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
@endsection
