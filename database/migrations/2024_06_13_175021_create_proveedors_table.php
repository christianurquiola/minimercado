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
        Schema::create('proveedors', function (Blueprint $table) {
            $table->id();
            $table->string('codigo')->unique(); // Código único del proveedor
            $table->string('nombre'); // Nombre del proveedor
            $table->string('contacto'); // Nombre del contacto principal
            $table->string('telefono')->nullable(); // Teléfono de contacto
            $table->string('email')->nullable(); // Email de contacto
            $table->string('direccion')->nullable(); // Dirección del proveedor
            $table->timestamps();
            $table->softDeletes(); // Añadir softDeletes
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proveedors');
    }
};
