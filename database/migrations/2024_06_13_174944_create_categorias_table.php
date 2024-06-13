<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriasTable extends Migration
{
    public function up()
    {
        Schema::create('categorias', function (Blueprint $table) {
            $table->id();
            $table->string('codigo')->unique(); // Añadir campo de código de categoría
            $table->string('nombre')->unique();
            $table->text('descripcion')->nullable();
            $table->timestamps();
            $table->softDeletes(); // Añadir softDeletes
        });
    }

    public function down()
    {
        Schema::dropIfExists('categorias');
    }
}
