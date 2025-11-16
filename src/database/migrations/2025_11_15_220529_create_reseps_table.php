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
        Schema::create('reseps', function (Blueprint $table) {
            $table->id();
    $table->foreignId('kunjungan_id')->constrained()->cascadeOnDelete();
    $table->foreignId('obat_id')->constrained()->cascadeOnDelete();
    $table->integer('jumlah')->default(1);
    $table->string('aturan_pakai'); // contoh: "3x1 sesudah makan"
    $table->string('catatan')->nullable(); // note tambahan dokter

    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reseps');
    }
};
