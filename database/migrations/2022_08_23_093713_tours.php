<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Tours extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Estructura de la tabla
        Schema::create('tours', function (Blueprint $table) {

            $table->engine = 'InnoDB';
            $table->bigIncrements('id');


            $table->bigInteger('categoria_id')->unsigned();

            $table->string('nombre_tour');

            $table->string('lugar_tour');

            $table->string('recomendacion');

            $table->string('numero_de_personas');

            $table->string('fecha_tour');

            $table->timestamps();


            $table->foreign('categoria_id')->references('id')->on('categorias')->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
