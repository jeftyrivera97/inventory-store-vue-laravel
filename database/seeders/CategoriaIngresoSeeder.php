<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriaIngresoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categorias_ingresos')->insert([
            'descripcion' => 'Ventas en Tienda',
            'id_tipo' => '1', // Operacionales
            'id_estado' => '1',
            'id_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categorias_ingresos')->insert([
            'descripcion' => 'Ventas Online',
            'id_tipo' => '1', // Operacionales
            'id_estado' => '1',
            'id_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categorias_ingresos')->insert([
            'descripcion' => 'Ingreso por Alquileres',
            'id_tipo' => '2', // No Operacionales
            'id_estado' => '1',
            'id_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categorias_ingresos')->insert([
            'descripcion' => 'Prestamo Bancario',
            'id_tipo' => '6', // Pasivos
            'id_estado' => '1',
            'id_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categorias_ingresos')->insert([
            'descripcion' => 'Prestamo Personal',
            'id_tipo' => '6', // Pasivos
            'id_estado' => '1',
            'id_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categorias_ingresos')->insert([
            'descripcion' => 'Propinas/Donaciones Recibidas',
            'id_tipo' => '3', // Extraordinarios
            'id_estado' => '1',
            'id_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
