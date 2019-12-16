<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class TablapersonaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
       
        $faker = Faker::create();
        for ($i=0; $i < 50; $i++) {
            DB::table('persona')->insert(array(
                   'nombre' => $faker->firstNameMale,
                  // 'nombre'  => $faker->randomElement(),
                   'apellidop' => $faker->lastName,
                   'apellidom' => $faker->lastName,
                   'cedula' => $faker->numberBetween($min = 11111111,$max = 99999999),
                   'email' => $faker->email,
                   'telefono' => $faker->phoneNumber,
                   'direccion' => $faker->address,
                   'foto' => $faker->firstNameFemale,
                   'created_at' => date('Y-m-d H:m:s'),
                   'updated_at' => date('Y-m-d H:m:s')
            ));
        }
    }
}
