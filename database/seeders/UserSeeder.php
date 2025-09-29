<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // Insertar usuarios
        DB::table('users')->insert([
            'id' => 1, // puedes fijar el id para luego usarlo fácil
            'name' => 'Sistema',
            'email' => 'sistema@elbuenamigosouvenir.site',
            'password' => Hash::make('J.river@1997.souvenir'),
        ]);
        DB::table('users')->insert([
            'id' => 2,
            'name' => 'Administracion',
            'email' => 'admin@elbuenamigosouvenir.site',
            'password' => Hash::make('@dm1n.s0uv3n1r'),
        ]);
        DB::table('users')->insert([
            'id' => 3,
            'name' => 'Mayra Hernandez',
            'email' => 'mayrah@elbuenamigosouvenir.site',
            'password' => Hash::make('M@yr@S0v3n1r'),
        ]);
        DB::table('users')->insert([
            'id' => 4,
            'name' => 'Rommel Romero',
            'email' => 'rommelr@elbuenamigosouvenir.site',
            'password' => Hash::make('R0mm3lS0uv3n1r'),
        ]);
        DB::table('users')->insert([
            'id' => 5,
            'name' => 'Zimmer Romero',
            'email' => 'zimmer@elbuenamigosouvenir.site',
            'password' => Hash::make('Z1mm3rS0uv3n1r'),
        ]);
        DB::table('users')->insert([
            'id' => 6,
            'name' => 'Sonia Hernandez',
            'email' => 'soniah@elbuenamigosouvenir.site',
            'password' => Hash::make('S0n1@C@j@'),
        ]);

        // Asignar roles en la tabla pivote role_user
        // Aquí suponemos que ya tienes roles con id 1 = sistema, 2 = admin, 3 = caja
        DB::table('role_user')->insert([
            ['user_id' => 1, 'role_id' => 1, 'id_estado' => 1, 'created_at' => now(), 'updated_at' => now()], // Sistema -> rol sistema
            ['user_id' => 2, 'role_id' => 2, 'id_estado' => 1,  'created_at' => now(), 'updated_at' => now()], // Administracion -> admin
            ['user_id' => 3, 'role_id' => 2, 'id_estado' => 1,  'created_at' => now(), 'updated_at' => now()], // Mayra -> admin
            ['user_id' => 4, 'role_id' => 2,  'id_estado' => 1, 'created_at' => now(), 'updated_at' => now()], // Rommel -> admin
            ['user_id' => 5, 'role_id' => 2, 'id_estado' => 1,  'created_at' => now(), 'updated_at' => now()], // Zimmer -> admin
            ['user_id' => 6, 'role_id' => 3,  'id_estado' => 1, 'created_at' => now(), 'updated_at' => now()], // Sonia -> caja
        ]);
    }
}
