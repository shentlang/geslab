<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TablalugarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('lugars')->insert([
            'aula' => 'no seleccionada',
            'lugar' => 'no seleccionado',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
          ]);
    }
}
