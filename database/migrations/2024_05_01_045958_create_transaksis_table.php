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
<<<<<<< HEAD
            $table->string('nama', 50);
            $table->string('jaminan');
            $table->string('namabarang', 50);
=======
            $table->string('nama', 100);
            $table->string('jaminan', 100);
            $table->string('nama_item', 100);
>>>>>>> f711b4c125b2f4a3a1720c65683b7e8abd6d2767
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
