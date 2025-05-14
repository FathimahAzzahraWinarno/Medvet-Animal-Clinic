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
}
