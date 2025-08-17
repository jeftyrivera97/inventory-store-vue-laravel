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

        DB::table('users')->insert([
            'name' => 'Sistema',
            'email' => 'sistema@elbuenamigosouvenir.site',
            'password' => Hash::make('Jriver@1997'),
        ]);
        DB::table('users')->insert([
            'name' => 'Administracion',
            'email' => 'admin@elbuenamigosouvenir.site',
            'password' => Hash::make('@dm1n.s0uv3n1r'),
        ]);
        DB::table('users')->insert([
            'name' => 'Mayra Hernandez',
            'email' => 'caja1@elbuenamigosouvenir.site',
            'password' => Hash::make('C@j@1.s0uv3n1r'),
        ]);
        DB::table('users')->insert([
            'name' => 'Rommel Romero',
            'email' => 'caja2@elbuenamigosouvenir.site',
            'password' => Hash::make('C@j@2.s0uv3n1r'),
        ]);
        DB::table('users')->insert([
            'name' => 'Zimmer Romero',
            'email' => 'caja3@elbuenamigosouvenir.site',
            'password' => Hash::make('C@j@3.s0uv3n1r'),
        ]);
        DB::table('users')->insert([
            'name' => 'Caja4',
            'email' => 'caja4@elbuenamigosouvenir.site',
            'password' => Hash::make('C@j@3.s0uv3n1r'),
        ]);
    }
}
