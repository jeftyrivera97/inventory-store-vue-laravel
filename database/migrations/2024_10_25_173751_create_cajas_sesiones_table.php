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
        Schema::create('cajas_sesiones', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_caja')->nullable()->nullOnDelete()->constrained()->references('id')->on('cajas');
            $table->double('saldo_inicial');
            $table->double('saldo_final');
            $table->dateTimeTz('fecha_apertura');
            $table->dateTimeTz('fecha_cierre');
            $table->double('venta_efectivo');
            $table->double('venta_pos');
            $table->double('venta_deposito');
            $table->double('venta_credito');
            $table->foreignId('id_estado_sesion')->nullable()->nullOnDelete()->constrained()->references('id')->on('estados_sesiones');
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
        Schema::dropIfExists('cajas_sesiones');
    }
};
