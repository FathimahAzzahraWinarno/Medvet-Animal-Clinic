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

    public function createProduk(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'detail' => 'required|string',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,svg,png'
        ]);

        $validated['id'] = Produk::generateProdukId();

        if ($request->hasFile('gambar')) {
            $path = $request->file('gambar')->store('produk', 'public');
            $validated['gambar'] = "storage/$path";
        } else {
            $validated['gambar'] = null;
        }

        Produk::create($validated);

        return redirect()->back()->with('success', 'Produk berhasil ditambahkan.');
    }
}
