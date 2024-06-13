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
        Schema::create('monedas', function (Blueprint $table) {
            $table->id();
            $table->string('codigo')->unique(); // Código de la moneda (e.g., USD, EUR)
            $table->string('nombre')->unique(); // Nombre de la moneda
            $table->string('simbolo')->nullable(); // Símbolo de la moneda (e.g., $, €)
            $table->decimal('tasa_cambio', 15, 6)->default(1.000000); // Tasa de cambio respecto a una moneda base
            $table->boolean('activo')->default(true); // Indica si la moneda está activa
            $table->timestamps();
            $table->softDeletes(); // Añadir softDeletes
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('monedas');
    }
};
