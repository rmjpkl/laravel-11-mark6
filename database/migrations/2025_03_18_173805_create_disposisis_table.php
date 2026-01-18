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
        Schema::create('disposisis', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal_diterima');
            $table->string('jam_diterima');
            $table->string('nomor_surat');
            $table->date('tanggal_surat');
            $table->string('asal_surat');
            $table->string('ringkasan');
            $table->string('file_surat');
            $table->string('nomor_agenda')->nullable();
            $table->string('tingkat_keamanan')->nullable();
            $table->string('disposisi')->nullable();
            $table->boolean('kakplp')->nullable();
            $table->boolean('kasibinadik')->nullable();
            $table->boolean('kasikamtib')->nullable();
            $table->boolean('kasubagtu')->nullable();
            $table->boolean('sudah_disposisi')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('disposisis');
    }
};
