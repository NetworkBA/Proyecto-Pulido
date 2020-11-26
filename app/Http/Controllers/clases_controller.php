<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clases_modelo;


class clases_controller extends Controller
{
  public function Clases()
  {
    $Administrativo = Clases_modelo::select('Clases.id','Clases.id_Materia','Clases.id_Profesor','Materias.Materia')
    ->join('Materias','Clases.id_Materia', '=', 'Materias.id')->get();

      return $Administrativo;
  }
}
