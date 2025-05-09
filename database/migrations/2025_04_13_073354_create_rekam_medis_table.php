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
            $table->string('id_pengelola');
            $table->date('tanggal');
            $table->string('detail');
            $table->string('diagnosa');
            $table->string('tes');
            $table->string('hasil_tes');
            $table->string('tindakan');
            $table->string('pesan');
            $table->timestamps();

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
