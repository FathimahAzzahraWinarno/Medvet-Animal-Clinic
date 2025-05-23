<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\KelolaFaqController;
use App\Http\Controllers\KelolaPerawatanController;
use App\Http\Controllers\KelolaPromoController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\PengelolaController;
use App\Http\Controllers\PerawatanController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\PromoController;
use App\Http\Controllers\RekamMedisController;
use App\Http\Controllers\ReservasiController;
use App\Http\Controllers\TentangKamiController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Middleware\DokterMiddleware;
use App\Models\Faq;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::view('/masuk-page', 'masukPage')->name('login');

// Route::post('/masuk-page', [AuthController::class, 'login'])->name('login');

// Route::get('daftar-page', function () {
//     return view('daftarPage');
// });

// Route::get('/', [BerandaController::class, 'index']);

// Route::post('feedback', [FeedbackController::class, 'createFeedback'])->name('feedback');

// Route::get('contact', function () {
//     return view('contact');
// });


// Route::get('reservasi', function (Request $request) {
//     $promo = $request->query('promo');
//     $perawatan = $request->query('perawatan');
//     return view('reservasi', [
//         'promo' => $promo,
//         'perawatan' => $perawatan
//     ]);
// });

// Route::post('/reservasi', [ReservasiController::class, 'createReservasi'])->name('reservasi.store');

// Route::post('/daftar-page', [AuthController::class, 'daftar'])->name('daftar-page');

// Route::get('/rekam-medis', [RekamMedisController::class, 'indexUser'])->name('rekamMedis');

// Route::middleware(['auth'])->group(function () {
//     Route::get('profile', [AuthController::class, 'showProfile'])->name('user.profile');
// });

// Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Route::put('/profile/update/{id}', [AuthController::class, 'updateProfile'])->name('update.profile');

// Route::get('riwayat-reservasi', [PelangganController::class, 'riwayatReservasi'])->name('riwayatReservasi');

// Route::get('/tentang_kami', [TentangKamiController::class, 'index']);

// Route::get('/FAQ', [FaqController::class, 'index']);

// Route::get('/perawatan', [PerawatanController::class, 'index']);

// Route::get('/promo', [PromoController::class, 'index']);

// Route::delete('/admin/kelola-promo/{id}', [PromoController::class, 'deletePromo'])->name('deletePromo');

// Route::put('/admin/kelola-promo/{id}', [PromoController::class, 'updatePromo'])->name('updatePromo');

// Route::post('/admin/kelola-promo', [PromoController::class, 'createPromo'])->name('createPromo');

// Route::get('produk', [ProdukController::class, 'index']);

// Route::get('kelola-produk', [ProdukController::class, 'kelolaProduk'])->name('kelolaProduk');

// Route::delete('/admin/kelola-produk/{id}', [ProdukController::class, 'deleteProduk'])->name('deleteProduk');

// Route::post('/admin/kelola-produk', [ProdukController::class, 'createProduk'])->name('createProduk');

// Route::put('/admin/kelola-produk/{id}', [ProdukController::class, 'updateProduk'])->name('updateProduk');

// Route::get('jadwal-reservasi', [PelangganController::class, 'reservasiUser'])->name('jadwalReservasi');

// Route::get('dashboard', [PelangganController::class, 'dashboard'])->name('admin.dashboard');

// Route::get('reservasi-dokter', [PelangganController::class, 'reservasiDokter'])->name('reservasi.dokter');

// Route::get('reservasi-riwayat', [PelangganController::class, 'reservasiRiwayat'])->name('reservasiRiwayat');

// Route::get('feedback-pelanggan', [FeedbackController::class, 'index'])->name('feedback-pelanggan');

// Route::get('pelanggan', [PelangganController::class, 'dataPelanggan'])->name('admin.pelanggan');

// Route::get('kelola-perawatan', [KelolaPerawatanController::class, 'kelolaPerawatan']);

// Route::post('/admin/kelola-perawatan', [KelolaPerawatanController::class, 'createPerawatan'])->name('createPerawatan');

// Route::delete('/admin/kelola-perawatan/{id}', [KelolaPerawatanController::class, 'deletePerawatan'])->name('deletePerawatan');

// Route::put('/admin/kelola-perawatan/{id}', [KelolaPerawatanController::class, 'updatePerawatan'])->name('updatePerawatan');

// Route::get('kelola-FAQ', [KelolaFaqController::class, 'kelolaFaq']);

// Route::delete('/admin/kelola-FAQ/{id}', [KelolaFaqController::class, 'deleteFaq'])->name('deleteFaq');

// Route::post('/admin/kelola-FAQ', [KelolaFaqController::class, 'createFaq'])->name('faq.create');

// Route::put('/admin/kelola-FAQ/{id}', [KelolaFaqController::class, 'updateFaq'])->name('updateFaq');

// Route::get('kelola-promo', [KelolaPromoController::class, 'kelolaPromo']);


// === ROUTE PUBLIK (BISA DI AKSES TANPA LOGIN) ===
Route::get('/', [BerandaController::class, 'index']);
Route::get('/tentang_kami', [TentangKamiController::class, 'index']);
Route::get('/FAQ', [FaqController::class, 'index']);
Route::get('/perawatan', [PerawatanController::class, 'index']);
Route::get('/promo', [PromoController::class, 'index']);
Route::get('produk', [ProdukController::class, 'index']);

Route::get('contact', function () {
    return view('contact');
});

Route::get('blog', function () {
    return view('blog');
});

Route::get('reservasi', function (Request $request) {
    $promo = $request->query('promo');
    $perawatan = $request->query('perawatan');
    return view('reservasi', [
        'promo' => $promo,
        'perawatan' => $perawatan
    ]);
});

// Feedback tanpa login
Route::post('feedback', [FeedbackController::class, 'createFeedback'])->name('feedback');

// === ROUTE AUTHENTICATION (Login/Register/Logout) ===
Route::view('/masuk-page', 'masukPage')->name('login');
Route::post('/masuk-page', [AuthController::class, 'login'])->name('login');
Route::get('/daftar-page', function () {
    return view('daftarPage');
});
Route::post('/daftar-page', [AuthController::class, 'daftar'])->name('daftar-page');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// === ROUTE USER (HARUS LOGIN) ===
Route::middleware(['auth'])->group(function () {
    Route::get('profile', [AuthController::class, 'showProfile'])->name('user.profile');
    Route::put('/profile/update/{id}', [AuthController::class, 'updateProfile'])->name('update.profile');

    Route::get('riwayat-reservasi', [PelangganController::class, 'riwayatReservasi'])->name('riwayatReservasi');
    Route::get('jadwal-reservasi', [PelangganController::class, 'reservasiUser'])->name('jadwalReservasi');

    Route::get('/rekam-medis', [RekamMedisController::class, 'indexUser'])->name('rekamMedis');

    Route::post('/reservasi', [ReservasiController::class, 'createReservasi'])->name('reservasi.store');
});

// === ROUTE ADMIN / PENGELOLA (HARUS LOGIN + ROLE ADMIN) ===
Route::middleware(['auth:pengelola', AdminMiddleware::class])->group(function () {

    Route::get('dashboard', [PelangganController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('reservasi-dokter', [PelangganController::class, 'reservasiDokter'])->name('reservasi.dokter');
    Route::post('reservasi-dokter/kirim-email/{id}', [PelangganController::class, 'kirimEmail'])->name('reservasi.dokter.kirimEmail');
    Route::get('reservasi-riwayat', [PelangganController::class, 'reservasiRiwayat'])->name('reservasiRiwayat');

    // Produk
    Route::get('kelola-produk', [ProdukController::class, 'kelolaProduk'])->name('kelolaProduk');
    Route::post('/admin/kelola-produk', [ProdukController::class, 'createProduk'])->name('createProduk');
    Route::put('/admin/kelola-produk/{id}', [ProdukController::class, 'updateProduk'])->name('updateProduk');
    Route::delete('/admin/kelola-produk/{id}', [ProdukController::class, 'deleteProduk'])->name('deleteProduk');

    // Promo
    Route::get('kelola-promo', [KelolaPromoController::class, 'kelolaPromo']);
    Route::post('/admin/kelola-promo', [PromoController::class, 'createPromo'])->name('createPromo');
    Route::put('/admin/kelola-promo/{id}', [PromoController::class, 'updatePromo'])->name('updatePromo');
    Route::delete('/admin/kelola-promo/{id}', [PromoController::class, 'deletePromo'])->name('deletePromo');

    // Perawatan
    Route::get('kelola-perawatan', [KelolaPerawatanController::class, 'kelolaPerawatan']);
    Route::post('/admin/kelola-perawatan', [KelolaPerawatanController::class, 'createPerawatan'])->name('createPerawatan');
    Route::put('/admin/kelola-perawatan/{id}', [KelolaPerawatanController::class, 'updatePerawatan'])->name('updatePerawatan');
    Route::delete('/admin/kelola-perawatan/{id}', [KelolaPerawatanController::class, 'deletePerawatan'])->name('deletePerawatan');

    // FAQ
    Route::get('kelola-FAQ', [KelolaFaqController::class, 'kelolaFaq']);
    Route::post('/admin/kelola-FAQ', [KelolaFaqController::class, 'createFaq'])->name('faq.create');
    Route::put('/admin/kelola-FAQ/{id}', [KelolaFaqController::class, 'updateFaq'])->name('updateFaq');
    Route::delete('/admin/kelola-FAQ/{id}', [KelolaFaqController::class, 'deleteFaq'])->name('deleteFaq');

    // Pelanggan
    Route::get('pelanggan', [PelangganController::class, 'dataPelanggan'])->name('admin.pelanggan');

    // Feedback admin view
    Route::get('feedback-pelanggan', [FeedbackController::class, 'index'])->name('feedback-pelanggan');
});

Route::middleware(['auth:pengelola', DokterMiddleware::class])->group(function () {
    Route::get('dashboard-dokter', [PelangganController::class, 'dashboardDokter'])->name('dokter.dashboardDokter');
    Route::get('jadwal-reservasi-dokter', [PelangganController::class, 'jadwalReservasiDokter'])->name('jadwalReservasiDokter');
    Route::get('input-rekam-medis/{id}', [RekamMedisController::class, 'index'])->name('dokter.inputRekamMedis');
    Route::post('input-rekam-medis/{id}', [RekamMedisController::class, 'createRekamMedis'])->name('dokter.inputRekamMedis.create');
    Route::post('/dokter/input-rekam-medis', [RekamMedisController::class, 'createRekamMedis'])->name('createRekamMedis');
    Route::get('riwayat-reservasi-dokter', [PelangganController::class, 'reservasiRiwayatDokter'])->name('reservasiRiwayatDokter');
});
