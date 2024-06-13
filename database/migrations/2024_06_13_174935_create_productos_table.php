<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('codigo')->unique(); // Añadir campo de código de producto
            $table->string('nombre');
            $table->text('descripcion')->nullable();
            $table->decimal('precio', 8, 2);
            $table->integer('cantidad');
            $table->unsignedBigInteger('categoria_id'); // Añadir categoria_id
            $table->timestamps();
            $table->softDeletes(); // Añadir softDeletes

            // Definir clave foránea
            $table->foreign('categoria_id')->references('id')->on('categorias')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('productos');
    }
}

