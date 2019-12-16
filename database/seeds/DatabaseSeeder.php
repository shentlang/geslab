<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->truncateTablas([
            'roles',
            'materias',
            'users',
            'lugars'
            
            
        ]);
        // $this->call(UsersTableSeeder::class);
        $this->call(TablarolSeeder::class);
        $this->call(TablamateriaSeeder::class);
        $this->call(TablauserSeeder::class);
        $this->call(TablalugarSeeder::class);
        
        
    }

    protected function truncateTablas(array $tablas)
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
        foreach ($tablas as $tabla) {
            DB::table($tabla)->truncate();
        }
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
    }
}
