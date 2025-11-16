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
        Schema::create('kunjungans', function (Blueprint $table) {
            $table->id();
    $table->foreignId('pasien_id')->constrained()->cascadeOnDelete();
    $table->foreignId('dokter_id')->constrained()->cascadeOnDelete();

    $table->dateTime('tanggal_kunjungan');
    $table->string('keluhan');
    $table->text('diagnosa')->nullable();
    $table->text('tindakan')->nullable();

    $table->integer('biaya_kunjungan')->default(0);
    $table->enum('status', ['menunggu', 'diperiksa', 'selesai'])
          ->default('menunggu');

    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kunjungans');
    }
};
