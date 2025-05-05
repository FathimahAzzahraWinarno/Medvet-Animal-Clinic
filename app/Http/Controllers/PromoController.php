<?php

namespace App\Http\Controllers;

use App\Models\Promo;
use Illuminate\Http\Request;

class PromoController extends Controller
{
    public function index()
    {
        $promos = Promo::all();

        return view('promo', [
            'promos' => $promos,
            'title' => 'Daftar Promo',
            'active' => 'Promo'
        ]);
    }

    public function deletePromo($id)
    {
        $promo = Promo::findOrFail($id);
        $promo->delete();

        return redirect()->back()->with('success', 'Promo berhasil dihapus.');
    }


    public function createPromo(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'harga' => 'required|int',
            'diskon' => 'required|int',
        ]);

        $validated['id'] = Promo::generatePromoId();

        Promo::create($validated);

        return redirect()->back()->with('success', 'Promo berhasil ditambahkan.');
    }

    public function updatePromo(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'harga' => 'required|int',
            'diskon' => 'required|int',
        ]);

        $promo = Promo::findOrFail($id);
        $promo->nama = $request->nama;
        $promo->harga = $request->harga;
        $promo->diskon = $request->diskon;
        $promo->save();

        return redirect()->back()->with('success', 'Promo berhasil diperbarui');
    }
}
