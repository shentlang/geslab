<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TablamateriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('materias')->insert([
            'sigla' => 'LAA - 100',
            'nomb' => 'TALLER III',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
          ]);
          DB::table('materias')->insert([
            'sigla' => 'AUD - 610',
            'nomb' => 'TALLER III',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
          ]);
          DB::table('materias')->insert([
            'sigla' => 'AGR - 521',
            'nomb' => 'TALLER III',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
          ]);
          DB::table('materias')->insert([
            'sigla' => 'ICT - 011',
            'nomb' => 'TALLER III',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
          ]);
          DB::table('materias')->insert([
            'sigla' => 'INF - 501',
            'nomb' => 'TALLER III',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
          ]);
          DB::table('materias')->insert([
            'sigla' => 'IRG - 001',
            'nomb' => 'TALLER III',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
          ]);
          DB::table('materias')->insert([
            'sigla' => 'ISA - 092',
            'nomb' => 'TALLER III',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
          ]);
    }
}
