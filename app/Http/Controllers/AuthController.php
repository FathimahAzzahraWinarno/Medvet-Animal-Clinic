<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class AuthController extends Controller
{
    public function generateUserId()
    {
        $lastUser = User::latest('id')->first();
        $nextId = $lastUser ? $lastUser->id + 1 : 1;
        return 'usr-' . $nextId;
    }

    public function daftar(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8',
        ]);

        try {
            User::create([
                'id' => $this->generateUserId(),
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'alamat' => '',
                'telepon' => '',
            ]);

            return redirect('/masuk-page')->with('success', 'Berhasil daftar! Silakan login.');
        } catch (\Exception $e) {
            return redirect('/daftar-page')->with('error', 'Gagal mendaftar. Coba lagi!')->withInput();
        }
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        $user = User::where('email', $request->email)->first();

        if ($user && Hash::check($request->password, $user->password)) {
            Auth::login($user); // ✅ Ini bener
            return redirect('/')->with('success-login', 'Selamat datang, ' . $user->name . '!');
        }

        return redirect()->back()->with('error-login', 'Email atau password salah.');
    }
}
