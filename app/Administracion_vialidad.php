<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Administracion_vialidad extends Model
{
  protected $table = "Administracion_vialidad";

  protected $fillable = [
    'id',
    'Tipo_Admi_Vialidad'
  ];
}
