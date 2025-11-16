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
        Schema::create('rumah_sakits', function (Blueprint $table) {
        $table->id();
    $table->string('kode_rs')->unique(); 
    $table->string('nama');
    $table->string('tipe_rs'); 
    $table->string('alamat');
    $table->string('kota');
    $table->string('provinsi');
    $table->string('telepon')->nullable();
    $table->string('email')->nullable();
    $table->string('website')->nullable();
    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rumah_sakits');
    }
};
