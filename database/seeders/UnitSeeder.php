<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('units')->insert([
            [
               
                'nama' => 'Budi Santoso',
              
            ],
            [
           
                'nama' => 'Siti Aminah',
               
            ],
            [
             
                'nama' => 'Andi Prasetyo',
               
            ],
            [
           
                'nama' => 'Dewi Lestari',
               
            ],
            [
            
                'nama' => 'Eko Wijaya',
               
            ],
        ]);
    }
}
