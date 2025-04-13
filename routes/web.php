<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('beranda');
});

Route::get('tentang_kami', function () {
    return view('tentang_kami');
});

Route::get('FAQ', function () {
    return view('FAQ');
});

Route::get('perawatan', function () {
    return view('perawatan');
});

Route::get('promo', function () {
    return view('promo');
});

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
