<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriaEmpleadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Nivel Alto (Dirección / Gerencia)
        DB::table('categorias_empleados')->insert([
            'descripcion' => 'Gerente General',
            'rango' => 'Alto',
            'id_estado' => '1',
            'id_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categorias_empleados')->insert([
            'descripcion' => 'Administrador de Tienda',
            'rango' => 'Alto',
            'id_estado' => '1',
            'id_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Nivel Medio (Supervisión / Coordinación)
        DB::table('categorias_empleados')->insert([
            'descripcion' => 'Supervisor de Ventas',
            'rango' => 'Medio',
            'id_estado' => '1',
            'id_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categorias_empleados')->insert([
            'descripcion' => 'Coordinador de Inventario',
            'rango' => 'Medio',
            'id_estado' => '1',
            'id_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categorias_empleados')->insert([
            'descripcion' => 'Encargado de Caja',
            'rango' => 'Medio',
            'id_estado' => '1',
            'id_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Nivel Operativo (Atención / Apoyo)
        DB::table('categorias_empleados')->insert([
            'descripcion' => 'Vendedor de Mostrador',
            'rango' => 'Operativo',
            'id_estado' => '1',
            'id_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categorias_empleados')->insert([
            'descripcion' => 'Atención al Cliente',
            'rango' => 'Operativo',
            'id_estado' => '1',
            'id_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categorias_empleados')->insert([
            'descripcion' => 'Auxiliar de Inventario',
            'rango' => 'Operativo',
            'id_estado' => '1',
            'id_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categorias_empleados')->insert([
            'descripcion' => 'Personal de Limpieza y Apoyo',
            'rango' => 'Operativo',
            'id_estado' => '1',
            'id_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

         DB::table('categorias_empleados')->insert([
            'descripcion' => 'Guardia de Seguridad',
            'rango' => 'Operativo',
            'id_estado' => '1',
            'id_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
