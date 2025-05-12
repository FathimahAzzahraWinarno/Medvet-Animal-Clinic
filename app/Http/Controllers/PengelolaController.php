<?php

namespace App\Http\Controllers;

use App\Models\Pengelola;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PengelolaController extends Controller
{
    public function index()
    {
        $totalPelanggan = DB::table('users')
            ->count();

        return view('admin.dashboard', compact('totalPelanggan'));
    }
}
