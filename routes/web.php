<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\KelolaFaqController;
use App\Http\Controllers\KelolaPerawatanController;
use App\Http\Controllers\KelolaPromoController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\PerawatanController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\PromoController;
use App\Http\Controllers\TentangKamiController;
use App\Models\Faq;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', [BerandaController::class, 'index']);

Route::get('/tentang_kami', [TentangKamiController::class, 'index']);

Route::get('/FAQ', [FaqController::class, 'index']);

Route::get('/perawatan', [PerawatanController::class, 'index']);

Route::get('/promo', [PromoController::class, 'index']);

Route::delete('/admin/kelola-promo/{id}', [PromoController::class, 'deletePromo'])->name('deletePromo');

Route::put('/admin/kelola-promo/{id}', [PromoController::class, 'updatePromo'])->name('updatePromo');

Route::post('/admin/kelola-promo', [PromoController::class, 'createPromo'])->name('createPromo');

Route::get('produk', [ProdukController::class, 'index']);

Route::get('kelola-produk', [ProdukController::class, 'kelolaProduk'])->name('kelolaProduk');

Route::delete('/admin/kelola-produk/{id}', [ProdukController::class, 'deleteProduk'])->name('deleteProduk');

Route::post('/admin/kelola-produk', [ProdukController::class, 'createProduk'])->name('createProduk');

Route::put('/admin/kelola-produk/{id}', [ProdukController::class, 'updateProduk'])->name('updateProduk');

Route::post('feedback', [FeedbackController::class, 'createFeedback'])->name('feedback');

Route::get('contact', function () {
    return view('contact');
});


Route::get('reservasi', function (Request $request) {
    $promo = $request->query('promo');
    $perawatan = $request->query('perawatan');
    return view('reservasi', [
        'promo' => $promo,
        'perawatan' => $perawatan
    ]);
});

Route::view('/masuk-page', 'masukPage')->name('login');

Route::post('/masuk-page', [AuthController::class, 'login'])->name('login');

Route::get('daftar-page', function () {
    return view('daftarPage');
});


Route::post('/daftar-page', [AuthController::class, 'daftar'])->name('daftar-page');

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

Route::get('feedback-pelanggan', [FeedbackController::class, 'index'])->name('feedback-pelanggan');

Route::get('pelanggan', [PelangganController::class, 'dataPelanggan'])->name('admin.pelanggan');


Route::get('kelola-perawatan', [KelolaPerawatanController::class, 'kelolaPerawatan']);

Route::post('/admin/kelola-perawatan', [KelolaPerawatanController::class, 'createPerawatan'])->name('createPerawatan');

Route::delete('/admin/kelola-perawatan/{id}', [KelolaPerawatanController::class, 'deletePerawatan'])->name('deletePerawatan');

Route::put('/admin/kelola-perawatan/{id}', [KelolaPerawatanController::class, 'updatePerawatan'])->name('updatePerawatan');

Route::get('kelola-FAQ', [KelolaFaqController::class, 'kelolaFaq']);

Route::delete('/admin/kelola-FAQ/{id}', [KelolaFaqController::class, 'deleteFaq'])->name('deleteFaq');

Route::post('/admin/kelola-FAQ', [KelolaFaqController::class, 'createFaq'])->name('faq.create');

Route::put('/admin/kelola-FAQ/{id}', [KelolaFaqController::class, 'updateFaq'])->name('updateFaq');


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
