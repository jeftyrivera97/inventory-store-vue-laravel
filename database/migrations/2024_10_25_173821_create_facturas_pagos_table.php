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
        Schema::create('facturas_pagos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_factura')->nullable()->nullOnDelete()->constrained()->references('id')->on('facturas');
            $table->foreignId('id_metodo_pago')->nullable()->nullOnDelete()->constrained()->references('id')->on('metodos_pagos');
            $table->dateTimeTz('fecha_hora');
            $table->string('referencia')->nullable();
            $table->string('comentario')->nullable();
            $table->timestamps(precision: 0);
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('facturas_pagos');
    }
};
