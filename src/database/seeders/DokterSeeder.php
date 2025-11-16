<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DokterSeeder extends Seeder
{
   public function run(): void
    {
        DB::table('dokters')->insert([
            [
                'poliklinik_id' => 1,
                'kode_dokter' => 'DR001',
                'nama'    => 'dr. Budi Santoso',
                'spesialisasi' => 'Umum',
                'no_str' => 'STR12345',
                'no_sip' => 'SIP98765',
                'no_hp' => '081223344556',
                'email' => 'budi@rssehat.com',
                'pengalaman_tahun' => 8,
            ],
            [
                'poliklinik_id' => 2,
                'kode_dokter' => 'DR002',
                'nama'    => 'drg. Nisa',
                'spesialisasi' => 'Gigi',
                'no_str' => 'STR67890',
                'no_sip' => 'SIP54321',
                'no_hp' => '081299988877',
                'email' => 'Nisa@rssehat.com',
                'pengalaman_tahun' => 9,
            ],
        ]);
    }
}
