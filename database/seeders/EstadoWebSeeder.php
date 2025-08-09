<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class EstadoWebSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('estados_productos_online')->insert([
            'descripcion' => 'Habilitado',
        ]);
        DB::table('estados_productos_online')->insert([
            'descripcion' => 'No Habilitado',
        ]);
    }
}
