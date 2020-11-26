<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
  protected $table = "Estudiantes";

    protected $fillable = [
        'id'
      ,'Nombre'
      ,'Apellido_P'
      ,'Apellido_M'
      ,'CURP'
      ,'Fecha_Nacimiento'
      ,'id_tipo_vialidad'
      ,'Tramo'
      ,'id_administracion_vialidad'
      ,'id_transito'
      ,'id_margen'
      ,'Nombre_vialidad'
      ,'Kilometro'
      ,'Numero_exterior'
      ,'Numero_exterior_alfa'
      ,'Numero_interior_alfa'
      ,'Numero_interior'
      ,'Codigo_postal'
      ,'id_tipo_asentamiento'
      ,'Nombre_asentamiento'
      ,'id_referencia_1'
      ,'Referencia_1'
      ,'id_referencia_2'
      ,'Referencia_2'
      ,'id_referencia_3'
      ,'Referencia_3',
      'id_padrefamilia'
  ];
}
