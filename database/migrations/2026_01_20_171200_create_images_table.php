<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('images', function (Blueprint $table) {
            $table->id();
            $table->string('hp_no'); // relasi ke kolom 'no' di tabel hps
            $table->string('path');  // lokasi file foto (misalnya di storage/app/public/images)
            $table->string('caption')->nullable(); // opsional, deskripsi foto
            $table->timestamps();

            // Jika ingin enforce relasi, bisa tambahkan foreign key ke kolom 'no'
            // Tapi karena 'no' bukan primary key, biasanya pakai index saja
            $table->index('hp_no');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('images');
    }
};
