<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clases_modelo;
use App\Curso;
use App\Actividades;



class clases_controller extends Controller
{

  public function EliinarActividad(Request $request)
  {

    $Administrativo = Actividades::findOrFail($request->id);


    $Administrativo->delete();

    return $Administrativo;

  }


  public function EditarActividad(Request $request)
  {

    $Administrativo = Actividades::findOrFail($request->id);
    $Administrativo->Nombre = $request->nombre;
    $Administrativo->descripcion = $request->descripcion;
    $Administrativo->Valor = $request->valor;

    $Administrativo->save();

    return $Administrativo;

  }

  public function AgregarActividad(Request $request)
  {
    $Actividad = new Actividades();
    $Actividad->Nombre = $request->nombre;
    $Actividad->descripcion = $request->descripcion;
    $Actividad->Valor = $request->valor;
    $Actividad->id_Clase = $request->id_clase;

    $Actividad->save();

    return $Actividad;

  }
  public function traertareas(Request $request)
  {
    $Administrativo = Clases_modelo::select('Clases.id','Actividades.Nombre','Actividades.id','Actividades.descripcion', 'Actividades.Valor')
    ->join('Actividades','Clases.id', '=', 'Actividades.id_Clase')->where('Clases.id','=', $request->id_clas)->get();


    return $Administrativo;
  }

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

    return $Administrativo->id;
  }

      public function guardaralumnos(Request $request)
      {
      $Clase = new Curso;

      $Clase->id_Clase = $Administrativo =  Clases_modelo::orderBy('id', 'desc')->first()->id;
      $Clase->id_Estudiante = $request->id_alumno;

      $Clase->save();
      return;
    }

   public function getCursos()
   {
     $Administrativo = Curso::orderBy('id','DESC')->get();

       return $Administrativo;
   }



  }
