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
        Schema::create('cajas', function (Blueprint $table) {
            $table->id();
            $table->string('descripcion');
            $table->double('caja_inicial');
            $table->double('caja_final');
            $table->double('efectivo');
            $table->double('pos');
            $table->double('deposito');
            $table->double('credito');
            $table->foreignId('estado_caja')->nullable()->nullOnDelete()->constrained()->references('id')->on('estado_cajas');
            $table->dateTimeTz('fecha');
            $table->dateTimeTz('apertura');
            $table->dateTimeTz('cierre');
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
        Schema::dropIfExists('cajas');
    }
};
