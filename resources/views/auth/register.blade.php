@extends('layouts.app')

@section('content')
<section
    class="min-h-screen flex items-center justify-center bg-gradient-to-br from-blue-50 to-purple-50 dark:from-gray-900 dark:to-gray-800 p-4">
    <div class="w-full max-w-md">
        <!-- Logo dan Brand -->
        <div class="text-center mb-8">
            <a href="#" class="inline-flex items-center gap-3">
                <div class="p-2 bg-blue-600 rounded-lg shadow-lg">
                    <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z">
                        </path>
                    </svg>
                </div>
                <span class="text-2xl font-bold text-gray-800 dark:text-white">{{ config('app.name', 'Laravel')
                    }}</span>
            </a>
        </div>

        <!-- Card Utama -->
        <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-xl overflow-hidden">
            <!-- Header -->
            <div class="bg-gradient-to-r from-blue-500 to-purple-600 p-6">
                <h1 class="text-2xl font-bold text-white">Buat Akun Baru</h1>
                <p class="text-blue-100 mt-1">Silakan lengkapi data untuk mendaftar</p>
            </div>

            <!-- Form -->
            <div class="p-6">
                @if ($errors->any())
                <div class="text-red-500">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <form class="space-y-5" action="{{ route('auth.register.store') }}" method="POST">
                    @csrf

                    <!-- Nama -->
                    <div>
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-300">Nama
                            Lengkap</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                            </div>
                            <input type="text" name="name" id="name"
                                class="pl-10 bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
                                placeholder="John Doe" required>
                        </div>
                    </div>

                    <!-- Email -->
                    <div>
                        <label for="email"
                            class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-300">Email</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                    </path>
                                </svg>
                            </div>
                            <input type="email" name="email" id="email"
                                class="pl-10 bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
                                placeholder="nama@perusahaan.com" required>
                        </div>
                    </div>

                    <!-- Password -->
                    <div>
                        <label for="password"
                            class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-300">Password</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z">
                                    </path>
                                </svg>
                            </div>
                            <input type="password" name="password" id="password"
                                class="pl-10 bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
                                placeholder="••••••••" required>
                        </div>
                    </div>

                    <!-- Konfirmasi Password -->
                    <div>
                        <label for="password_confirmation"
                            class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-300">Konfirmasi
                            Password</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z">
                                    </path>
                                </svg>
                            </div>
                            <input type="password" name="password_confirmation" id="password_confirmation"
                                class="pl-10 bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
                                placeholder="••••••••" required>
                        </div>
                    </div>

                    <!-- Terms -->
                    <div class="flex items-start">
                        <div class="flex items-center h-5">
                            <input id="terms" aria-describedby="terms" type="checkbox"
                                class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800"
                                required>
                        </div>
                        <div class="ml-3 text-sm">
                            <label for="terms" class="font-medium text-gray-700 dark:text-gray-300">Saya menyetujui <a
                                    class="font-medium text-blue-600 hover:underline dark:text-blue-500" href="#">Syarat
                                    dan Ketentuan</a></label>
                        </div>
                    </div>

                    <!-- Button -->
                    <button type="submit"
                        class="w-full text-white bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-700 hover:to-purple-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-3 text-center transition-all duration-300 transform hover:scale-[1.02] dark:focus:ring-blue-800">
                        <div class="flex items-center justify-center">
                            <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            Daftar Sekarang
                        </div>
                    </button>

                    <!-- Login Link -->
                    <div class="text-center mt-4">
                        <p class="text-sm font-medium text-gray-600 dark:text-gray-400">
                            Sudah Punya Akun? <a href="{{ route('auth.login') }}"
                                class="font-bold text-blue-600 hover:underline dark:text-blue-500">Login Disini</a>
                        </p>
                    </div>
                </form>
            </div>
        </div>

        <!-- Footer -->
        <div class="mt-6 text-center">
            <p class="text-xs text-gray-500 dark:text-gray-400">© {{ date('Y') }} {{ config('app.name', 'Laravel') }}.
                All Rights Reserved.</p>
        </div>
    </div>
</section>
@endsection