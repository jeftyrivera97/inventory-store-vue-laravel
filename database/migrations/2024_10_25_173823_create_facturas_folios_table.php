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
        Schema::create('facturas_folios', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_factura')->nullable()->nullOnDelete()->constrained()->references('id')->on('facturas');
            $table->foreignId('id_folio')->nullable()->nullOnDelete()->constrained()->references('id')->on('folios');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('facturas_folios');
    }
};
