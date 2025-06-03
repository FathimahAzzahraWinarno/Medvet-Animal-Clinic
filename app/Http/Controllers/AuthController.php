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

        $credentials = $request->only('email', 'password');

        // Cek apakah email ini milik pengelola (admin/dokter)
        $pengelola = \App\Models\Pengelola::where('email', $credentials['email'])->first();

        if ($pengelola) {
            // Coba login sebagai pengelola
            if (Auth::guard('pengelola')->attempt($credentials)) {
                $user = Auth::guard('pengelola')->user();

                if ($user->role === 'admin') {
                    return redirect()->intended('dashboard')->with('success-login', 'Selamat datang Admin!');
                } elseif ($user->role === 'dokter') {
                    return redirect()->intended('dashboard-dokter')->with('success-login', 'Selamat datang Dokter!');
                }

                // Jika role tidak dikenali
                Auth::guard('pengelola')->logout();
                return redirect()->back()->with('error-login', 'Role tidak dikenali.');
            }

            return redirect()->back()->with('error-login', 'Email atau password salah untuk pengelola.');
        }

        // Kalau bukan pengelola, login sebagai user biasa
        if (Auth::guard('web')->attempt($credentials)) {
            return redirect()->intended('/')->with('success-login', 'Selamat datang!');
        }

        // Semua gagal
        return redirect()->back()->with('error-login', 'Email atau password salah.');
    }


    public function index()
    {
        return view('dokter.dashboardDokter');
    }



    public function showProfile()
    {
        $user = Auth::user();
        return view('profile', compact('user'));
    }

    public function logout(Request $request)
    {
        if (Auth::guard('pengelola')->check()) {
            Auth::guard('pengelola')->logout();
        } elseif (Auth::guard('web')->check()) {
            Auth::guard('web')->logout();
        }

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/masuk-page')->with('success', 'Berhasil logout');
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
