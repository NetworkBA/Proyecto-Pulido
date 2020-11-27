<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CursoMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('Curso', function (Blueprint $table) {

        $table->engine = 'InnoDB';
        $table->increments('id');
        $table->integer('id_Clase')->unsigned();
        $table->integer('id_Estudiante')->unsigned();

        $table->foreign('id_Clase')->references('id')->on('Clases')->onDelete('cascade');
        $table->foreign('id_Estudiante')->references('id')->on('Estudiantes')->onDelete('cascade');
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
