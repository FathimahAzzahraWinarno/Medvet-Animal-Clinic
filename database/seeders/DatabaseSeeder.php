<?php

namespace Database\Seeders;

use App\Models\Perawatan;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        Perawatan::create([
            'id' => 'P1',
            'nama' => 'Vaksinasi',
            'deskripsi' => 'Perawatan vaksinasi untuk mencegah penyakit menular dan menjaga daya
                            daya tahan tubuh hewan peliharaan agar tetap sehat dan terlindungi.',
            'harga' => 150000,
            'diskon' => 10,
            'is_diskon' => false,
            'gambar' => 'images/vaksinasi.svg'

        ]);

        Perawatan::create([
            'id' => 'P2',
            'nama' => 'Operasi Minor & Mayor',
            'deskripsi' => 'Operasi Minor: Bedah ringan tanpa rawat inap, seperti penanganan luka kecil.
                            Operasi Mayor: Bedah kompleks dengan rawat inap, seperti operasi organ dalam.',
            'harga' => 600000,
            'diskon' => 10,
            'is_diskon' => false,
            'gambar' => 'images/operasi.svg'
        ]);

        Perawatan::create([
            'id' => 'P3',
            'nama' => 'Pengobatan',
            'deskripsi' => 'Layanan medis untuk mendiagnosis dan mengobati berbagai keluhan, kesehatan,
                            dari pemeriksaan ringan hingga terapi lanjutan, oleh tenaga profesional.',
            'harga' => 300000,
            'diskon' => 10,
            'is_diskon' => false,
            'gambar' => 'images/pengobatan.svg'
        ]);

        Perawatan::create([
            'id' => 'P4',
            'nama' => 'Cek Darah',
            'deskripsi' => 'Cek darah adalah tes untuk memeriksa kesehatan dengan menganalisis sampel darah,
                            guna mendeteksi kondisi medis seperti infeksi, anemia, atau gangguan organ.',
            'harga' => 150000,
            'diskon' => 10,
            'is_diskon' => false,
            'gambar' => 'images/cekDarah.svg'
        ]);

        Perawatan::create([
            'id' => 'P5',
            'nama' => 'Cek Mikroskopis',
            'deskripsi' => 'Cek mikroskop adalah pemeriksaan sampel menggunakan mikroskop untuk mendeteksi
                            kelainan atau infeksi yang tidak terlihat langsung.',
            'harga' => 500000,
            'diskon' => 10,
            'is_diskon' => false,
            'gambar' => 'images/mikroskop.svg'
        ]);

        Perawatan::create([
            'id' => 'P6',
            'nama' => 'Rawat Inap',
            'deskripsi' => 'Perawatan medis yang mengharuskan pasien menginap untuk pemantauan dan
                            pengobatan intensif di klinik dalam jangka waktu tertentu.',
            'harga' => 50000,
            'diskon' => 10,
            'is_diskon' => false,
            'gambar' => 'images/rawatInap.svg'
        ]);

        Perawatan::create([
            'id' => 'P7',
            'nama' => 'usg',
            'deskripsi' => 'Pemeriksaan medis menggunakan gelombang suara untuk menghasilkan gambar
                            organ dalam tubuh, membantu mendeteksi kondisi seperti kehamilan, gangguan
                            organ, atau tumor.',
            'harga' => 100000,
            'diskon' => 10,
            'is_diskon' => false,
            'gambar' => 'images/usg.svg'
        ]);
    }
}
