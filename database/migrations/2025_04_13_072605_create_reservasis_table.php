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
        Schema::create('reservasis', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('id_hewan');
            $table->string('id_user');
            $table->string('id_perawatan');
            $table->string('id_dokter');
            $table->string('waktu');
            $table->date('tanggal');
            $table->text('pesan')->nullable();
            $table->timestamps();

            $table->foreign('id_hewan')->references('id')->on('hewans')->onDelete('cascade');
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('id_perawatan')->references('id')->on('perawatans')->onDelete('cascade');
            $table->foreign('id_dokter')->references('id')->on('dokters')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservasis');
    }
};
