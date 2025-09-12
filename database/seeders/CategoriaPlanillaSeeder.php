<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriaPlanillaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // =============================
        // Salarios a empleados directos (id_tipo = 1)
        // =============================
        DB::table('categorias_planillas')->insert([
            'descripcion' => 'Pago de la semana',
            'id_tipo' => '1',
            'id_estado' => '1',
            'id_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categorias_planillas')->insert([
            'descripcion' => 'Pago quincenal',
            'id_tipo' => '1',
            'id_estado' => '1',
            'id_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // =============================
        // Salarios a empleados indirectos (id_tipo = 2)
        // =============================
        DB::table('categorias_planillas')->insert([
            'descripcion' => 'Pago mensual',
            'id_tipo' => '2',
            'id_estado' => '1',
            'id_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categorias_planillas')->insert([
            'descripcion' => 'Pago administrativo',
            'id_tipo' => '2',
            'id_estado' => '1',
            'id_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // =============================
        // Pagos a contratistas (id_tipo = 3)
        // =============================
        DB::table('categorias_planillas')->insert([
            'descripcion' => 'Pago por servicios profesionales',
            'id_tipo' => '3',
            'id_estado' => '1',
            'id_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categorias_planillas')->insert([
            'descripcion' => 'Pago por consultoría externa',
            'id_tipo' => '3',
            'id_estado' => '1',
            'id_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categorias_planillas')->insert([
            'descripcion' => 'Pago a técnicos y mantenimiento',
            'id_tipo' => '3',
            'id_estado' => '1',
            'id_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // =============================
        // Pagos de horas extras (id_tipo = 4)
        // =============================
        DB::table('categorias_planillas')->insert([
            'descripcion' => 'Pago de horas extras diurnas',
            'id_tipo' => '4',
            'id_estado' => '1',
            'id_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categorias_planillas')->insert([
            'descripcion' => 'Pago de horas extras nocturnas',
            'id_tipo' => '4',
            'id_estado' => '1',
            'id_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categorias_planillas')->insert([
            'descripcion' => 'Pago de horas extras en feriados',
            'id_tipo' => '4',
            'id_estado' => '1',
            'id_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // =============================
        // Pagos de comisiones (id_tipo = 5)
        // =============================
        DB::table('categorias_planillas')->insert([
            'descripcion' => 'Pago de comisiones por ventas',
            'id_tipo' => '5',
            'id_estado' => '1',
            'id_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categorias_planillas')->insert([
            'descripcion' => 'Pago de comisiones por metas cumplidas',
            'id_tipo' => '5',
            'id_estado' => '1',
            'id_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // =============================
        // Pagos de beneficios y aguinaldos (id_tipo = 6)
        // =============================
        DB::table('categorias_planillas')->insert([
            'descripcion' => 'Pago de aguinaldo',
            'id_tipo' => '6',
            'id_estado' => '1',
            'id_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categorias_planillas')->insert([
            'descripcion' => 'Pago de catorceavo',
            'id_tipo' => '6',
            'id_estado' => '1',
            'id_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categorias_planillas')->insert([
            'descripcion' => 'Pago de vacaciones',
            'id_tipo' => '6',
            'id_estado' => '1',
            'id_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categorias_planillas')->insert([
            'descripcion' => 'Pago por liquidaciones',
            'id_tipo' => '6',
            'id_estado' => '1',
            'id_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categorias_planillas')->insert([
            'descripcion' => 'Indemnizaciones',
            'id_tipo' => '6',
            'id_estado' => '1',
            'id_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
