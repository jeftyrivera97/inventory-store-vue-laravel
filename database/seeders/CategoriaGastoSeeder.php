<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriaGastoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('categorias_gastos')->insert([
            'descripcion' => 'Capacitación y Cursos',
            'id_tipo' => '7', // Administrativos
            'id_estado' => '1',
            'id_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categorias_gastos')->insert([
            'descripcion' => 'Combustibles de Vehículos',
            'id_tipo' => '5', // Operativos
            'id_estado' => '1',
            'id_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categorias_gastos')->insert([
            'descripcion' => 'Comisiones Bancarias',
            'id_tipo' => '9', // Financieros
            'id_estado' => '1',
            'id_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categorias_gastos')->insert([
            'descripcion' => 'Compra de Alimentos y Bebidas',
            'id_tipo' => '7', // Administrativos
            'id_estado' => '1',
            'id_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categorias_gastos')->insert([
            'descripcion' => 'Compra de Herramientas',
            'id_tipo' => '5', // Operativos
            'id_estado' => '1',
            'id_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categorias_gastos')->insert([
            'descripcion' => 'Compra de Limpieza',
            'id_tipo' => '7', // Administrativos
            'id_estado' => '1',
            'id_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categorias_gastos')->insert([
            'descripcion' => 'Compra de Papelería',
            'id_tipo' => '7', // Administrativos
            'id_estado' => '1',
            'id_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categorias_gastos')->insert([
            'descripcion' => 'Diseño Gráfico/Impresión',
            'id_tipo' => '8', // Ventas y Marketing
            'id_estado' => '1',
            'id_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categorias_gastos')->insert([
            'descripcion' => 'Equipo de Oficina',
            'id_tipo' => '7', // Administrativos
            'id_estado' => '1',
            'id_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categorias_gastos')->insert([
            'descripcion' => 'Gastos Administrativos',
            'id_tipo' => '7', // Administrativos
            'id_estado' => '1',
            'id_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categorias_gastos')->insert([
            'descripcion' => 'Gastos Bancarios',
            'id_tipo' => '9', // Financieros
            'id_estado' => '1',
            'id_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categorias_gastos')->insert([
            'descripcion' => 'Gastos de Salud',
            'id_tipo' => '7', // Administrativos
            'id_estado' => '1',
            'id_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categorias_gastos')->insert([
            'descripcion' => 'Gastos Legales',
            'id_tipo' => '6', // No Operativos
            'id_estado' => '1',
            'id_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categorias_gastos')->insert([
            'descripcion' => 'Intereses Financieros',
            'id_tipo' => '9', // Financieros
            'id_estado' => '1',
            'id_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categorias_gastos')->insert([
            'descripcion' => 'Mantenimiento de Equipos',
            'id_tipo' => '5', // Operativos
            'id_estado' => '1',
            'id_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categorias_gastos')->insert([
            'descripcion' => 'Mantenimiento de Local',
            'id_tipo' => '5', // Operativos
            'id_estado' => '1',
            'id_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categorias_gastos')->insert([
            'descripcion' => 'Mantenimiento de Vehículos',
            'id_tipo' => '5', // Operativos
            'id_estado' => '1',
            'id_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categorias_gastos')->insert([
            'descripcion' => 'Mobiliario de Oficina',
            'id_tipo' => '7', // Administrativos
            'id_estado' => '1',
            'id_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categorias_gastos')->insert([
            'descripcion' => 'Otros Gastos Operativos',
            'id_tipo' => '5', // Operativos
            'id_estado' => '1',
            'id_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categorias_gastos')->insert([
            'descripcion' => 'Pagos Servicios Externos',
            'id_tipo' => '5', // Operativos
            'id_estado' => '1',
            'id_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categorias_gastos')->insert([
            'descripcion' => 'Pagos Servicios Funebres',
            'id_tipo' => '10', // Extraordinarios
            'id_estado' => '1',
            'id_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categorias_gastos')->insert([
            'descripcion' => 'Pago de Agua Potable',
            'id_tipo' => '3', // Fijos
            'id_estado' => '1',
            'id_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categorias_gastos')->insert([
            'descripcion' => 'Pago de Alquiler Local',
            'id_tipo' => '3', // Fijos
            'id_estado' => '1',
            'id_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categorias_gastos')->insert([
            'descripcion' => 'Pago de Bonos',
            'id_tipo' => '2', // Indirectos
            'id_estado' => '1',
            'id_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categorias_gastos')->insert([
            'descripcion' => 'Pago de Contabilidad',
            'id_tipo' => '7', // Administrativos
            'id_estado' => '1',
            'id_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categorias_gastos')->insert([
            'descripcion' => 'Pago de Energía Eléctrica',
            'id_tipo' => '3', // Fijos
            'id_estado' => '1',
            'id_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categorias_gastos')->insert([
            'descripcion' => 'Pago de Impuestos Generales',
            'id_tipo' => '6', // No Operativos
            'id_estado' => '1',
            'id_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categorias_gastos')->insert([
            'descripcion' => 'Pago de Impuestos Municipales',
            'id_tipo' => '6', // No Operativos
            'id_estado' => '1',
            'id_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categorias_gastos')->insert([
            'descripcion' => 'Pago de Impuestos Renta',
            'id_tipo' => '6', // No Operativos
            'id_estado' => '1',
            'id_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categorias_gastos')->insert([
            'descripcion' => 'Pago de Impuestos SAR',
            'id_tipo' => '6', // No Operativos
            'id_estado' => '1',
            'id_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categorias_gastos')->insert([
            'descripcion' => 'Pago de Limpieza',
            'id_tipo' => '7', // Administrativos
            'id_estado' => '1',
            'id_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categorias_gastos')->insert([
            'descripcion' => 'Pago de Nómina',
            'id_tipo' => '1', // Directos
            'id_estado' => '1',
            'id_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categorias_gastos')->insert([
            'descripcion' => 'Pago de Permisos Municipales',
            'id_tipo' => '6', // No Operativos
            'id_estado' => '1',
            'id_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categorias_gastos')->insert([
            'descripcion' => 'Pago de Planilla',
            'id_tipo' => '1', // Directos
            'id_estado' => '1',
            'id_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categorias_gastos')->insert([
            'descripcion' => 'Pago de Prestamo Bancario',
            'id_tipo' => '9', // Financieros
            'id_estado' => '1',
            'id_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categorias_gastos')->insert([
            'descripcion' => 'Pago de Prestamo Personal',
            'id_tipo' => '9', // Financieros
            'id_estado' => '1',
            'id_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categorias_gastos')->insert([
            'descripcion' => 'Pago de Teléfono',
            'id_tipo' => '3', // Fijos
            'id_estado' => '1',
            'id_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categorias_gastos')->insert([
            'descripcion' => 'Pago de Transporte',
            'id_tipo' => '5', // Operativos
            'id_estado' => '1',
            'id_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categorias_gastos')->insert([
            'descripcion' => 'Pago de Internet',
            'id_tipo' => '3', // Fijos
            'id_estado' => '1',
            'id_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categorias_gastos')->insert([
            'descripcion' => 'Publicidad en Redes Sociales',
            'id_tipo' => '8', // Ventas y Marketing
            'id_estado' => '1',
            'id_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categorias_gastos')->insert([
            'descripcion' => 'Publicidad y Marketing',
            'id_tipo' => '8', // Ventas y Marketing
            'id_estado' => '1',
            'id_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categorias_gastos')->insert([
            'descripcion' => 'Reparaciones Generales',
            'id_tipo' => '5', // Operativos
            'id_estado' => '1',
            'id_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categorias_gastos')->insert([
            'descripcion' => 'Seguros de Vehículos',
            'id_tipo' => '6', // No Operativos
            'id_estado' => '1',
            'id_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categorias_gastos')->insert([
            'descripcion' => 'Seguros del Local',
            'id_tipo' => '6', // No Operativos
            'id_estado' => '1',
            'id_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categorias_gastos')->insert([
            'descripcion' => 'Software y Licencias',
            'id_tipo' => '7', // Administrativos
            'id_estado' => '1',
            'id_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categorias_gastos')->insert([
            'descripcion' => 'Suscripciones en Línea',
            'id_tipo' => '7', // Administrativos
            'id_estado' => '1',
            'id_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categorias_gastos')->insert([
            'descripcion' => 'Uniformes de Personal',
            'id_tipo' => '2', // Indirectos
            'id_estado' => '1',
            'id_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categorias_gastos')->insert([
            'descripcion' => 'Viáticos de Viaje',
            'id_tipo' => '5', // Operativos
            'id_estado' => '1',
            'id_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
};
