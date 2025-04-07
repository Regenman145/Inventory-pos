<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Barang;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
// Route::get('/barang', function () {
//     return view('barang');
// });
Route::middleware('guest')->group(function () {
    //registrasi
    Route::get('/registrasi', [AuthController::class, 'tampilRegistrasi'])->name('registrasi.tampil');
    Route::post('/registrasi/submit', [AuthController::class, 'submitRegistrasi'])->name('registrasi.submit');
    //login
    Route::get('/login', [AuthController::class, 'tampilLogin'])->name('login.tampil');
    Route::post('/login/submit', [AuthController::class, 'submitLogin'])->name('login.submit');
});

Route::middleware('auth')->group(function () {
    //logout
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/dashboard', [DashboardController::class, 'tampilDashboard'])->name('tampil.dashboard');
    Route::get('/barang', [Barang::class, 'tampil'])->name('barang');
});


require __DIR__ . '/auth.php';
