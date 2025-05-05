<?php

namespace App\Http\Controllers;

use App\Models\Promo;
use Illuminate\Http\Request;

class KelolaPromoController extends Controller
{
    public function KelolaPromo()
    {
        $promos = Promo::all();

        return view('admin.kelolaPromo', [
            'promos' => $promos,
            'title' => 'Daftar Promo',
            'active' => 'Promo'
        ]);
    }
}
