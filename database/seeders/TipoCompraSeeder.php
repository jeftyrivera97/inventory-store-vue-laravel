<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipoCompraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tipos_compras')->insert([ //id 1
            'descripcion' => 'Compras Operacionales',
            'id_estado' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tipos_compras')->insert([ //id 2
            'descripcion' => 'Compras Directas',
            'id_estado' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tipos_compras')->insert([ //id 3
            'descripcion' => 'Compras Indirectas',
            'id_estado' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tipos_compras')->insert([    //id 4
            'descripcion' => 'Compras de Materia Prima',
            'id_estado' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tipos_compras')->insert([ //id 5
            'descripcion' => 'Compras de Suministros',
            'id_estado' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tipos_compras')->insert([ //id 6
            'descripcion' => 'Compras de Activos Fijos',
            'id_estado' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
