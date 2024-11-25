<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LaundryController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

// Registrasi
Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');

Route::get('/register', [AuthController::class, 'create'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.submit');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Halaman akun (hanya untuk pengguna yang sudah login)
Route::middleware('auth')->group(function () {
    Route::get('/account', [AuthController::class, 'showAccount'])->name('account');
});

// Laundry
Route::get('/laundry/{id}', [LaundryController::class, 'show'])->name('laundry.detail');

Route::get('/edit-profile', [AuthController::class, 'editProfile'])->name('edit-profile');
Route::post('/edit-profile', [AuthController::class, 'updateProfile'])->name('edit-profile.update');

Route::get('/change-password', [AuthController::class, 'changePassword'])->name('change-password');
Route::post('/change-password', [AuthController::class, 'updatePassword'])->name('change-password.update');
