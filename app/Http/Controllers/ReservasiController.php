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
    public function store(Request $request)
    {
        dd($request->all());
        // Mengambil inputan dari form
        $data = $request->validate([
            'id_hewan' => 'required',
            'id_user' => 'required',
            'id_perawatan' => 'required',
            'id_dokter' => 'required',
            'waktu' => 'required',
            'tanggal' => 'required',
            'pesan' => 'nullable',
        ]);


        // Menyimpan data ke dalam tabel 'reservasis' menggunakan query builder
        DB::table('reservasis')->insert([
            'id' => 1, // Berikan nilai manual untuk 'id'
            'id_hewan' => $data['id_hewan'],
            'id_user' => $data['id_user'],
            'id_perawatan' => $data['id_perawatan'],
            'id_dokter' => $data['id_dokter'],
            'waktu' => $data['waktu'],
            'tanggal' => $data['tanggal'],
            'pesan' => $data['pesan'],
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Redirect atau return untuk menampilkan hasil
        return redirect()->route('reservasi.index')->with('success', 'Reservasi berhasil dibuat!');
    }

    public function index()
    {
        $rekamMedis = RekamMedis::all();  // Ambil semua data dari tabel rekam medis
        return view('inputRekamMedis', compact('rekamMedis'));  // Kirim data ke view
    }
}
