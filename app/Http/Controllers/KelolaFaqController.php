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


    public function createFaq(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'detail' => 'required|string',
        ]);

        $validated['id'] = Faq::generateId();

        Faq::create($validated);

        return redirect()->back()->with('success', 'FAQ berhasil ditambahkan.');
    }

    public function deleteFaq($id)
    {
        $faq = Faq::findOrFail($id);
        $faq->delete();

        return redirect()->back()->with('success', 'FAQ berhasil dihapus.');
    }
}
