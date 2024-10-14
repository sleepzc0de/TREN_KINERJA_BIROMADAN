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
        Schema::create('mtdi_trend_sosmed_romadans', function (Blueprint $table) {
            $table->id();
            $table->year('tahun')->nullable();
            $table->bigInteger('jumlah_views')->nullable();
            $table->bigInteger('jumlah_likes')->nullable();
            $table->bigInteger('jumlah_post')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mtdi_trend_sosmed_romadans');
    }
};
