<?php

use Illuminate\Database\Seeder;
use App\Models\proyecto;

class TablaproyectoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(proyecto::class)->create();
    }
}
