<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class EstadoOperacionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('estados_operaciones')->insert([
            'descripcion' => 'Pagado',
        ]);
        DB::table('estados_operaciones')->insert([
            'descripcion' => 'Por Pagar',
        ]);
    }
}
