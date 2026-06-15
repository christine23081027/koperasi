<?php

use App\Http\Controllers\AngsuranController;
use App\Http\Controllers\PinjamanController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\SimpananController;

// Rute Dashboard Utama
Route::get('/', [DashboardController::class, 'index']);
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// Rute CRUD Resource
Route::resource('anggota', AnggotaController::class);
Route::resource('simpanan', SimpananController::class);
Route::resource('pinjaman', PinjamanController::class);
Route::resource('angsuran', AngsuranController::class);