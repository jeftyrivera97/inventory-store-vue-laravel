<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ImpuestoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('impuestos')->insert([
            'descripcion' => '15%',
            'valor' => 1.15,
            'id_estado' => '1',
        ]);
        DB::table('impuestos')->insert([
            'descripcion' => '18%',
            'valor' => 1.18,
            'id_estado' => '1',
        ]);
        DB::table('impuestos')->insert([
            'descripcion' => 'Exento',
            'valor' => 0,
            'id_estado' => '1',
        ]);
        DB::table('impuestos')->insert([
            'descripcion' => 'Exonerado',
            'valor' => 0,
            'id_estado' => '1',
        ]);
    }
}
