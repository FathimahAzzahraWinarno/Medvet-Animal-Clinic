<?php

namespace App\Http\Controllers;

use App\Models\RekamMedis;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class RekamMedisController extends Controller
{
    public function index()
    {
        $rekam_medis = RekamMedis::all();

        return view('dokter.inputRekamMedis', [
            'rekamMedis' => $rekam_medis,
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
            'id_pengelola' => '',
        ]);

        $validated['id'] = RekamMedis::generateRMId();

        RekamMedis::create($validated);

        return redirect()->back()->with('success', 'Rekam Medis berhasil ditambahkan.');
    }
}
