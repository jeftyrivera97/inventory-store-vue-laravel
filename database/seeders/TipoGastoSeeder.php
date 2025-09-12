<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipoGastoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tipos_gastos')->insert([ 
            'descripcion' => 'Gastos Directos',
            'id_estado' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tipos_gastos')->insert([
            'descripcion' => 'Gastos Indirectos',
            'id_estado' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tipos_gastos')->insert([
            'descripcion' => 'Gastos Fijos',
            'id_estado' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tipos_gastos')->insert([
            'descripcion' => 'Gastos Variables',
            'id_estado' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tipos_gastos')->insert([
            'descripcion' => 'Gastos Operativos',
            'id_estado' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tipos_gastos')->insert([
            'descripcion' => 'Gastos No Operativos',
            'id_estado' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tipos_gastos')->insert([
            'descripcion' => 'Gastos Administrativos',
            'id_estado' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tipos_gastos')->insert([
            'descripcion' => 'Gastos de Ventas y Marketing',
            'id_estado' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tipos_gastos')->insert([
            'descripcion' => 'Gastos Financieros',
            'id_estado' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tipos_gastos')->insert([
            'descripcion' => 'Gastos Extraordinarios',
            'id_estado' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
