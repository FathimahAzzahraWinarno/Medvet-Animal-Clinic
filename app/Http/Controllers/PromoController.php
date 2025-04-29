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
}
