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
        Schema::create('mtdi_peningkatan_kompetensi_jfpbjs', function (Blueprint $table) {
            $table->id();
            $table->year('tahun')->nullable();
            $table->string('kegiatan')->nullable();
            $table->text('detail_kegiatan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mtdi_peningkatan_kompetensi_jfpbjs');
    }
};
