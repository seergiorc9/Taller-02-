<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecetasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recetas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_cliente')->unsigned();    
            $table-> foreign ('id_cliente')-> references ('id')-> on ('clientes');
            $table->integer('id_farmaco')->unsigned();
            $table-> foreign ('id_farmaco')-> references ('id')-> on ('farmacos');
            $table->string('comentario');
            $table->integer('total');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recetas');
    }
}
