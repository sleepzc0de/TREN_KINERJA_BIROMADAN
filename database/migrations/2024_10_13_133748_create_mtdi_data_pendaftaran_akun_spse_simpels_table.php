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
        Schema::create('mtdi_data_pendaftaran_akun_spse_simpels', function (Blueprint $table) {
            $table->id();
            $table->string('kategori')->nullable();
            $table->year('tahun')->nullable();
            $table->bigInteger('jumlah_penyedia')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mtdi_data_pendaftaran_akun_spse_simpels');
    }
};
