<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlumnoMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('Estudiantes', function (Blueprint $table) {

        $table->engine = 'InnoDB';

        $table->increments('id');
        $table->string('Nombre');
        $table->string('Apellido_P');
        $table->string('Apellido_M')->nullable();;
        $table->string('CURP');
        $table->string('Fecha_Nacimiento');
        $table->integer('id_tipo_vialidad')->unsigned();
        $table->string('Tramo');
        $table->integer('id_administracion_vialidad')->unsigned();
        $table->integer('id_transito')->unsigned();
        $table->integer('id_margen')->unsigned();
        $table->string('Nombre_vialidad');
        $table->integer('Kilometro')->nullable();;
        $table->integer('Numero_exterior');
        $table->string('Numero_exterior_alfa')->nullable();;
        $table->string('Numero_interior_alfa')->nullable();;
        $table->integer('Numero_interior')->nullable();;
        $table->integer('Codigo_postal');
        $table->integer('id_tipo_asentamiento')->unsigned();
        $table->string('Nombre_asentamiento');
        $table->integer('id_referencia_1')->unsigned();
        $table->string('Referencia_1');
        $table->integer('id_referencia_2')->unsigned();
        $table->string('Referencia_2');
        $table->integer('id_referencia_3')->unsigned()->nullable();;
        $table->string('Referencia_3')->nullable();;



        $table->integer('id_padrefamilia')->unsigned();

        $table->foreign('id_tipo_vialidad')->references('id')->on('Tipo_Vialidad')->onDelete('cascade');
        $table->foreign('id_administracion_vialidad')->references('id')->on('Administracion_vialidad')->onDelete('cascade');
        $table->foreign('id_transito')->references('id')->on('Transito')->onDelete('cascade');
        $table->foreign('id_margen')->references('id')->on('Margen')->onDelete('cascade');
        $table->foreign('id_tipo_asentamiento')->references('id')->on('Tipo_Asentamiento')->onDelete('cascade');
        $table->foreign('id_referencia_1')->references('id')->on('Tipo_refenrencia')->onDelete('cascade');
        $table->foreign('id_referencia_2')->references('id')->on('Tipo_refenrencia')->onDelete('cascade');
        $table->foreign('id_referencia_3')->references('id')->on('Tipo_refenrencia')->onDelete('cascade');



        $table->foreign('id_padrefamilia')->references('id')->on('Usuarios');
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
