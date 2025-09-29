<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class MetodosPagosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('metodos_pagos')->insert([
            'descripcion' => 'Credito',
            'id_tipo_operacion' => '2',
            'id_estado' => '2',
            'id_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now(),

        ]);
        DB::table('metodos_pagos')->insert([
            'descripcion' => 'Efectivo',
            'id_tipo_operacion' => '1',
            'id_estado' => '1',
            'id_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now(),

        ]);
        DB::table('metodos_pagos')->insert([
            'descripcion' => 'Tarjeta Credito/Debito',
            'id_tipo_operacion' => '1',
            'id_estado' => '1',
            'id_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('metodos_pagos')->insert([
            'descripcion' => 'Transferencia Bancaria',
            'id_tipo_operacion' => '1',
            'id_estado' => '1',
            'id_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('metodos_pagos')->insert([
            'descripcion' => 'Pago Link',
            'id_tipo_operacion' => '1',
            'id_estado' => '1',
            'id_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('metodos_pagos')->insert([
            'descripcion' => 'Cheque',
            'id_tipo_operacion' => '1',
            'id_estado' => '1',
            'id_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
          DB::table('metodos_pagos')->insert([
            'descripcion' => 'Gift Card',
            'id_tipo_operacion' => '2',
            'id_estado' => '1',
            'id_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
