<?php

namespace Database\Seeders;

use App\Models\Pengelola;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class PengelolaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Pengelola::create([
            'id' => 'A1',
            'email' => 'adminMedvet@example.com',
            'password' => Hash::make('password123'),
            'role' => 'admin',
        ]);

        Pengelola::create([
            'id' => 'D1',
            'email' => 'dokterMedvet@example.com',
            'password' => Hash::make('password'),
            'role' => 'dokter', // harus huruf kecil
        ]);
    }
}
