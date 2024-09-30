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
        Schema::create('trollings', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lokasi');
            $table->string('tanggal');
            $table->String('jam');
            $table->String('rupam');
            $table->String('petugas');
            $table->String('koordinat');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trollings');
    }
};
