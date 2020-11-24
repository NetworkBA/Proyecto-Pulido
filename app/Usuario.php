<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{

  protected $table = "Usuarios";

  protected $fillable = [
    'id',
    'Nombre'
  ,'Apellido_P'
  ,'Apellido_M'
  ,'CURP'
  ,'tipo_usuario_id','contraseña','usuario'
  ];
}
