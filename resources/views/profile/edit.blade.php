@extends('layouts.app')

@section('content')
<div class="text-center relative overflow-hidden">
    <h1 class="text-3xl font-bold text-blue-700 mb-10 flex justify-center items-center gap-2">
        Keamanan 🔒
    </h1>

    <div class="flex justify-center">
        <div class="bg-white/80 backdrop-blur-md rounded-2xl shadow-lg p-8 max-w-2xl w-full transition-all duration-500 hover:shadow-2xl">
            
            <h2 class="text-xl font-semibold text-gray-800 mb-6">
                Ubah Kata Sandi Akun
            </h2>

            @include('profile.partials.update-password-form')

            <hr class="my-8 border-gray-300">

            <h2 class="text-xl font-semibold text-gray-800 mb-6">
                Hapus Akun
            </h2>

            @include('profile.partials.delete-user-form')
        </div>
    </div>
</div>
@endsection
