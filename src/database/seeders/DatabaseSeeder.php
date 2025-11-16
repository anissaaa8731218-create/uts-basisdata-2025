<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       $this->call([
        RumahSakitSeeder::class,
        PoliklinikSeeder::class,
        PasienSeeder::class,
        DokterSeeder::class,
        ObatSeeder::class,
        JadwalPraktekSeeder::class,
        KunjunganSeeder::class,
        ResepSeeder::class,
        RoleSeeder::class,
        UserSeeder::class,
    ]);
    }
}
