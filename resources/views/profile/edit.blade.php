@extends('layouts.app')

@section('content')
<div class="text-center relative overflow-hidden flex flex-col items-center justify-center min-h-[calc(100vh-120px)]">
    <h1 class="text-lg font-bold text-blue-700 mb-6 flex justify-center items-center gap-2">
        Keamanan 🔒
    </h1>

    <div class="bg-white/80 backdrop-blur-md rounded-2xl shadow-lg p-5 w-full max-w-3xl flex flex-col md:flex-row gap-5 justify-center items-start transition-all duration-500 hover:shadow-2xl">

        {{-- Kiri: Ubah Password --}}
        <div class="flex-1 text-left">
            <div class="bg-white rounded-xl shadow p-5">
                {{-- Custom header tanpa nested section Breeze --}}
                <h2 class="text-base font-semibold text-blue-700 mb-3 flex items-center gap-2">
                    <span>🔑</span> Ubah Kata Sandi
                </h2>
                <p class="text-xs text-gray-600 mb-4">
                    Pastikan akun Anda menggunakan kata sandi yang kuat dan sulit ditebak.
                </p>

                {{-- Ambil isi form Breeze tanpa header/section luar --}}
                <form method="post" action="{{ route('password.update') }}" class="space-y-3 text-sm">
                    @csrf
                    @method('put')

                    <div>
                        <x-input-label for="update_password_current_password" :value="__('Kata Sandi Sekarang')" />
                        <x-text-input id="update_password_current_password" name="current_password" type="password" class="mt-1 block w-full text-sm" autocomplete="current-password" />
                        <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-1 text-xs" />
                    </div>

                    <div>
                        <x-input-label for="update_password_password" :value="__('Kata Sandi Baru')" />
                        <x-text-input id="update_password_password" name="password" type="password" class="mt-1 block w-full text-sm" autocomplete="new-password" />
                        <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-1 text-xs" />
                    </div>

                    <div>
                        <x-input-label for="update_password_password_confirmation" :value="__('Konfirmasi Kata Sandi Baru')" />
                        <x-text-input id="update_password_password_confirmation" name="password_confirmation" type="password" class="mt-1 block w-full text-sm" autocomplete="new-password" />
                        <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-1 text-xs" />
                    </div>

                    <div class="pt-2">
                        <x-primary-button class="text-sm px-4 py-2">
                            {{ __('Simpan Perubahan') }}
                        </x-primary-button>
                    </div>

                    @if (session('status') === 'password-updated')
                        <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)" class="text-xs text-gray-500 mt-2">
                            {{ __('Kata sandi berhasil diperbarui.') }}
                        </p>
                    @endif
                </form>
            </div>
        </div>

        {{-- Garis pemisah --}}
        <div class="hidden md:block w-px bg-gray-300"></div>

        {{-- Kanan: Hapus Akun --}}
        <div class="flex-1 text-left">
            <div class="bg-white rounded-xl shadow p-5">
                <h2 class="text-base font-semibold text-red-600 mb-3 flex items-center gap-2">
                    <span>⚠️</span> Hapus Akun
                </h2>
                <p class="text-xs text-gray-600 mb-4">
                    Sekali akun Anda dihapus, semua data akan hilang permanen. Pastikan Anda telah menyimpan informasi penting sebelum melanjutkan.
                </p>
                @include('profile.partials.delete-user-form')
            </div>
        </div>
    </div>

    <div class="mt-6">
        <a href="{{ route('settings') }}"
           class="bg-gray-600 hover:bg-gray-700 text-white px-5 py-2 rounded-lg transition shadow-md hover:shadow-lg text-xs">
           Kembali ke Settings
        </a>
    </div>
</div>
@endsection
