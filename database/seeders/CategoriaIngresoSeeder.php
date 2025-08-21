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
            'descripcion' => 'Ventas de Productos',
            'id_tipo' => '1',
            'id_estado' => '1',
            'id_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
