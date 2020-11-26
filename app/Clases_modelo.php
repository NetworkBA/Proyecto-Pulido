<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clases_modelo extends Model
{
    protected $table = "Clases";

    protected $fillable = [
      'id',
      'id_Materia',
      'id_Profesor'
    ];

}
