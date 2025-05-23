<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use App\Models\Hewan;
use App\Models\Perawatan;
use App\Models\RekamMedis;
use App\Models\Reservasi;
use App\Models\User;
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
        try {
            $user = auth()->user();

            $validated = $request->validate([
                'id_promo' => 'nullable|string|exists:promos,id',
                'nama_peliharaan' => 'required|string',
                'jenis_kelamin' => 'required|in:Betina,Jantan',
                'spesies' => 'required|string',
                'nama_pemilik' => 'required|string',
                'nomor_telepon' => 'required|string',
                'email' => 'required|string|email',
                'alamat' => 'required|string',
                'perawatan' => 'required|in:vaksinasi,operasi-minor-mayor,cek-darah,cek-mikroskopis,rawat-inap,usg,pengobatan',
                'tanggal' => 'required|date',
                'waktu' => 'required|string',
                'dokter' => 'required|string',
                'pesan' => 'nullable|string',
            ]);

            $hewan = Hewan::create([
                'id' => uniqid('H'),
                'nama' => $validated['nama_peliharaan'],
                'spesies' => $validated['spesies'],
                'ras' => '-',
                'jenis_kelamin' => $validated['jenis_kelamin']
            ]);

            $perawatan = Perawatan::where('slug', $validated['perawatan'])->firstOrFail();

            $dokter = Dokter::where('nama', $validated['dokter'])->firstOrFail();

            $tanggalFormatted = Carbon::parse($validated['tanggal'])->format('Y-m-d');

            // Cek apakah jam yang dipilih sudah dipakai di tanggal itu
            $cekWaktu = Reservasi::where('tanggal', $tanggalFormatted)
                ->where('waktu', $validated['waktu'])
                ->exists();

            if ($cekWaktu) {
                return back()->with('error', 'Waktu tersebut sudah dipesan, silakan pilih waktu lain.');
            }

            Reservasi::create([
                'id' => Reservasi::generateReservasiId(),
                'id_hewan' => $hewan->id,
                'id_user' => $user->id,
                'id_perawatan' => $perawatan->id,
                'id_dokter' => $dokter->id,
                'id_promo' => $validated['id_promo'] ?? null,
                'tanggal' => $tanggalFormatted,
                'waktu' => $validated['waktu'],
                'pesan' => $validated['pesan'] ?? null
            ]);

            return redirect()->back()->with('success', 'Reservasi berhasil dibuat.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }
}
