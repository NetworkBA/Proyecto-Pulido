<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Administracion_vialidad extends Model
{
  protected $table = "Transito";

  protected $fillable = [
    'id',
    'Transito'
  ];
}
