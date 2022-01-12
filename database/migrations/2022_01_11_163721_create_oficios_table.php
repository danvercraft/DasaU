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


            $table->unsignedBigInteger('tag_id');
            $table->foreign('tag_id')->references('id')->on('tags');

            $table->unsignedBigInteger('jefe_id');
            $table->foreign('jefe_id')->references('id')->on('users');

            $table->unsignedBigInteger('subjefe_id');
            $table->foreign('subjefe_id')->references('id')->on('users');

            $table->unsignedBigInteger('cotizador_id');
            $table->foreign('cotizador_id')->references('id')->on('users');

            $table->unsignedBigInteger('secretaria_id');
            $table->foreign('secretaria_id')->references('id')->on('users');

            $table->string('oficiopdf');
            $table->string('titulo');
            $table->string('oficinausuario');
            $table->date('fecha');
            $table->string('tipocontrato');
            $table->enum('estadosecretaria',['1','0']);
            $table->enum('estadojefe', ['1','0']);
            $table->enum('estadosub', ['1','0']);
            $table->enum('estadocoti', ['1','0']);
            $table->enum('estadocomparativojefe', ['1','0']);
            $table->enum('estadocomparativosubjefe', ['1','0']);
            $table->enum('estadocomparativocotizador', ['1','0']);

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
