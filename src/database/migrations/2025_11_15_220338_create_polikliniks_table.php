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
        Schema::create('polikliniks', function (Blueprint $table) {
            $table->id();
    $table->foreignId('rumah_sakit_id')->constrained()->cascadeOnDelete();
    $table->string('kode_poli')->unique();
    $table->string('nama');
    $table->string('lantai')->nullable();
    $table->string('jam_operasional')->nullable();
    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('polikliniks');
    }
};
