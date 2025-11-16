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
        Schema::create('obats', function (Blueprint $table) {
            $table->id();
    $table->string('kode_obat')->unique();
    $table->string('nama');
    $table->string('kategori'); // Tablet, sirup, salep, kapsul, injeksi
    $table->string('jenis'); // generik / non generik
    $table->integer('stok')->default(0);
    $table->integer('harga')->default(0);
    $table->string('satuan'); // strip, botol, vial
    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('obats');
    }
};
