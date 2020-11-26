<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ClasesMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

      Schema::create('Clases', function (Blueprint $table) {

        $table->engine = 'InnoDB';
        $table->increments('id');
        $table->integer('id_Materia')->unsigned();
        $table->integer('id_Profesor')->unsigned();

        $table->foreign('id_Materia')->references('id')->on('Materias');
        $table->foreign('id_Profesor')->references('id')->on('Usuarios');
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
