<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use Illuminate\Http\Request;

class TentangKamiController extends Controller
{
    public function index()
    {
        $dokters = Dokter::all();

        return view('tentang_kami', [
            'dokters' => $dokters,
            'title' => 'Daftar Dokter',
            'active' => 'dokter'
        ]);
    }
}
