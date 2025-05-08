<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    public function dataPelanggan()
    {
        $users = User::all();
        return view('admin.pelanggan', compact('users'));
    }
}
