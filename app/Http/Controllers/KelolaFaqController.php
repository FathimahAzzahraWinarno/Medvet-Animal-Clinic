<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;

class KelolaFaqController extends Controller
{
    public function kelolaFaq()
    {
        $faqs = Faq::all();

        return view('admin.kelolaFaq', [
            'faqs' => $faqs,
            'title' => 'Daftar Faq',
            'active' => 'faq'
        ]);
    }
}
