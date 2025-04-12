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
        Schema::create('perawatans', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('nama');
            $table->integer('harga');
            $table->integer('diskon');
            $table->boolean('is_diskon');
            $table->string('gambar');
            // $table->foreignId('dokter_id');
            // $table->foreign("dokter_id")->references("id")->on("dokter");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('perawatans');
    }
};
