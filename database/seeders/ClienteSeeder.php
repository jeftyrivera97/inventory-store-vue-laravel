<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('clientes')->insert([
            'codigo_cliente' => '0000-0000-000000',
            'razon_social' => 'Consumidor Final',
            'nombre' => 'Consumidor',
            'apellido' => 'Final',
            'direccion' => 'N/A',
            'telefono' => 'N/A',
            'correo' => 'N/A',
            'id_estado' => '1',
            'id_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
