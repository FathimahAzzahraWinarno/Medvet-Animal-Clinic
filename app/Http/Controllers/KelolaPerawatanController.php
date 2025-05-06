<?php

namespace App\Http\Controllers;

use App\Models\Perawatan;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class KelolaPerawatanController extends Controller
{
    public function kelolaPerawatan()
    {
        $perawatans = Perawatan::orderBy('created_at', 'desc')->get(); // urut turun

        return view('admin.kelolaPerawatan', [
            'perawatans' => $perawatans,
            'title' => 'Daftar Perawatan',
            'active' => 'perawatan'
        ]);
    }

    public function deletePerawatan($id)
    {
        $perawatan = Perawatan::findOrfail($id);
        $perawatan->delete();

        return redirect()->back()->with('success', 'Perawatan berhasil dihapus.');
    }

    public function updatePerawatan(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'required|string', // sudah diperbaiki dari typo 'stirng'
            'slug' => 'required|string',
            'harga' => 'required|int',
            'is_diskon' => '',
            'diskon' => 'required|int',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,svg,png'
        ]);

        $perawatan = Perawatan::findOrFail($id);

        $perawatan->nama = $request->nama;
        $perawatan->deskripsi = $request->deskripsi;
        $perawatan->slug = Str::slug($request->slug, '-');
        $perawatan->harga = $request->harga;
        $perawatan->is_diskon = $request->has('is_diskon') ? 1 : 0;
        $perawatan->diskon = $request->diskon;

        if ($request->hasFile('gambar')) {
            $path = $request->file('gambar')->store('perawatan', 'public');
            $perawatan->gambar = "storage/$path";
        }

        $perawatan->save();

        return redirect()->back()->with('success', 'Perawatan berhasil diperbarui');
    }

    public function createPerawatan(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'slug' => 'required|string',
            'harga' => 'required|int',
            'is_diskon' => '',
            'diskon' => 'required|int',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,svg,png'
        ]);

        $validated['slug'] = Str::slug($validated['slug'], '-');

        $validated['id'] = Perawatan::generatePerawatanId();

        if ($request->hasFile('gambar')) {
            $path = $request->file('gambar')->store('perawatan', 'public'); // simpan di storage/app/public/perawatan
            $validated['gambar'] = "storage/$path"; // simpan path relatif di DB
        }

        $validated['is_diskon'] = $request->has('is_diskon') ? 1 : 0;

        Perawatan::create($validated);

        return redirect()->back()->with('success', 'Perawatan berhasil ditambahkan.');
    }
}
