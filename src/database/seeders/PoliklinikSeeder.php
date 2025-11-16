<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PoliklinikSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('polikliniks')->insert([
            [
                'rumah_sakit_id' => 1,
                'kode_poli' => 'POLI001',
                'nama' => 'Poli Umum',
                'lantai' => '1',
                'jam_operasional' => '08:00 - 17:00',
            ],
            [
                'rumah_sakit_id' => 1,
                'kode_poli' => 'POLI002',
                'nama' => 'Poli Gigi',
                'lantai' => '2',
                'jam_operasional' => '08:00 - 15:00',
            ],
        ]);
    }
}
