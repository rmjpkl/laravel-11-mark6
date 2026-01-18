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
    Schema::create('hps', function (Blueprint $table) {
        $table->id();
        $table->string('no');
        $table->string('nama');
        $table->string('merek');
        $table->string('tahun_rilis')->nullable();
        $table->string('harga')->nullable();
        $table->string('chipset')->nullable();
        $table->string('skor_antutu')->nullable();
        $table->string('kapasitas_ram')->nullable();
        $table->string('jenis_ram')->nullable();
        $table->string('kapasitas_storage')->nullable();
        $table->string('jenis_storage')->nullable();
        $table->string('camera_utama')->nullable();
        $table->string('stabilizer_kamera')->nullable();
        $table->string('teknologi_kamera')->nullable();
        $table->string('camera_tambahan_1')->nullable();
        $table->string('camera_tambahan_2')->nullable();
        $table->string('camera_depan')->nullable();
        $table->string('teknologi_layar')->nullable();
        $table->string('refresh_rate')->nullable();
        $table->string('tingkat_kecerahan')->nullable();
        $table->string('pelindung_layar')->nullable();
        $table->string('kapasitas_baterai')->nullable();
        $table->string('charger_kabel')->nullable();
        $table->string('charger_wireless')->nullable();
        $table->boolean('bypass_charging')->default(false);
        $table->boolean('nfc')->default(false);
        $table->string('ingress_protection')->nullable();
        $table->text('fitur_tambahan')->nullable();
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hps');
    }
};
