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
        Schema::create('mtdi_trend_data_jabfung_ppbjs', function (Blueprint $table) {
            $table->id();
            $table->year('tahun')->nullable();
            $table->string('jenis_fungsional')->nullable();
            $table->integer('jumlah_fungsional_dilantik')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mtdi_trend_data_jabfung_ppbjs');
    }
};
