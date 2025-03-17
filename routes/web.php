<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

// default route
// Route::get('/', function () {
//     return view('dashboard');
// });
//registrasi & login route
Route::get('/registrasi', [AuthController::class, 'tampilRegistrasi'])->name('registrasi.tampil');
