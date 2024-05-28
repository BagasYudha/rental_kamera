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
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 100);
            $table->string('jaminan', 100);
            $table->string('namabarang', 100); // Sesuaikan dengan nama kolom yang ada pada aplikasi Anda
            $table->string('jamAmbil', 100);
            $table->string('tglAmbil', 100);
            $table->string('tglKembali', 100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksis');
    }
};
