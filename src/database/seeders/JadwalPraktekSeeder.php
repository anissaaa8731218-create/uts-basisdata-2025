<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JadwalPraktekSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('jadwal_prakteks')->insert([
            [
                'dokter_id' => 1,
                'hari' => 'Rabu',
                'jam_mulai' => '07:00',
                'jam_selesai' => '12:00',
                'is_libur' => false,
            ],
            [
                'dokter_id' => 2,
                'hari' => 'Jumat',
                'jam_mulai' => '09:00',
                'jam_selesai' => '13:00',
                'is_libur' => false,
            ],
        ]);
    }
}
