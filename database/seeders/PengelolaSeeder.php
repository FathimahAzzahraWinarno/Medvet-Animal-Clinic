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
            'id' => Pengelola::generateId(),
            'email' => 'adminMedvet@example.com',
            'password' => Hash::make('password123'),
            'role' => 'admin',
        ]);

        Pengelola::create([
            'id' => Pengelola::generateId(),
            'email' => 'doktermMdvet@example.com',
            'password' => Hash::make('password'),
            'role' => 'dokter', // harus huruf kecil
        ]);
    }
}
