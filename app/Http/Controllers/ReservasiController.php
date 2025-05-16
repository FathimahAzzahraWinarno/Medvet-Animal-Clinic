<?php

namespace App\Http\Controllers;

use App\Models\RekamMedis;
use App\Models\Reservasi;
use Carbon\Carbon;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReservasiController extends Controller
{
    public function index()
    {
        $reservasi = Reservasi::all();

        return view('Reservasi', [
            'reservasi' => $reservasi,
            'title' => 'Daftar Reservasi',
            'active' => 'Reservasi'
        ]);
    }

    public function createReservasi(Request $request)
    {
        $validated = $request->validate([
            'nama_peliharaan' => 'required|string',
            'jenis_kelamin' => 'required|string',
            'spesies' => 'required|string',
            'nama_pemilik' => 'required|string',
            'nomor_telepon' => 'required|string',
            'email' => 'required|string',
            'alamat' => 'required|string',
            'perawatan' => 'required|in:vaksinasi,operasi-minor-mayor,cek-darah,cek-mikroskopis,rawat-inap,usg,pengobatan',
            'tanggal' => 'required|date',
            'waktu' => 'required|string',
            'dokter' => 'required|string',
            'pesan' => '',
        ]);

        $validated['id'] = Reservasi::generateReservasiId();

        Reservasi::create($validated);

        return redirect()->back()->with('success', 'Reservasi berhasil dibuat.');
    }
}
