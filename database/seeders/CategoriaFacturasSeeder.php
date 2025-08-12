<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriaFacturasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categorias_facturas')->insert([
            'descripcion' => 'Factura Ordinaria',
            'id_estado' => '1',
            'id_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        
        DB::table('categorias_facturas')->insert([
            'descripcion' => 'Factura Electronica',
            'id_estado' => '1',
            'id_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
         DB::table('categorias_facturas')->insert([
            'descripcion' => 'Ticket',
            'id_estado' => '1',
            'id_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
