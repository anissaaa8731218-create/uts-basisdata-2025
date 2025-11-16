<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PasienSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('pasiens')->insert([
            [
                'no_rm' => 'RM0001',
                'nik' => '3174051234560001',
                'nama' => 'Adi Pratama',
                'jenis_kelamin' => 'L',
                'tanggal_lahir' => '1995-05-12',
                'alamat' => 'Jl. Mawar No.10',
                'kota' => 'Jakarta',
                'provinsi' => 'DKI Jakarta',
                'no_hp' => '08123456789',
                'golongan_darah' => 'O',
                'status_pernikahan' => 'Belum Kawin',
                'pekerjaan' => 'Karyawan',
            ],
            [
                'no_rm' => 'RM0002',
                'nik' => '3174051234560002',
                'nama' => 'Darminah',
                'jenis_kelamin' => 'P',
                'tanggal_lahir' => '1972-09-19',
                'alamat' => 'Jl. Melati No.24',
                'kota' => 'Jakarta',
                'provinsi' => 'DKI Jakarta',
                'no_hp' => '08129876543',
                'golongan_darah' => 'o',
                'status_pernikahan' => 'Kawin',
                'pekerjaan' => 'guru',
            ],
        ]);
    }
}
