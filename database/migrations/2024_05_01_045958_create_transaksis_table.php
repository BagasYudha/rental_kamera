<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 100);
            $table->string('jaminan', 100);
            $table->string('nama_item', 100);
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
