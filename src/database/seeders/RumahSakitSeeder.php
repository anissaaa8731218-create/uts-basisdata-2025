<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RumahSakitSeeder extends Seeder
{
    public function run(): void
{
    DB::table('rumah_sakits')->insert([
        [
            'kode_rs' => 'RS001',
            'nama' => 'RS Budi Mulia',
            'tipe_rs' => 'B',
            'alamat' => 'Jl. Merdeka No. 12',
            'kota' => 'Jakarta',
            'provinsi' => 'DKI Jakarta',
            'telepon' => '0211234567',
            'email' => 'info@rssehat.com',
            'website' => 'https://rssehat.com',
            'created_at' => now(),
        ],
    ]);
}
}
