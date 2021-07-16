<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarritoDeComprasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carrito_de_compras', function (Blueprint $table) {
            $table->id();
            $table->float('Resumen_Precio', 7);
            $table->float('Cantidad', 3);
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::drop('carrito_de_compras');
    }
}