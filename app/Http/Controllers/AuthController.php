<?php

namespace App\Http\Controllers;

use App\Models\Pengelola;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Redis;

class AuthController extends Controller
{

    public function daftar(Request $request)
    {
        $request->validate([
            'name' => ['required', 'regex:/^[a-zA-Z\s]+$/', 'max:255'],
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8',
        ], [
            'name.regex' => 'Nama hanya boleh mengandung huruf dan spasi.',
            'email.email' => 'Format email tidak valid.',
            'email.unique' => 'Email sudah digunakan.',
            'password.required' => 'Password wajib diisi.',
            'password.min' => 'Password minimal 8 karakter.',
        ]);

        $newUser = User::create([
            'id' => User::generateUserId(),
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'alamat' => '',
            'telepon' => '',
            'tanggal_akun' => Carbon::now()->toDateString(),
        ]);

        if (!$newUser) {
            return redirect('/daftar-page')->with('error', 'Gagal mendaftar. Coba lagi!')->withInput();
        }
        return redirect('/masuk-page')->with('success', 'Berhasil daftar! Silakan login.');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        $user = User::where('email', $request->email)->first();
        if (!$user) {
            $user = Pengelola::where('email', $request->email)->first();
        }

        if (!$user && !Hash::check($request->password, $user->password)) {
            return redirect()->back()->with('error-login', 'Email atau password salah.');
        }

        Auth::login($user); // ✅ Ini bener

        if ($user->role == 'dokter') {
            $route = '/dashboard-dokter';
        } elseif ($user->role == 'admin') {
            $route = '/dashboard';
        } else {
            $route = '/';
        }

        return redirect($route)->with('success-login', 'Selamat datang, ' . $user->name . '!');
    }


    public function showProfile()
    {
        $user = Auth::user();
        return view('profile', compact('user'));
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/masuk-page');
    }

    public function updateProfile(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|string|email',
            'telepon' => 'required',
            'alamat' => 'required|string',
        ]);

        /** @var \App\Models\User $user */
        $user = Auth::user(); // Ambil user yang sedang login

        $user->name = $request->nama;
        $user->email = $request->email;
        $user->telepon = $request->telepon;
        $user->alamat = $request->alamat;
        $user->save();

        return redirect()->back()->with('success', 'Profil berhasil diperbarui');
    }
}
