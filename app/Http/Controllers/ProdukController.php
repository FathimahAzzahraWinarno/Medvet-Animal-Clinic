<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function keloaProduk()
    {
        $produks = Produk::all();
        return view('admin.kelolaProduk', [
            'produks' => $produks,
            'title' => 'Daftar Produk',
            'active' => 'produk'
        ]);
    }

    public function index()
    {
        $produks = Produk::all();
        return view('produk', [
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

    public function updateProduk(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'detail' => 'required|string|max:1000',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,svg,png'
        ]);

        $produk = Produk::findOrFail($id);
        $produk->nama = $request->nama;
        $produk->detail = $request->detail;
        if ($request->hasFile('gambar')) {
            $path = $request->file('gambar')->store('produk', 'public');
            $produk->gambar = "storage/$path";
        }
        $produk->save();

        return redirect()->back()->with('success', 'Produk berhasil diperbarui');
    }
}
