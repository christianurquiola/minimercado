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
        Schema::create('punto_ventas', function (Blueprint $table) {
            $table->id();
            $table->string('codigo')->unique(); // Código único del punto de venta
            $table->string('nombre'); // Nombre del punto de venta
            $table->text('descripcion')->nullable(); // Descripción del punto de venta
            $table->string('direccion')->nullable(); // Dirección del punto de venta
            $table->string('telefono')->nullable(); // Teléfono de contacto
            $table->timestamps();
            $table->softDeletes(); // Añadir softDeletes
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('punto_ventas');
    }
};
