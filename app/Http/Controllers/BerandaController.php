<?php

namespace App\Http\Controllers;

use App\Models\Perawatan;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function index()
    {
        $perawatans = Perawatan::limit(3)->get();
        return view('beranda', [
            'perawatans' => $perawatans
        ]);
    }
}
