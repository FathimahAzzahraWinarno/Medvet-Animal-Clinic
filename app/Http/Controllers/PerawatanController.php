<?php

namespace App\Http\Controllers;

use App\Models\Perawatan;
use Illuminate\Http\Request;

class PerawatanController extends Controller
{
    public function index()
    {
        $perawatans = Perawatan::orderBy('created_at', 'desc')->get(); // urut turun

        return view('perawatan', [
            'perawatans' => $perawatans,
            'title' => 'Daftar Perawatan',
            'active' => 'perawatan'
        ]);
    }
}
