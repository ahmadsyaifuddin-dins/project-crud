<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Hanya buat tamu (guest) yang belum login
Route::middleware('guest')->group(function () {
    Route::get('/login', function () {
        return view('auth.login');
    })->name('login');

    Route::get('/register', function () {
        return view('auth.register');
    })->name('register');
    
    Route::post('/login', [LoginController::class, 'login'])->name('login.submit');
    Route::post('/register', [RegisterController::class, 'store'])->name('register.submit');
});

Route::post('/register', [RegisterController::class, 'store'])->name('auth.register.store');
Route::post('/login', [LoginController::class, 'login'])->name('auth.login.masuk');

Route::middleware(['auth'])->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
