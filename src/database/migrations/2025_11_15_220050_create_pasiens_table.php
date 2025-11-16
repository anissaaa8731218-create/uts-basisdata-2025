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
        Schema::create('pasiens', function (Blueprint $table) {
            $table->id();
    $table->string('no_rm')->unique(); // Nomor Rekam Medis
    $table->string('nik')->unique();
    $table->string('nama');
    $table->enum('jenis_kelamin', ['L', 'P']);
    $table->date('tanggal_lahir');

    // Kontak
    $table->string('alamat');
    $table->string('kota')->nullable();
    $table->string('provinsi')->nullable();
    $table->string('no_hp')->nullable();

    // Data tambahan
    $table->string('golongan_darah')->nullable();
    $table->string('status_pernikahan')->nullable();
    $table->string('pekerjaan')->nullable();

    // Kontak darurat
    $table->string('kontak_darurat_nama')->nullable();
    $table->string('kontak_darurat_hp')->nullable();
    $table->string('kontak_darurat_hubungan')->nullable();

    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pasiens');
    }
};
