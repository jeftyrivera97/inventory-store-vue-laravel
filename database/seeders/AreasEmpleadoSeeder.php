<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AreasEmpleadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('areas_empleados')->insert([
            'descripcion' => 'Administración General',
            'id_estado' => '1',
            'id_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
         DB::table('areas_empleados')->insert([
            'descripcion' => 'Gerencia',
            'id_estado' => '1',
            'id_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('areas_empleados')->insert([
            'descripcion' => 'Ventas en Tienda',
            'id_estado' => '1',
            'id_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('areas_empleados')->insert([
            'descripcion' => 'Ventas Online',
            'id_estado' => '1',
            'id_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('areas_empleados')->insert([
            'descripcion' => 'Atención al Cliente Turístico',
            'id_estado' => '1',
            'id_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('areas_empleados')->insert([
            'descripcion' => 'Marketing y Promoción Turística',
            'id_estado' => '1',
            'id_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('areas_empleados')->insert([
            'descripcion' => 'Diseño de Productos y Artesanías',
            'id_estado' => '1',
            'id_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('areas_empleados')->insert([
            'descripcion' => 'Producción de Souvenirs',
            'id_estado' => '1',
            'id_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('areas_empleados')->insert([
            'descripcion' => 'Control de Inventario',
            'id_estado' => '1',
            'id_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('areas_empleados')->insert([
            'descripcion' => 'Logística y Distribución',
            'id_estado' => '1',
            'id_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('areas_empleados')->insert([
            'descripcion' => 'Cajas y Cobros',
            'id_estado' => '1',
            'id_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('areas_empleados')->insert([
            'descripcion' => 'Mantenimiento de Tienda',
            'id_estado' => '1',
            'id_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('areas_empleados')->insert([
            'descripcion' => 'Seguridad',
            'id_estado' => '1',
            'id_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
