<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipo_asentamiento extends Model
{
  protected $table = "Tipo_Asentamiento";

  protected $fillable = [
    'id',
    'Tipo_Asentamiento'
  ];
}
