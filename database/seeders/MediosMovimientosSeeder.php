<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MediosMovimientosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('medios_movimientos')->insert([
            'descripcion' => 'Credito',
            'id_estado' => '1',
            'id_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('medios_movimientos')->insert([
            'descripcion' => 'Efectivo',
            'id_estado' => '1',
            'id_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('medios_movimientos')->insert([
            'descripcion' => 'Tarjeta Credito/Debito',
            'id_estado' => '1',
            'id_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('medios_movimientos')->insert([
            'descripcion' => 'Transferencia Bancaria',
            'id_estado' => '1',
            'id_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('medios_movimientos')->insert([
            'descripcion' => 'Pago Link',
            'id_estado' => '1',
            'id_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('medios_movimientos')->insert([
            'descripcion' => 'Cheque',
            'id_estado' => '1',
            'id_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('medios_movimientos')->insert([
            'descripcion' => 'Compra',
            'id_estado' => '1',
            'id_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('medios_movimientos')->insert([
            'descripcion' => 'Gasto',
            'id_estado' => '1',
            'id_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
