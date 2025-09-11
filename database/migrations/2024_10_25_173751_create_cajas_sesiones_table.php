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
            $table->date('fecha');
            $table->dateTimeTz('fecha_apertura');
            $table->dateTimeTz('fecha_cierre')->nullable();
            $table->foreignId('id_caja')->nullable()->nullOnDelete()->constrained()->references('id')->on('cajas');
            $table->double('caja_efectivo_inicial');
            $table->double('caja_efectivo_final')->nullable();
            $table->double('diferencia')->nullable();
            $table->double('venta_efectivo');
            $table->double('venta_tarjeta');
            $table->double('venta_transferencia');
            $table->double('venta_pago_link');
            $table->double('venta_cheque');
            $table->double('venta_credito');
            $table->double('total_contado')->nullable();
            $table->foreignId('id_estado_sesion')->nullable()->nullOnDelete()->constrained()->references('id')->on('estados_sesiones');
            $table->foreignId('id_estado')->nullable()->nullOnDelete()->constrained()->references('id')->on('estados');
            $table->foreignId('id_usuario')->nullable()->nullOnDelete()->constrained()->references('id')->on('users');
            $table->foreignId('id_usuario_auditor')->nullable()->nullOnDelete()->constrained()->references('id')->on('users');
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
