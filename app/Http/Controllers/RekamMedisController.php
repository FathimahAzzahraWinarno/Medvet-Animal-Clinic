<?php

namespace App\Http\Controllers;

use App\Models\RekamMedis;
use App\Models\Reservasi;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class RekamMedisController extends Controller
{
    public function index()
    {
        $rekam_medis = RekamMedis::all();
        $user = auth()->user(); // ini masih ngambil users bukan pengelola
        $user_id = $user->id;
        $reservasis = Reservasi::where('id_user', $user_id)
        ->whereDoesntHave('rekamMedis')
        ->get();

        return view('dokter.inputRekamMedis', [
            'rekamMedis' => $rekam_medis,
            'reservasis' => $reservasis,
            'title' => 'Daftar Rekam Medis',
            'active' => 'Rekam Medis'
        ]);
    }

    public function createRekamMedis(Request $request)
    {

        $validated = $request->validate([
            'tanggal' => 'required|date',
            'dokter' => 'required|string',
            'perawatan' => 'required|string',
            'detail' => 'required|string',
            'diagnosa' => 'required|string',
            'hasil_tes' => 'required|string',
            'tindakan' => 'required|string',
            'pesan' => 'required|string',
            'reservasi_id' => 'required|string',
            'id_pengelola' => '',
        ]);

        $validated['id'] = RekamMedis::generateRMId();

        RekamMedis::create([
            'id' => $validated['id'],
            'id_pengelola' => 'D1',
            'reservasi_id' => $validated['reservasi_id'],
            'tanggal' => $validated['tanggal'],
            'dokter' => $validated['dokter'],
            'perawatan' => $validated['perawatan'],
            'detail' => $validated['detail'],
            'diagnosa' => $validated['diagnosa'],
            'hasil_tes' => $validated['hasil_tes'],
            'tindakan' => $validated['tindakan'],
            'pesan' => $validated['pesan'],
        ]);

        return redirect()->back()->with('success', 'Rekam Medis berhasil ditambahkan.');
    }

    public function indexUser()
    {
        $user = auth()->user();
        $user_id = $user->id;

        $reservasis = Reservasi::where('id_user', $user_id)
            ->with('hewan')
            ->get();


        $rekamMedis = RekamMedis::whereHas('reservasi', function ($query) use ($user_id) {
            $query->where('id_user', $user_id);
        })->with(['reservasi.hewan', 'reservasi.dokter'])
        ->get();

        return view('rekamMedis', [
            'reservasis' => $reservasis,
            'rekamMedis' => $rekamMedis,
            'title' => 'Daftar Rekam Medis',
            'active' => 'Rekam Medis'
        ]);
    }
}
