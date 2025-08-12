<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EstadoProductosOnlineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
          DB::table('estados_productos_online')->insert([
            'descripcion' => 'Activo',
        ]);
        DB::table('estados_productos_online')->insert([
            'descripcion' => 'Inactivo',
        ]);
    }
}
