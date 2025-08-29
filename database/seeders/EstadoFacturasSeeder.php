<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EstadoFacturasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         DB::table('estados_comprobantes')->insert([
            'descripcion' => 'Anulada',
        ]);
        DB::table('estados_comprobantes')->insert([
            'descripcion' => 'Registrada',
        ]);
         DB::table('estados_comprobantes')->insert([
            'descripcion' => 'Pagada',
        ]);
    }
}
