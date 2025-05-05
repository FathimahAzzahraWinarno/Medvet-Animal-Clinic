<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
    {
        $produks = Produk::all();
        return view('admin.kelolaProduk', [
            'produks' => $produks,
            'title' => 'Daftar Produk',
            'active' => 'produk'
        ]);
    }

    public function deleteProduk($id)
    {
        $produk = Produk::findOrFail($id);
        $produk->delete();

        return redirect()->back()->with('success', 'Produk berhasil dihapus.');
    }
}
