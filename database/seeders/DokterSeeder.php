<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DokterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('dokters')->insert([
            'nama' => 'Anisa Adel',
            'spesialis' => 'umum',
            'no_telepon' => '082324007507',
            'hari_praktik' => 'senin - jumat',
            'awal_jam_praktik' => '09:00:00',
            'akhir_jam_praktik' => '19:00:00',
        ]);
    }
}
