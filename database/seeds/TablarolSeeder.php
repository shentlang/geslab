<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TablarolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('roles')->insert([
            'nombrerol' => 'invitado',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
          ]);
          DB::table('roles')->insert([
            'nombrerol' => 'admin',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
          ]);
          DB::table('roles')->insert([
            'nombrerol' => 'informatica',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
          ]);
          DB::table('roles')->insert([
            'nombrerol' => 'comercial',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
          ]);
           DB::table('roles')->insert([
            'nombrerol' => 'contaduria',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
          ]);
          DB::table('roles')->insert([
            'nombrerol' => 'agronomia',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
          ]);
          DB::table('roles')->insert([
            'nombrerol' => 'rec.hidricos',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
          ]);
          DB::table('roles')->insert([
            'nombrerol' => 'ambiental',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
          ]);
          DB::table('roles')->insert([
            'nombrerol' => 'ges.publica ',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
          ]);
          DB::table('roles')->insert([
            'nombrerol' => 'Dir. Informatica y Ciencias Exactas',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
          ]);
          DB::table('roles')->insert([
            'nombrerol' => 'Dir. Ciencias Economicas y Empresariales',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
          ]);
          DB::table('roles')->insert([
            'nombrerol' => 'Dir. Ciencias Contables, Financieras y Economicas',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
          ]);
          DB::table('roles')->insert([
            'nombrerol' => 'Dir. Ciencias Agronomicas',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
          ]);
    }
}
