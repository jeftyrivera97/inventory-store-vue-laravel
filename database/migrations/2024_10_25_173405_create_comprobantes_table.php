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
        Schema::create('comprobantes', function (Blueprint $table) {
            $table->id();
            $table->string('codigo_comprobante');
            $table->date('fecha');
            $table->dateTimeTz('fecha_hora');
            $table->date('fecha_vencimiento');
            $table->foreignId('id_cliente')->nullable()->nullOnDelete()->constrained()->references('id')->on('clientes');
            $table->double('gravado15')->nullable();
            $table->double('gravado18')->nullable();
            $table->double('impuesto15')->nullable();
            $table->double('impuesto18')->nullable();
            $table->double('exento')->nullable();
            $table->double('exonerado')->nullable();
            $table->double('descuentos')->nullable();
            $table->double('total')->nullable();
            $table->foreignId('id_comprobante_categoria')->nullable()->nullOnDelete()->constrained()->references('id')->on('comprobante_categorias');
            $table->foreignId('id_venta_categoria')->nullable()->nullOnDelete()->constrained()->references('id')->on('venta_categorias');
            $table->foreignId('id_pago_categoria')->nullable()->nullOnDelete()->constrained()->references('id')->on('pago_categorias');
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
        Schema::dropIfExists('comprobantes');
    }
};
