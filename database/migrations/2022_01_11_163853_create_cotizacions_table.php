<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCotizacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cotizacions', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('provider_id');
            $table->foreign('provider_id')->references('id')->on('providers');

            $table->unsignedBigInteger('cotizador_id');
            $table->foreign('cotizador_id')->references('id')->on('users');

            $table->unsignedBigInteger('adquisicion_id');
            $table->foreign('adquisicion_id')->references('id')->on('users');

            $table->date('fecha');
            $table->integer('tiempoentrega');
            $table->enum('udtiempo',["Dias",'Semanas','Meses','Años']);
            $table->decimal('monto');
            $table->string('firmaproveedor')->nullable();
            $table->decimal('descuento')->nullable();
            $table->decimal('costofinal');
            $table->enum('esganador',['1','0'])->nullable();
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
        Schema::dropIfExists('cotizacions');
    }
}
