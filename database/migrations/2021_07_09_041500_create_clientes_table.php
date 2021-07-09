<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->foreign('Id_Usuario')->references('id')->on('usuarios');
            $table->string('Nombre', 25);
            $table->string('Primer_Apellido', 25);
            $table->string('Segundo_Apellido', 25);
            $table->int('Edad', 2);
            $table->foreign('Id_Barrio')->references('id')->on('barrios');
            $table->foreign('Id_Distrito')->references('id')->on('distritos');
            $table->foreign('Id_Canton')->references('id')->on('cantons');
            $table->foreign('Id_Provincia')->references('id')->on('provincias');
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
        Schema::dropIfExists('clientes');
    }
}
