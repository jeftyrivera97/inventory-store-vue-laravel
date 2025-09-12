<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipoPlanillaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tipos_planillas')->insert([
            'descripcion' => 'Salarios a empleados directos',
            'id_estado' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tipos_planillas')->insert([
            'descripcion' => 'Salarios a empleados indirectos',
            'id_estado' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tipos_planillas')->insert([
            'descripcion' => 'Pagos a contratistas/servicios profesionales',
            'id_estado' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tipos_planillas')->insert([
            'descripcion' => 'Pagos de horas extras',
            'id_estado' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tipos_planillas')->insert([
            'descripcion' => 'Pagos de comisiones',
            'id_estado' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tipos_planillas')->insert([
            'descripcion' => 'Pagos de beneficios y aguinaldos',
            'id_estado' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
