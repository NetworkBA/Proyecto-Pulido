<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UsuariosMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('Usuarios', function (Blueprint $table) {

        $table->engine = 'InnoDB';
        $table->increments('id');
        $table->string('Nombre');
        $table->string('Apellido_P');
        $table->string('Apellido_M');
        $table->string('CURP');
        $table->integer('tipo_usuario_id')->unsigned();
        $table->foreign('tipo_usuario_id')->references('id')->on('Tipos_Usuarios');
        $table->timestamps();;
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
