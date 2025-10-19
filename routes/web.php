<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

// =======================
// LOGIN / LOGOUT
// =======================
Route::get('/', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

// =======================
// DASHBOARD
// =======================
Route::get('/admin/dashboard', [AuthController::class, 'dashboardAdmin'])->name('dashboard.admin');
Route::get('/pengunjung/dashboard', [AuthController::class, 'dashboardPengunjung'])->name('dashboard.pengunjung');

// =======================
// MENU ADMIN
// =======================
Route::get('/admin/kelola-buku', [AuthController::class, 'kelolaBuku'])->name('kelola.buku');
Route::get('/admin/kelola-anggota', [AuthController::class, 'kelolaAnggota'])->name('kelola.anggota');
Route::get('/admin/kelola-laporan', [AuthController::class, 'kelolaLaporan'])->name('kelola.laporan');
Route::get('/admin/history', [AuthController::class, 'history'])->name('history');

