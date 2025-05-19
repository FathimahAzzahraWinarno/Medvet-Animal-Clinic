<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('rekam_medis', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('id_pengelola')->nullable();
            $table->string('reservasi_id')->nullable();
            $table->date('tanggal');
            $table->string('dokter');  // Perhatikan kapitalisasi, di sini kecil semua
            $table->string('perawatan');
            $table->text('detail');  // Bisa pakai text jika detail lebih panjang
            $table->string('diagnosa');
            $table->string('hasil_tes');
            $table->string('tindakan');
            $table->text('pesan');  // Pesan lebih baik pakai text jika panjang
            $table->timestamps();

            $table->foreign('reservasi_id')->references('id')->on('reservasis')->onDelete('cascade');
            $table->foreign('id_pengelola')->references('id')->on('pengelolas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rekam_medis');
    }
};
