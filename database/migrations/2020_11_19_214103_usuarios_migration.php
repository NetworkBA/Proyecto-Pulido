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

          $table->increments('id');
          $table->string('Nombre');
          $table->string('Apellido_P');
          $table->string('Apellido_M');
          $table->string('Correo_Electronico');
          $table->string('CURP')->unique();
          $table->string('Contraseña')->unique();
          $table->integer('Tipo_Usuario')->unsigned();

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
