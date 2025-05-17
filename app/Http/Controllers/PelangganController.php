<?php

namespace App\Http\Controllers;

use App\Models\Reservasi;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    public function dataPelanggan()
    {
        $users = User::all();
        return view('admin.pelanggan', compact('users'));
    }

    public function reservasiDokter()
    {
        // Ambil tanggal hari ini
        $today = Carbon::today();

        // Ambil semua reservasi yang tanggalnya adalah hari ini
        $reservasis = Reservasi::with(['user']) // jika perlu juga dengan dokter atau hewan
            ->whereDate('tanggal', $today)
            ->get();

        return view('admin.reservasiDokter', compact('reservasis'));
    }

    public function reservasiUser()
    {
        // Ambil tanggal hari ini
        $today = Carbon::today();

        // Ambil semua reservasi yang tanggalnya adalah hari ini
        $reservasis = Reservasi::with(['user', 'hewan', 'dokter', 'perawatan']) // jika perlu juga dengan dokter atau hewan
            ->whereDate('tanggal', $today)
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
        $today = Carbon::today();

        // Ambil semua reservasi yang tanggalnya adalah hari ini
        $reservasis = Reservasi::with(['user']) // jika perlu juga dengan dokter atau hewan
            ->whereDate('tanggal', $today)
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
}
