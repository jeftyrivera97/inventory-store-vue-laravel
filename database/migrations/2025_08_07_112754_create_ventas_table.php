<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('ventas', function (Blueprint $table) {
            $table->id();
            $table->string('codigo_venta');
            $table->dateTimeTz('fecha');
            $table->double('total');
            $table->foreignId('id_movimiento')->nullable()->nullOnDelete()->constrained()->references('id')->on('cajas_movimientos');
            $table->foreignId('id_comprobante')->nullable()->nullOnDelete()->constrained()->references('id')->on('comprobantes');
            $table->foreignId('id_estado')->nullable()->nullOnDelete()->constrained()->references('id')->on('estados');
            $table->foreignId('id_usuario')->nullable()->nullOnDelete()->constrained()->references('id')->on('users');
            $table->timestamps(precision: 0);
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cajas_ventas');
    }
};
