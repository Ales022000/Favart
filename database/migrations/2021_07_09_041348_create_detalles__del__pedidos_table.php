<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetallesDelPedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalles__del__pedidos', function (Blueprint $table) {
            $table->id();
            $table->foreign('Id_Producto')->references('id')->on('productos');
            $table->float('Resumen_Precio', 6);
            $table->integer('Cantidad', 2);
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
        Schema::dropIfExists('detalles__del__pedidos');
    }
}
