<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

//default route
// Route::get('/dashboard', function () {
//     return view('dashboard');
// });
//registrasi & login route
Route::get('/registrasi', [AuthController::class, 'tampilRegistrasi'])->name('registrasi.tampil');
Route::post('/registrasi/submit', [AuthController::class, 'submitRegistrasi'])->name('registrasi.submit');

Route::get('/login', [AuthController::class, 'tampilLogin'])->name('login.tampil');
Route::post('/login/submit', [AuthController::class, 'submitLogin'])->name('login.submit');

//route dashboard
Route::get('/dashboard', [DashboardController::class, 'tampilDashboard'])->name('tampil.dashboard');
