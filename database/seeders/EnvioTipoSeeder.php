<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class EnvioTipoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('envio_tipos')->insert([
            'descripcion' => 'Nacional',
            'id_estado' => '1',
        ]);
        DB::table('envio_tipos')->insert([
            'descripcion' => 'Internacional',
            'id_estado' => '1',
        ]);
    }
}
