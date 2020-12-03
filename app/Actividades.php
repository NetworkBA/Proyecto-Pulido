<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actividades extends Model
{
  protected $table = "Actividades";

  protected $fillable = [
  'Nombre',
    'Valor',
    'descripcion',
    'id_Clase'

  ];
}
