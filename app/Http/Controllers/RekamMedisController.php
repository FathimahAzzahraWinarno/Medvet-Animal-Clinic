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
        $reservasi = Reservasi::with('hewan')->findOrFail($id);
        $hewan = $reservasi->hewan;

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

    public function indexUser(Request $request)
    {
        $user_id = auth()->id();

        $reservasis = Reservasi::where('id_user', $user_id)
            ->with('hewan')
            ->get();

        $rekamMedis = RekamMedis::where('id_user', $user_id)
            ->with(['reservasi.hewan', 'reservasi.dokter'])
            ->get();

        $rekamMedisQuery = RekamMedis::where('id_user', $user_id);

        $namaHewanUnik = RekamMedis::where('id_user', $user_id)
            ->select('nama_hewan')
            ->distinct()
            ->pluck('nama_hewan');

        if ($request->filled('nama_hewan') && $request->nama_hewan !== 'semua') {
            $rekamMedisQuery->where('nama_hewan', $request->nama_hewan);
        }

        $selectedHewan = $request->nama_hewan;

        return view('rekamMedis', [
            'reservasis' => $reservasis,
            'rekamMedis' => $rekamMedisQuery->get(),
            'namaHewanUnik' => $namaHewanUnik,
            'selectedHewan' => $selectedHewan,
            'title' => 'Daftar Rekam Medis',
            'active' => 'Rekam Medis'
        ]);
    }

    public function createRekamMedis(Request $request)
    {

        $validated = $request->validate([
            'tanggal' => 'required|date',
            'nama_hewan' => 'required|string',
            'perawatan' => 'required|string',
            'detail' => 'required|string',
            'diagnosa' => 'required|string',
            'hasil_tes' => 'required|string',
            'tindakan' => 'required|string',
            'reservasi_id' => 'required|string',
            'pesan' => 'nullable|string',
            'catatan' => 'nullable|string',
            'id_user' => 'required|string',
        ]);

        $reservasi = Reservasi::with('dokter')->findOrFail($validated['reservasi_id']);


        $namaDokter = $reservasi->dokter->nama ?? 'Tidak Diketahui';

        $validated['id'] = RekamMedis::generateRMId();

        RekamMedis::create([
            'id' => $validated['id'],
            'id_user' => $validated['id_user'],
            'id_pengelola' => null,
            'reservasi_id' => $validated['reservasi_id'],
            'nama_hewan' => $validated['nama_hewan'],
            'tanggal' => $validated['tanggal'],
            'dokter' => $namaDokter,
            'perawatan' => $validated['perawatan'],
            'detail' => $validated['detail'],
            'diagnosa' => $validated['diagnosa'],
            'hasil_tes' => $validated['hasil_tes'],
            'tindakan' => $validated['tindakan'],
            'pesan' => $validated['pesan'],
            'catatan' => $validated['catatan'],
        ]);

        return redirect()->back()->with('success', 'Rekam Medis berhasil ditambahkan.');
    }
}
