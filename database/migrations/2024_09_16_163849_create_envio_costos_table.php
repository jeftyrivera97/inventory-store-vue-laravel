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
        Schema::create('envio_costos', function (Blueprint $table) {
            $table->id();
            $table->string('descripcion');
            $table->string('medidas')->nullable();
            $table->double('libras');
            $table->double('costo');
            $table->foreignId('id_tipo_envio')->nullable()->nullOnDelete()->constrained()->references('id')->on('envio_tipos');
            $table->foreignId('id_empresa_envio')->nullable()->nullOnDelete()->constrained()->references('id')->on('envio_empresas');
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
        Schema::dropIfExists('envio_costos');
    }
};
