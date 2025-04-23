<?php

namespace App\Http\Controllers;

use App\Models\Perawatan;
use Illuminate\Http\Request;

class KelolaPerawatanController extends Controller
{
    public function kelolaPerawatan()
    {
        $perawatans = Perawatan::all();

        return view('admin.kelolaPerawatan', [
            'perawatans' => $perawatans,
            'title' => 'Daftar Perawatan',
            'active' => 'perawatan'
        ]);
    }
}
