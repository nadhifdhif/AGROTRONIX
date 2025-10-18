@extends('layouts.app')

@section('content')
<div class="p-8 text-gray-800 text-center">
    <!-- Header -->
    <h1 class="text-3xl font-bold text-blue-800 mb-8">
        Settings ⚙️
    </h1>

    <!-- Grid pengaturan -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 justify-items-center">
        <!-- Card 1: Profile -->
        <div class="glass-card w-72 h-44 flex flex-col justify-center items-center">
            <i class="fa-solid fa-user text-3xl text-blue-600 mb-3"></i>
            <h2 class="text-lg font-semibold">Profil Pengguna</h2>
            <p class="text-sm text-gray-600 mt-1">Kelola nama dan informasi akun</p>
            <button class="mt-3 bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md text-sm">Edit</button>
        </div>

        <!-- Card 2: Password -->
        <div class="glass-card w-72 h-44 flex flex-col justify-center items-center">
            <i class="fa-solid fa-lock text-3xl text-indigo-500 mb-3"></i>
            <h2 class="text-lg font-semibold">Keamanan</h2>
            <p class="text-sm text-gray-600 mt-1">Ubah kata sandi akun Anda</p>
            <button class="mt-3 bg-indigo-500 hover:bg-indigo-600 text-white px-4 py-2 rounded-md text-sm">Update</button>
        </div>

        <!-- Card 3: Tema -->
        <div class="glass-card w-72 h-44 flex flex-col justify-center items-center">
            <i class="fa-solid fa-palette text-3xl text-pink-500 mb-3"></i>
            <h2 class="text-lg font-semibold">Tema Tampilan</h2>
            <p class="text-sm text-gray-600 mt-1">Sesuaikan mode terang atau gelap</p>
            <button class="mt-3 bg-pink-500 hover:bg-pink-600 text-white px-4 py-2 rounded-md text-sm">Sesuaikan</button>
        </div>

        <!-- Card 4: Bahasa -->
        <div class="glass-card w-72 h-44 flex flex-col justify-center items-center">
            <i class="fa-solid fa-globe text-3xl text-green-600 mb-3"></i>
            <h2 class="text-lg font-semibold">Bahasa</h2>
            <p class="text-sm text-gray-600 mt-1">Atur bahasa antarmuka</p>
            <button class="mt-3 bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-md text-sm">Pilih</button>
        </div>

        <!-- Card 5: Notifikasi -->
        <div class="glass-card w-72 h-44 flex flex-col justify-center items-center">
            <i class="fa-solid fa-bell text-3xl text-yellow-500 mb-3"></i>
            <h2 class="text-lg font-semibold">Notifikasi</h2>
            <p class="text-sm text-gray-600 mt-1">Kelola pemberitahuan sistem</p>
            <button class="mt-3 bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded-md text-sm">Kelola</button>
        </div>

        <!-- Card 6: Tentang -->
        <div class="glass-card w-72 h-44 flex flex-col justify-center items-center">
            <i class="fa-solid fa-circle-info text-3xl text-gray-500 mb-3"></i>
            <h2 class="text-lg font-semibold">Tentang Sistem</h2>
            <p class="text-sm text-gray-600 mt-1">Lihat versi & pengembang</p>
            <button class="mt-3 bg-gray-500 hover:bg-gray-600 text-white px-4 py-2 rounded-md text-sm">Detail</button>
        </div>
    </div>
</div>

<style>
    .glass-card {
        background: rgba(255, 255, 255, 0.7);
        backdrop-filter: blur(10px);
        border-radius: 1rem;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
        transition: all 0.3s ease;
    }

    .glass-card:hover {
        transform: scale(1.05);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
    }
</style>

<script src="https://kit.fontawesome.com/a2d9e6d9bb.js" crossorigin="anonymous"></script>
@endsection
