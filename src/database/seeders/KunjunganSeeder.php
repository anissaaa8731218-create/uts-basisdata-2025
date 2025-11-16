<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KunjunganSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('kunjungans')->insert([
            [
                'pasien_id' => 1,
                'dokter_id' => 1,
                'tanggal_kunjungan' => '2025-02-01 10:00:00',
                'keluhan' => 'Demam dan Lambung',
                'diagnosa' => 'Demam biasa',
                'tindakan' => 'Pemberian obat',
                'biaya_kunjungan' => 75000,
                'status' => 'selesai',
            ],
        ]);
    }
}
