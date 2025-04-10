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
        Schema::create('comprobante_detalles', function (Blueprint $table) {
            $table->id();
            $table->double('linea');
            $table->foreignId('id_comprobante')->nullable()->nullOnDelete()->constrained()->references('id')->on('comprobantes');
            $table->foreignId('id_producto')->nullable()->nullOnDelete()->constrained()->references('id')->on('productos');
            $table->double('cantidad');
            $table->double('precio_final');
            $table->double('total_linea');
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
        Schema::dropIfExists('comprobante_detalles');
    }
};
