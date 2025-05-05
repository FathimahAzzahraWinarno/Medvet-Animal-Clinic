<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
    {
        $produks = Produk::all();
        return view('produk', [
            'produks' => $produks,
            'title' => 'Daftar Produk',
            'active' => 'Promo'
        ]);
    }
}
