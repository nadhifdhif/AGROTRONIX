@extends('layouts.app')

@section('content')
<div x-data="{ open: false }" class="text-center relative overflow-hidden">

    <h1 class="text-3xl font-bold text-blue-700 mb-10 flex justify-center items-center gap-2">
        Settings 🌐
    </h1>

    <!-- Layer blur (hanya area konten, bukan sidebar) -->
    <div x-show="open"
         x-transition:enter="transition-opacity duration-300"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100"
         x-transition:leave="transition-opacity duration-300"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0"
         class="absolute inset-0 bg-white/30 backdrop-blur-sm z-0 rounded-2xl">
    </div>

    <!-- Grid utama -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 justify-center transition-all duration-500 relative z-20"
         :class="open ? 'scale-90 blur-sm opacity-40 pointer-events-none' : 'scale-100 blur-0 opacity-100'">

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
                 x-transition:enter="transition transform duration-400 ease-out"
                 x-transition:enter-start="scale-90 opacity-0"
                 x-transition:enter-end="scale-100 opacity-100"
                 x-transition:leave="transition transform duration-400 ease-in"
                 x-transition:leave-start="scale-100 opacity-100"
                 x-transition:leave-end="scale-90 opacity-0"
                 class="bg-white/80 rounded-2xl shadow-lg p-6 relative z-10">
                <h3 class="text-lg font-semibold">Bahasa</h3>
                <p class="text-gray-600 text-sm mb-4">Atur bahasa antarmuka</p>
                <button @click="open = true"
                        class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-lg transition">
                    Pilih
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

    <!-- Card Bahasa (hanya di area konten utama) -->
    <div x-show="open"
         x-transition:enter="transition transform duration-500 ease-out"
         x-transition:enter-start="translate-y-10 scale-90 opacity-0"
         x-transition:enter-end="translate-y-0 scale-105 opacity-100"
         x-transition:leave="transition transform duration-500 ease-in"
         x-transition:leave-start="translate-y-0 scale-105 opacity-100"
         x-transition:leave-end="translate-y-10 scale-90 opacity-0"
         class="absolute inset-0 flex items-center justify-center z-50">

        <div class="bg-white/95 rounded-3xl p-8 shadow-2xl w-full max-w-md transform transition-all animate-[float_3s_ease-in-out_infinite]">
            <h3 class="text-2xl font-semibold mb-6 text-gray-800">Pilih Bahasa</h3>

            <div class="grid grid-cols-2 gap-4 mb-8">
                <button class="bg-blue-500 hover:bg-blue-600 text-white py-2 rounded-lg transition shadow-md hover:shadow-lg transform hover:scale-105">🇮🇩 Indonesia</button>
                <button class="bg-gray-700 hover:bg-gray-800 text-white py-2 rounded-lg transition shadow-md hover:shadow-lg transform hover:scale-105">🇬🇧 English</button>
                <button class="bg-blue-400 hover:bg-blue-500 text-white py-2 rounded-lg transition shadow-md hover:shadow-lg transform hover:scale-105">🇫🇷 Français</button>
                <button class="bg-red-500 hover:bg-red-600 text-white py-2 rounded-lg transition shadow-md hover:shadow-lg transform hover:scale-105">🇨🇳 中文</button>
            </div>

            <button @click="open = false"
                    class="bg-gray-500 hover:bg-gray-600 text-white px-6 py-2 rounded-lg transition shadow-md hover:shadow-lg">
                Kembali
            </button>
        </div>
    </div>
</div>

<!-- Alpine.js -->
<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

<!-- Efek mengambang -->
<style>
@keyframes float {
  0%, 100% { transform: translateY(0); }
  50% { transform: translateY(-8px); }
}
</style>
@endsection
