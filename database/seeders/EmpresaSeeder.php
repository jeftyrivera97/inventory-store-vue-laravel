<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class EmpresaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('empresas')->insert([
            'codigo_empresa' => '01011967008088',
            'descripcion' => "Buen Amigo's Souvenir's",
            'razon_social' => 'Maira Regina Hernandez Moreno',
            'direccion' => 'Barrio El Iman, 12 calle, Frente Restaurante 01012, casa #1217. La Ceiba, Atlantida',
            'ciudad' => 'La Ceiba',
            'departamento' => 'Atlantida',
            'telefono' => "(504)2440-1075",
            'celular' => "(504)3312-8877",
            'correo' => 'souvenirsbuenamigo@yahoo.com',
            'cai' => '1CBEC6-4521D0-7499E0-63BE03-09099C-E8',
            'id_estado' => 1,
        ]);
       
    }
}
