<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOficiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oficios', function (Blueprint $table) {
            $table->id();
            $table->string('oficiopdf');
            $table->string('titulo');
            $table->string('oficinausuario');
            $table->string('fecha');
            $table->string('tipocontrato');
            $table->string('estadosecretaria');
            $table->string('estadojefe');
            $table->string('estadosub');
            $table->string('estadocoti');
            $table->string('estadocomparativojefe');
            $table->string('estadocomparativosubjefe');
            $table->string('estadocomparativocotizador');

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
        Schema::dropIfExists('oficios');
    }
}
