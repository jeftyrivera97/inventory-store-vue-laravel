<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriaCompraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // ==========================
        // COMPRAS OPERACIONALES (id_tipo = 1)
        // ==========================
        DB::table('categorias_compras')->insert([
            'descripcion' => 'Llaveros',
            'id_tipo' => '1',
            'id_estado' => '1',
            'id_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categorias_compras')->insert([
            'descripcion' => 'Vinos y licores',
            'id_tipo' => '1',
            'id_estado' => '1',
            'id_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categorias_compras')->insert([
            'descripcion' => 'Chocolates y dulces',
            'id_tipo' => '1',
            'id_estado' => '1',
            'id_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categorias_compras')->insert([
            'descripcion' => 'Ropas y accesorios',
            'id_tipo' => '1',
            'id_estado' => '1',
            'id_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categorias_compras')->insert([
            'descripcion' => 'Imanes de nevera',
            'id_tipo' => '1',
            'id_estado' => '1',
            'id_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categorias_compras')->insert([
            'descripcion' => 'Camisetas turísticas',
            'id_tipo' => '1',
            'id_estado' => '1',
            'id_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categorias_compras')->insert([
            'descripcion' => 'Gorras y sombreros',
            'id_tipo' => '1',
            'id_estado' => '1',
            'id_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categorias_compras')->insert([
            'descripcion' => 'Postales',
            'id_tipo' => '1',
            'id_estado' => '1',
            'id_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categorias_compras')->insert([
            'descripcion' => 'Tazas y vasos',
            'id_tipo' => '1',
            'id_estado' => '1',
            'id_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categorias_compras')->insert([
            'descripcion' => 'Platos decorativos',
            'id_tipo' => '1',
            'id_estado' => '1',
            'id_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categorias_compras')->insert([
            'descripcion' => 'Joyería artesanal',
            'id_tipo' => '1',
            'id_estado' => '1',
            'id_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categorias_compras')->insert([
            'descripcion' => 'Pulseras y collares típicos',
            'id_tipo' => '1',
            'id_estado' => '1',
            'id_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categorias_compras')->insert([
            'descripcion' => 'Ropa típica',
            'id_tipo' => '1',
            'id_estado' => '1',
            'id_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categorias_compras')->insert([
            'descripcion' => 'Bolsos y mochilas artesanales',
            'id_tipo' => '1',
            'id_estado' => '1',
            'id_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categorias_compras')->insert([
            'descripcion' => 'Dulces típicos',
            'id_tipo' => '1',
            'id_estado' => '1',
            'id_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categorias_compras')->insert([
            'descripcion' => 'Chocolates locales',
            'id_tipo' => '1',
            'id_estado' => '1',
            'id_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categorias_compras')->insert([
            'descripcion' => 'Café o té regional',
            'id_tipo' => '1',
            'id_estado' => '1',
            'id_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categorias_compras')->insert([
            'descripcion' => 'Licores tradicionales',
            'id_tipo' => '1',
            'id_estado' => '1',
            'id_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categorias_compras')->insert([
            'descripcion' => 'Especias locales',
            'id_tipo' => '1',
            'id_estado' => '1',
            'id_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categorias_compras')->insert([
            'descripcion' => 'Posters y cuadros',
            'id_tipo' => '1',
            'id_estado' => '1',
            'id_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categorias_compras')->insert([
            'descripcion' => 'Mapas ilustrados',
            'id_tipo' => '1',
            'id_estado' => '1',
            'id_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categorias_compras')->insert([
            'descripcion' => 'Libretas y agendas',
            'id_tipo' => '1',
            'id_estado' => '1',
            'id_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categorias_compras')->insert([
            'descripcion' => 'Plumas y marcadores decorativos',
            'id_tipo' => '1',
            'id_estado' => '1',
            'id_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categorias_compras')->insert([
            'descripcion' => 'Peluches temáticos',
            'id_tipo' => '1',
            'id_estado' => '1',
            'id_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categorias_compras')->insert([
            'descripcion' => 'Juguetes tradicionales',
            'id_tipo' => '1',
            'id_estado' => '1',
            'id_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categorias_compras')->insert([
            'descripcion' => 'Juegos de mesa o rompecabezas locales',
            'id_tipo' => '1',
            'id_estado' => '1',
            'id_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categorias_compras')->insert([
            'descripcion' => 'Fundas para celular personalizadas',
            'id_tipo' => '1',
            'id_estado' => '1',
            'id_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categorias_compras')->insert([
            'descripcion' => 'Zapatos o sandalias artesanales',
            'id_tipo' => '1',
            'id_estado' => '1',
            'id_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // ==========================
        // COMPRAS DIRECTAS (id_tipo = 2)
        // ==========================
        DB::table('categorias_compras')->insert([
            'descripcion' => 'Artesanías en madera',
            'id_tipo' => '2',
            'id_estado' => '1',
            'id_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categorias_compras')->insert([
            'descripcion' => 'Artesanías en cerámica',
            'id_tipo' => '2',
            'id_estado' => '1',
            'id_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categorias_compras')->insert([
            'descripcion' => 'Jarrones artesanales',
            'id_tipo' => '2',
            'id_estado' => '1',
            'id_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categorias_compras')->insert([
            'descripcion' => 'Alfarería tradicional',
            'id_tipo' => '2',
            'id_estado' => '1',
            'id_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categorias_compras')->insert([
            'descripcion' => 'Cestas y canastas tejidas',
            'id_tipo' => '2',
            'id_estado' => '1',
            'id_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categorias_compras')->insert([
            'descripcion' => 'Arte en vidrio',
            'id_tipo' => '2',
            'id_estado' => '1',
            'id_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categorias_compras')->insert([
            'descripcion' => 'Arte en metal',
            'id_tipo' => '2',
            'id_estado' => '1',
            'id_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categorias_compras')->insert([
            'descripcion' => 'Arte en piedra',
            'id_tipo' => '2',
            'id_estado' => '1',
            'id_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categorias_compras')->insert([
            'descripcion' => 'Arte en cuero',
            'id_tipo' => '2',
            'id_estado' => '1',
            'id_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categorias_compras')->insert([
            'descripcion' => 'Carteras y billeteras artesanales',
            'id_tipo' => '2',
            'id_estado' => '1',
            'id_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // ==========================
        // COMPRAS INDIRECTAS (id_tipo = 3)
        // ==========================
        DB::table('categorias_compras')->insert([
            'descripcion' => 'Decoración para el hogar',
            'id_tipo' => '3',
            'id_estado' => '1',
            'id_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categorias_compras')->insert([
            'descripcion' => 'Cojines y textiles decorativos',
            'id_tipo' => '3',
            'id_estado' => '1',
            'id_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categorias_compras')->insert([
            'descripcion' => 'Velas artesanales',
            'id_tipo' => '3',
            'id_estado' => '1',
            'id_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categorias_compras')->insert([
            'descripcion' => 'Hamacas',
            'id_tipo' => '3',
            'id_estado' => '1',
            'id_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // ==========================
        // COMPRAS DE ACTIVOS FIJOS (id_tipo = 6)
        // ==========================
        DB::table('categorias_compras')->insert([
            'descripcion' => 'Mobiliario de exhibición',
            'id_tipo' => '6',
            'id_estado' => '1',
            'id_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categorias_compras')->insert([
            'descripcion' => 'Estantes o vitrinas',
            'id_tipo' => '6',
            'id_estado' => '1',
            'id_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categorias_compras')->insert([
            'descripcion' => 'Equipos de punto de venta (POS)',
            'id_tipo' => '6',
            'id_estado' => '1',
            'id_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categorias_compras')->insert([
            'descripcion' => 'Decoración fija para tienda',
            'id_tipo' => '6',
            'id_estado' => '1',
            'id_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
