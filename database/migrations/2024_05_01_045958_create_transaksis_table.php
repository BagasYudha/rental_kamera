<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('transaksis', function (Blueprint $table) {
<<<<<<< HEAD
            $table->id();
            $table->string('nama', 100);
            $table->string('jaminan', 100);
            $table->string('namabarang', 100); // Sesuaikan dengan nama kolom yang ada pada aplikasi Anda
=======

            $table->id();

            $table->id_transaksi();
            $table->string('nama', 50);
            $table->string('jaminan');
            $table->string('namabarang', 50);
            $table->string('nama', 100);
            $table->string('jaminan', 100);
            $table->string('nama_item', 100);
>>>>>>> 9be2200ba88fc5fcc0e80469eb5e94a92b4bae9c
            $table->string('jamAmbil', 100);
            $table->date('tglAmbil');
            $table->date('tglKembali');
            $table->timestamps();

            $table->foreign('nama_item')->references('nama_item')->on('products')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('transaksis');
    }
};
