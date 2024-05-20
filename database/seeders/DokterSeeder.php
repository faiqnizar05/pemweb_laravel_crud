<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DokterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dokters')->insert([
            [
                'nama' => 'M.Nizar Al-Faiq',
                'gender' => 'L',
                'tmp_lahir' => 'Depok',
                'tgl_lahir' => '2005-04-05',
                'kategori' => 'Umum',
                'telpon' => '085692476174',
                'alamat' => 'Jl. Jatijajar II no.2a',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Haekal Sulthon Al-Fathoni',
                'gender' => 'L',
                'tmp_lahir' => 'Cilodong',
                'tgl_lahir' => '2000-04-02',
                'kategori' => 'Spesialis',
                'telpon' => '086787292',
                'alamat' => 'Cilodong',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Tambahkan data dokter lainnya sesuai kebutuhan
        ]);
    }
}
