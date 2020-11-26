<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materias extends Model
{
  protected $table = "Materias";
  public $timestamps = false;

  
  protected $fillable = [
    'id',
    'Materia'
  ];
}
