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
        Schema::create('mtdi_jumlah_plts_terpasangs', function (Blueprint $table) {
            $table->id();
            $table->year('tahun')->nullable();
            $table->integer('kwp')->nullable();
            $table->string('lokasi')->nullable();
            $table->string('kecamatan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mtdi_jumlah_plts_terpasangs');
    }
};
