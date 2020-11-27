<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clases_modelo;
use App\Curso;




class clases_controller extends Controller
{
  public function Clases()
  {
    $Administrativo = Clases_modelo::select('Clases.id','Clases.id_Materia','Clases.id_Profesor','Materias.Materia')
    ->join('Materias','Clases.id_Materia', '=', 'Materias.id')->get();

      return $Administrativo;
  }

  public function save(Request $request)
  {
    $Administrativo = new Clases_modelo();
    $Administrativo->id_Materia = $request->id_Materia;
    $Administrativo->id_Profesor = $request->id_profesor;
    $Administrativo->save();
    foreach ($request->Alumnos as $Alumno) {
      $Clase = new Curso;
      $Clase->id_Clase = $Administrativo->id;
      $Clase->id_Estudiante = $Alumno;
      $Clase->save();
    }


    return $Administrativo;

  }


}
