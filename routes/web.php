<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;


// HALAMAN AWAL
Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('/daftar', [PageController::class, 'daftar'])->name('daftar');
Route::get('/masuk', [PageController::class, 'masuk'])->name('masuk');

//BUTTON DAFTAR
Route::get('/daftar', function () {
    return view('daftar');
})->name('daftar');
Route::post('/daftar', [UserController::class, 'store'])->name('daftar');



// Halaman login
Route::get('/masuk', [AuthController::class, 'masukForm'])->name('masuk');
Route::post('/masuk', [AuthController::class, 'masuk']);

// Halaman daftar
Route::get('/daftar', [AuthController::class, 'daftarForm'])->name('daftar');
Route::post('/daftar', [AuthController::class, 'daftar']);

// Logout
Route::post('/keluar', [AuthController::class, 'keluar'])->name('keluar');
