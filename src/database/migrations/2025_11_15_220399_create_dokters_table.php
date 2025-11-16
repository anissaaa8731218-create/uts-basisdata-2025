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
        Schema::create('dokters', function (Blueprint $table) {
            $table->id();
    $table->foreignId('poliklinik_id')->constrained()->cascadeOnDelete();

    $table->string('kode_dokter')->unique();
    $table->string('nama');
    $table->string('spesialisasi');
    $table->string('no_str')->nullable(); // Surat Registrasi
    $table->string('no_sip')->nullable(); // Surat Izin Praktek

    // kontak
    $table->string('no_hp')->nullable();
    $table->string('email')->nullable();

    $table->integer('pengalaman_tahun')->nullable();
    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dokters');
    }
};
