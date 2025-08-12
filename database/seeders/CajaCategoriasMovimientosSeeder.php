<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CajaCategoriasMovimientosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cajas_categorias_movimientos')->insert([
            'categoria' => 'Ingreso',
            'medio' => 'Efectivo',
        ]);
        DB::table('cajas_categorias_movimientos')->insert([
            'categoria' => 'Ingreso',
            'medio' => 'POS',
        ]);
         DB::table('cajas_categorias_movimientos')->insert([
            'categoria' => 'Ingreso',
            'medio' => 'Pago Link',
        ]);
        DB::table('cajas_categorias_movimientos')->insert([
            'categoria' => 'Ingreso',
            'medio' => 'Transferencia Bancaria',
        ]);
        DB::table('cajas_categorias_movimientos')->insert([
            'categoria' => 'Ingreso',
            'medio' => 'Credito',
        ]);
        DB::table('cajas_categorias_movimientos')->insert([
            'categoria' => 'Egreso',
            'medio' => 'Compra',
        ]);
        DB::table('cajas_categorias_movimientos')->insert([
            'categoria' => 'Egreso',
            'medio' => 'Gasto',
        ]);
    }
}
