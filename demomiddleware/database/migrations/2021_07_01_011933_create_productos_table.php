<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id();

            $table->string('Nombre');
            $table->string('Precio');
            $table->string('Descripcion');
            $table->string('Marca');
            $table->string('Distribuidora');
            $table->string('TipoProducto');
            $table->string('FechaFabricacion');
            $table->string('FechaVencimiento');
            $table->string('Foto');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
}
