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
        Schema::create('penggeledahans', function (Blueprint $table) {
            $table->id();
            $table->string('image_1')->nullable();
            $table->string('image_2')->nullable();
            $table->string('image_3')->nullable();
            $table->string('image_4')->nullable();
            $table->string('rupam');
            $table->string('blok');
            $table->string('kamar');
            $table->string('hari');
            $table->string('tanggal');
            $table->string('jam_mulai');
            $table->string('jam_akhir');
            $table->string('petugas');
            $table->string('sajam');
            $table->string('hp');
            $table->string('narkoba');
            $table->string('hasil_razia');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penggeledahans');
    }
};
