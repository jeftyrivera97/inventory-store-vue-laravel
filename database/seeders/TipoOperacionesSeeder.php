<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class TipoOperacionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tipos_operaciones')->insert([
            'descripcion' => 'Contado',
            'id_estado' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('tipos_operaciones')->insert([
            'descripcion' => 'Credito',
            'id_estado' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
