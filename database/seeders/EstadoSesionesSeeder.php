<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EstadoSesionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         DB::table('estados_sesiones')->insert([
            'descripcion' => 'Abierta',
        ]);
        DB::table('estados_sesiones')->insert([
            'descripcion' => 'Cerrada',
        ]);
    }
}
