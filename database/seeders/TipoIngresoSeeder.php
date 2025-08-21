<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipoIngresoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tipos_ingresos')->insert([
            'descripcion' => 'Ingresos Operacionales',
            'id_estado' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
