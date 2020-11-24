<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipo_vialidad extends Model
{
  protected $table = "Tipo_Vialidad";

  protected $fillable = [
    'id',
    'Tipo_Vialidad'
  ];
}
