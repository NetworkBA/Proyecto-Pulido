<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ActividadesMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('Actividades', function (Blueprint $table) {

        $table->engine = 'InnoDB';
        $table->increments('id');
        $table->string('Nombre');
        $table->integer('Valor');
        $table->integer('id_Clase')->unsigned();
        $table->foreign('id_Clase')->references('id')->on('Clases')->onDelete('cascade');
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
        //
    }
}
