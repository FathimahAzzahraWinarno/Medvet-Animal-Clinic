<?php

use App\Http\Controllers\BerandaController;
use App\Http\Controllers\KelolaPerawatanController;
use App\Http\Controllers\KelolaPromoController;
use App\Http\Controllers\PerawatanController;
use App\Http\Controllers\PromoController;
use Illuminate\Support\Facades\Route;

Route::get('/', [BerandaController::class, 'index']);

Route::get('tentang_kami', function () {
    return view('tentang_kami');
});

Route::get('FAQ', function () {
    return view('FAQ');
});

Route::get('/perawatan', [PerawatanController::class, 'index']);

Route::get('/promo', [PromoController::class, 'index']);

Route::get('produk', function () {
    return view('produk');
});

Route::get('contact', function () {
    return view('contact');
});

Route::get('reservasi', function () {
    return view('reservasi');
});

Route::get('masuk-page', function () {
    return view('masukPage');
});

Route::get('daftar-page', function () {
    return view('daftarPage');
});

Route::get('rekam-medis', function () {
    return view('RekamMedis');
});

Route::get('profile', function () {
    return view('profile');
});

Route::get('riwayat-reservasi', function () {
    return view('riwayatReservasi');
});

Route::get('jadwal-reservasi', function () {
    return view('jadwalReservasi');
});

Route::get('dashboard', function () {
    return view('admin.dashboard');
});

Route::get('reservasi-dokter', function () {
    return view('admin.reservasiDokter');
});

Route::get('reservasi-riwayat', function () {
    return view('admin.reservasiRiwayat');
});

Route::get('feedback-pelanggan', function () {
    return view('admin.feedback');
});

Route::get('pelanggan', function () {
    return view('admin.pelanggan');
});


Route::get('kelola-perawatan', [KelolaPerawatanController::class, 'kelolaPerawatan']);

Route::get('kelola-FAQ', function () {
    return view('admin.kelolaFAQ');
});

Route::get('kelola-promo', [KelolaPromoController::class, 'kelolaPromo']);

Route::get('dashboard-dokter', function () {
    return view('dokter.dashboardDokter');
});

Route::get('jadwal-reservasi-dokter', function () {
    return view('dokter.jadwalReservasiDokter');
});

Route::get('input-rekam-medis', function () {
    return view('dokter.inputRekamMedis');
});
