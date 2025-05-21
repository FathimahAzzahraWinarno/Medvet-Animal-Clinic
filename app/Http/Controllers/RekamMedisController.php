<?php

namespace App\Http\Controllers;

use App\Models\RekamMedis;
use App\Models\Reservasi;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Container\Attributes\Auth;

class RekamMedisController extends Controller
{
    public function index($id)
    {
        // Ambil reservasi dan hewan terkait
        $reservasi = Reservasi::with('hewan')->findOrFail($id);
        $hewan = $reservasi->hewan;

        // Ambil semua rekam medis berdasarkan nama, spesies, dan jenis kelamin hewan
        $rekam_medis = RekamMedis::whereHas('reservasi.hewan', function ($query) use ($hewan) {
            $query->where('nama', $hewan->nama)
                ->where('spesies', $hewan->spesies)
                ->where('jenis_kelamin', $hewan->jenis_kelamin);
        })->get();

        return view('dokter.inputRekamMedis', [
            'rekamMedis' => $rekam_medis,
            'reservasis' => [$reservasi],
            'title' => 'Daftar Rekam Medis',
            'active' => 'Rekam Medis'
        ]);
    }

    public function createRekamMedis(Request $request)
    {

        $validated = $request->validate([
            'tanggal' => 'required|date',
            'perawatan' => 'required|string',
            'detail' => 'required|string',
            'diagnosa' => 'required|string',
            'hasil_tes' => 'required|string',
            'tindakan' => 'required|string',
            'reservasi_id' => 'required|string',
            'pesan' => 'nullable|string',
        ]);

        $reservasi = Reservasi::with('dokter')->findOrFail($validated['reservasi_id']);


        $namaDokter = $reservasi->dokter->nama ?? 'Tidak Diketahui';

        $validated['id'] = RekamMedis::generateRMId();

        RekamMedis::create([
            'id' => $validated['id'],
            'id_pengelola' => null,
            'reservasi_id' => $validated['reservasi_id'],
            'tanggal' => $validated['tanggal'],
            'dokter' => $namaDokter,
            'perawatan' => $validated['perawatan'],
            'detail' => $validated['detail'],
            'diagnosa' => $validated['diagnosa'],
            'hasil_tes' => $validated['hasil_tes'],
            'tindakan' => $validated['tindakan'],
            'pesan' => $validated['pesan'],
        ]);

        return redirect()->back()->with('success', 'Rekam Medis berhasil ditambahkan.');
    }
}
