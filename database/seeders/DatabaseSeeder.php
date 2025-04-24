<?php

namespace Database\Seeders;

use App\Models\Faq;
use App\Models\Perawatan;
use App\Models\Promo;
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
            'deskripsi' => 'Perawatan vaksinasi untuk mencegah penyakit menular dan menjaga daya tahan tubuh hewan peliharaan agar tetap sehat dan terlindungi.',
            'harga' => 200000,
            'diskon' => 10,
            'is_diskon' => false,
            'gambar' => 'images/vaksinasi.svg'

        ]);

        Perawatan::create([
            'id' => 'P2',
            'nama' => 'Operasi Minor & Mayor',
            'deskripsi' => 'Operasi Minor: Bedah ringan tanpa rawat inap, seperti penanganan luka kecil. Operasi Mayor: Bedah kompleks dengan rawat inap, seperti operasi organ dalam.',
            'harga' => 200000,
            'diskon' => 10,
            'is_diskon' => false,
            'gambar' => 'images/operasi.svg'
        ]);

        Perawatan::create([
            'id' => 'P3',
            'nama' => 'Pengobatan',
            'deskripsi' => 'Layanan medis untuk mendiagnosis dan mengobati berbagai keluhan, kesehatan, dari pemeriksaan ringan hingga terapi lanjutan, oleh tenaga profesional.',
            'harga' => 50000,
            'diskon' => 10,
            'is_diskon' => false,
            'gambar' => 'images/pengobatan.svg'
        ]);

        Perawatan::create([
            'id' => 'P4',
            'nama' => 'Cek Darah',
            'deskripsi' => 'Cek darah adalah tes untuk memeriksa kesehatan dengan menganalisis sampel darah, guna mendeteksi kondisi medis seperti infeksi, anemia, atau gangguan organ.',
            'harga' => 150000,
            'diskon' => 10,
            'is_diskon' => false,
            'gambar' => 'images/cekDarah.svg'
        ]);

        Perawatan::create([
            'id' => 'P5',
            'nama' => 'Cek Mikroskopis',
            'deskripsi' => 'Cek mikroskop adalah pemeriksaan sampel menggunakan mikroskop untuk mendeteksi kelainan atau infeksi yang tidak terlihat langsung.',
            'harga' => 150000,
            'diskon' => 10,
            'is_diskon' => false,
            'gambar' => 'images/mikroskop.svg'
        ]);

        Perawatan::create([
            'id' => 'P6',
            'nama' => 'Rawat Inap',
            'deskripsi' => 'Perawatan medis yang mengharuskan pasien menginap untuk pemantauan dan pengobatan intensif di klinik dalam jangka waktu tertentu.',
            'harga' => 50000,
            'diskon' => 10,
            'is_diskon' => false,
            'gambar' => 'images/rawatInap.svg'
        ]);

        Perawatan::create([
            'id' => 'P7',
            'nama' => 'USG',
            'deskripsi' => 'Pemeriksaan medis menggunakan gelombang suara untuk menghasilkan gambar organ dalam tubuh, membantu mendeteksi kondisi seperti kehamilan, gangguan organ, atau tumor.',
            'harga' => 100000,
            'diskon' => 10,
            'is_diskon' => false,
            'gambar' => 'images/usg.svg'
        ]);

        Promo::create([
            'id' => 'PR1',
            'nama' => 'Promo Pelanggan Baru',
            'harga' => 100000,
            'diskon' => 10
        ]);

        Promo::create([
            'id' => 'PR2',
            'nama' => '10 kali datang, 1 kali dimanjakan',
            'harga' => 100000,
            'diskon' => 10
        ]);

        Faq::create([
            'id' => 'F1',
            'title' => 'Apa saja yang tersedia di klinik?',
            'detail' => 'Klinik ini menyediakan berbagai layanan kesehatan untuk hewan peliharaan, termasuk operasi minor dan mayor, pengobatan, serta fasilitas rawat inap bagi hewan yang membutuhkan perawatan lebih lanjut. Selain itu, tersedia layanan pemeriksaan medis seperti cek darah, cek mikroskopis, dan USG untuk mendiagnosis kondisi kesehatan hewan secara detail mendetail. Klinik ini juga menawarkan layanan vaksinasi guna mencegah berbagai penyakit menular pada hewan peliharaan. Dengan layanan yang lengkap, klinik ini berkomitmen untuk memberikan perawatan terbaik demi kesehatan dan kesejahteraan hewan kesayangan anda.'
        ]);

        Faq::create([
            'id' => 'F2',
            'title' => 'Apakah bisa melakukan rawat inap untuk hewan yang sakit?',
            'detail' => 'Klinik ini menyediakan fasilitas rawat inap bagi hewan yang membutuhkan perawatan lebih lanjut. Hewan yang sedang sakit atau dalam masa pemulihan setelah operasi dapat dirawat dengan pengawasan dokter hewan profesional, sehingga mendapatkan perawatan yang optimal sesuai dengan kebutuhannya.'
        ]);

        Faq::create([
            'id' => 'F3',
            'title' => 'Apakah harus membuat janji terlebih dahulu sebelum datang?',
            'detail' => 'Sebaiknya membuat janji terlebih dahulu sebelum datang ke klinik agar mendapatkan pelayanan yang lebih cepat dan terjadwal. Namun, klinik juga menerima pasien yang datang langsung tanpa melakukan janji temu, tetapi kemungkinan harus menunggu lebih lama karena antrian bisa cukup panjang, terutama pada jam sibuk atau saat banyak pasien yang sudah membuat janji temu sebelumnya.'
        ]);

        Faq::create([
            'id' => 'F4',
            'title' => 'Bagaimana cara membuat janji temu?',
            'detail' => 'Anda dapat melakukan janji temu dengan melakukan reservasi melalui website klinik. Dengan reservasi online, anda bisa memilih jadwal yang tersedia dan mengindari antrian panjang saat datang ke klinik.'
        ]);

        Faq::create([
            'id' => 'F5',
            'title' => 'Kapan waktu yang tepat untuk memvaksin hewan peliharaan saya?',
            'detail' => 'Waktu yang tepat untuk memvaksin hewan peliharaan anda tergantung pada jenis hewan dan vaksinnya. Umumnya, vaksinasi pertama diberikan saat hewan berusia beberapa minggu, seperti anak anjing atau anak kucing yang mulai divaksin pada usia 6-8 minggu, kemudian dilanjutkan dengan vaksin booster sesuai jadwal yang direkomendasikan oleh dokter hewan. Untuk memastikan jadwal vaksinasi yang tepat, anda dapat berkonsultasi langsung dengan dokter hewan di klinik.'
        ]);

        Faq::create([
            'id' => 'F6',
            'title' => 'Apakah klinik menyimpan rekam medis hewan peliharaan pelanggan?',
            'detail' => 'Klinik menyimpan rekam medis hewan peliharaan pelanggan dalam bentuk digital. Dengan sistem rekam medis digital, riwayat kesehatan hewan dapat tercatat dengan rapih dan aman, sehingga memudahkan dokter hewan dalam memberikan diagnosis serta perawatan yang sesuai setiap kunjungannya.'
        ]);

        Faq::create([
            'id' => 'F7',
            'title' => 'Bagaimana saya mendapatkan rekam medis hewan saya?',
            'detail' => 'Anda dapat mengakses rekam medis hewan peliharaan melalui akun pelanggan di website klinik. Semua riwayat kesehatan, termasuk hasil pemeriksaan, vaksinasi, dan perawatan, akan tersimpan secara digital dan dapat diakses kapan saja untuk memudahkan pemantauan kesehatan hewan anda.'
        ]);
    }
}
