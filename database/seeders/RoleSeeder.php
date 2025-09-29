<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
          DB::table('roles')->insert([
            ['name' => 'Administrador', 'slug' => 'admin', 'id_estado' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Cajero', 'slug' => 'cajero', 'id_estado' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Sistema', 'slug' => 'sistema', 'id_estado' => 1, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
