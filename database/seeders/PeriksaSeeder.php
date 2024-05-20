<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeriksaSeeder extends Seeder
{
    public function run()
    {
        DB::table('periksas')->insert([
            [
                'berat' => 70,
                'dokter_id' => 1,
                'keterangan' => 'Normal',
                'pasien_id' => 1,
                'tanggal' => '2004-06-26', // Ensure this date format is correct
                'tensi' => 30,
                'tinggi' => 170,
            ],
            [
                'berat' => 80,
                'dokter_id' => 2,
                'keterangan' => 'Normal',
                'pasien_id' => 2,
                'tanggal' => '2005-06-01', // Ensure this date format is correct
                'tensi' => 60,
                'tinggi' => 200,
            ],
            [
                'berat' => 55,
                'dokter_id' => 3,
                'keterangan' => 'Normal',
                'pasien_id' => 3,
                'tanggal' => '2024-04-25', // Ensure this date format is correct
                'tensi' => 60,
                'tinggi' => 170,
            ],
            [
                'berat' => 40,
                'dokter_id' => 4,
                'keterangan' => 'Normal',
                'pasien_id' => 4,
                'tanggal' => '2024-01-02', // Ensure this date format is correct
                'tensi' => 25,
                'tinggi' => 130,
            ],
        ]);
    }
}
