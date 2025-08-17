<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $this->call([
            UserSeeder::class,
            EstadoOperacionesSeeder::class,
            EstadoProductosOnlineSeeder::class,
            EstadoSesionesSeeder::class,
            EstadoFacturasSeeder::class,
            EstadoSeeder::class,

            ImpuestoSeeder::class,
            EmpresaSeeder::class,

            TipoFacturasSeeder::class,
            TipoOperacionesSeeder::class,

            CategoriaMovimientoSeeder::class,
            MediosMovimientosSeeder::class,
            CategoriaFacturasSeeder::class,
            MetodosPagosSeeder::class,

        ]);
    }
}
