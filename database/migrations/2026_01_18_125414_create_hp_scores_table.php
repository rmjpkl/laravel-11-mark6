<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('hp_scores', function (Blueprint $table) {
            $table->id();
            $table->string('nama');                    // Nama HP
            $table->integer('chipset_score')->nullable();     // Skor Chipset
            $table->integer('memory_score')->nullable();      // Skor Memory
            $table->integer('camera_score')->nullable();      // Skor Kamera Utama
            $table->integer('layar_score')->nullable();       // Skor Layar
            $table->integer('batrai_score')->nullable();      // Skor Baterai
            $table->integer('fitur_score')->nullable();       // Skor Fitur Tambahan
            $table->integer('antutu_score')->nullable();      // Skor Antutu
            $table->integer('harga_score')->nullable();       // Skor Harga
            $table->integer('nilai_keseluruhan')->nullable(); // Nilai Total
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('hp_scores');
    }
};
