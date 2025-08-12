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
            'descripcion' => 'Efectivo',
            'id_estado' => '1',
            'id_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now(),

        ]);
        DB::table('metodos_pagos')->insert([
            'descripcion' => 'Credito',
            'id_estado' => '1',
            'id_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now(),

        ]);
        DB::table('metodos_pagos')->insert([
            'descripcion' => 'POS Terminal Atlantida',
            'id_estado' => '1',
            'id_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('metodos_pagos')->insert([
            'descripcion' => 'POS Terminal BAC',
            'id_estado' => '1',
            'id_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('metodos_pagos')->insert([
            'descripcion' => 'POS Terminal Ficohsa',
            'id_estado' => '1',
            'id_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('metodos_pagos')->insert([
            'descripcion' => 'Pago Link Atlantida',
            'id_estado' => '1',
            'id_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('metodos_pagos')->insert([
            'descripcion' => 'Pago Link BAC',
            'id_estado' => '1',
            'id_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('metodos_pagos')->insert([
            'descripcion' => 'Pago Link Ficohsa',
            'id_estado' => '1',
            'id_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('metodos_pagos')->insert([
            'descripcion' => 'Transferencia Bancaria Atlantida',
            'id_estado' => '1',
            'id_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('metodos_pagos')->insert([
            'descripcion' => 'Transferencia Bancaria BAC',
            'id_estado' => '1',
            'id_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('metodos_pagos')->insert([
            'descripcion' => 'Transferencia Bancaria Ficohsa',
            'id_estado' => '1',
            'id_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
