<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Materias;

class Materias_controller extends Controller
{
    public function index()
    {
      $Administrativo = Materias::orderBy('id','DESC')->get();

        return $Administrativo;
    }

    public function store(Request $request)
    {
      $Materia = new Materias();
      $Materia->Materia = $request->Materia;
      $Materia->save();
      return $Materia;
    }

    public function editar(Request $requst)
    {
      $Materia = Materias::find($requst->id);
      $Materia->Materia = $requst->Materia;

      $Materia->save();

      return $Materia;
    }
    public function destroy(Request $requst)
    {
      $Materia = Materias::findOrFail($requst->id);
      $Materia->delete();

      return 0;
    }
}
