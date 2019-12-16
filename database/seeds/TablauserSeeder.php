<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TablauserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        
        DB::table('users')->insert([
            'name' => 'administrador del sistema',
            'email'=> 'fcigch.uajms@gmail.com',
            'password'=>bcrypt('123123123'),
            'role_id'=>2,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
          ]);
    }
}
