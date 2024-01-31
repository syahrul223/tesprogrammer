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
        Schema::create('pembelian', function (Blueprint $table) {
            $table->id();
            $table->string('nomor_pembelian', 6);
            $table->date('tanggal');
            $table->string('kode_barang', 4);
            $table->string('satuan');
            $table->decimal('qty', 8, 2);
            $table->decimal('harga', 8, 2);
            $table->decimal('diskon');
            $table->decimal('subtotal');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembelian');
    }
};
