<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOficiodetallesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oficiodetalles', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('oficio_id');
            $table->foreign('oficio_id')->references('id')->on('oficios');

            
            $table->string('nombre');
            $table->integer('unidades');
            $table->string('descripcion');
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
        Schema::dropIfExists('oficiodetalles');
    }
}
