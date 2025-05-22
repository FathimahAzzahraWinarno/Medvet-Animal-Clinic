<?php

namespace App\Http\Controllers;

use App\Models\Reservasi;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ReservasiNotification;

class PelangganController extends Controller
{
    public function dataPelanggan()
    {
        $users = User::all();
        return view('admin.pelanggan', compact('users'));
    }

    public function reservasiDokter()
    {
        $today = Carbon::today()->toDateString();

        $reservasis = Reservasi::with(['user', 'hewan', 'dokter', 'perawatan'])
            ->whereDate('tanggal', '>=', $today)
            ->get();

        return view('admin.reservasiDokter', compact('reservasis'));
    }

    public function kirimEmail($id)
    {
        $reservasi = Reservasi::with(['user', 'hewan', 'perawatan'])->findOrFail($id);

        if (!$reservasi->user || !$reservasi->user->email) {
            return back()->with('error', 'Email pengguna tidak ditemukan.');
        }

        try {
            Mail::to($reservasi->user->email)->send(new ReservasiNotification($reservasi));

            return back()->with('success', 'Email berhasil dikirim ke ' . $reservasi->user->email);
        } catch (\Exception $e) {
            return back()->with('error', 'Gagal mengirim email: ' . $e->getMessage());
        }
    }

    public function reservasiUser()
    {
        $today = Carbon::today()->toDateString();

        $reservasis = Reservasi::with(['user', 'hewan', 'dokter', 'perawatan'])
            ->whereDate('tanggal', '>=', $today)
            ->get();

        return view('jadwalReservasi', compact('reservasis'));
    }

    public function riwayatReservasi()
    {
        $today = Carbon::today();

        // Ambil semua reservasi yang tanggalnya sebelum hari ini
        $reservasis = Reservasi::with(['user', 'hewan'])
            ->whereDate('tanggal', '<', $today)
            ->get();

        return view('riwayatReservasi', compact('reservasis'));
    }

    public function reservasiRiwayat()
    {
        $today = Carbon::today();

        // Ambil semua reservasi yang tanggalnya sebelum hari ini
        $reservasis = Reservasi::with(['user', 'hewan'])
            ->whereDate('tanggal', '<', $today)
            ->get();

        return view('admin.reservasiRiwayat', compact('reservasis'));
    }

    public function jadwalReservasiDokter()
    {
        // Ambil tanggal hari ini
        $today = Carbon::today()->toDateString();

        // Ambil semua reservasi yang tanggalnya adalah hari ini
        $reservasis = Reservasi::with(['user']) // jika perlu juga dengan dokter atau hewan
            ->whereDate('tanggal', $today)
            ->get();

        $reservasis = Reservasi::with(['user', 'hewan', 'dokter', 'perawatan']) // jika perlu juga dengan dokter atau hewan
            ->get();

        return view('dokter.jadwalReservasiDokter', compact('reservasis'));
    } 

    public function dashboard()
    {
        $today = Carbon::today();

        $reservasis = Reservasi::with('user')
            ->whereDate('tanggal', $today)
            ->limit(3)
            ->get();

        return view('admin.dashboard', compact('reservasis'));
    }

    public function dashboardDokter()
    {
        $today = Carbon::today();

        $reservasis = Reservasi::with('user')
            ->whereDate('tanggal', $today)
            ->limit(3)
            ->get();

        return view('dokter.dashboardDokter', compact('reservasis'));
    }

    public function filterReservasi(Request $request)
    {
        $sort = $request->query('sort', 'desc'); // default terbaru
        $users = User::orderBy('created_at', $sort)->get();

        return view('reservasiRiwayat', compact('users'));
    }
}
