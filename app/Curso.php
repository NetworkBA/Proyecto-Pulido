<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
  protected $table = "Curso";

  protected $fillable = [
    'id',
    'id_Clase',
    'id_Estudiante'
  ];
}
