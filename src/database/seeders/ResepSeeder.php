<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ResepSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('reseps')->insert([
            [
                'kunjungan_id' => 1,
                'obat_id' => 1,
                'jumlah' => 2,
                'aturan_pakai' => '2x1 setelah makan',
                'catatan' => 'Minum air putih yang banyak',
            ],
        ]);
    }
}
