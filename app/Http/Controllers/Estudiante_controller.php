<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Alumno;
use App\Tipo_vialidad;
use App\Administracion_vialidad;
use App\Margen;
use App\Tipo_asentamiento;
use App\Tipo_referencia;
use App\Transito;

class Estudiante_controller extends Controller
{


  public function Transito()
  {
    $Administrativo = Transito::orderBy('id','DESC')->get();

      return $Administrativo;
  }

  public function destroy(Request $request)
  {
        $Administrativo = Alumno::findOrFail($request->id);
        $Administrativo->delete();

        return 0;
  }

  public function edit(Request $request)
  {
        $Administrativo = Alumno::find($request->id);
        $Administrativo->Nombre = $request->Nombre;
        $Administrativo->Apellido_P = $request->Apellido_P;
        $Administrativo->Apellido_M = $request->Apellido_M;
        $Administrativo->CURP = $request->CURP;
        $Administrativo->Fecha_Nacimiento = $request->Fecha_Nacimiento;
        $Administrativo->id_tipo_vialidad = $request->id_tipo_vialidad;
        $Administrativo->Tramo = $request->Tramo;
        $Administrativo->id_administracion_vialidad = $request->id_administracion_vialidad;
        $Administrativo->id_transito = $request->id_Transito;
        $Administrativo->id_margen = $request->id_margen;
        $Administrativo->Nombre_vialidad = $request->Nombre_vialidad;
        $Administrativo->Kilometro = $request->Kilometro;
        $Administrativo->Numero_exterior = $request->Numero_exterior;
        $Administrativo->Numero_exterior_alfa = $request->Numero_exterior_alfa;
        $Administrativo->Numero_interior_alfa = $request->Numero_interior_alfa;
        $Administrativo->Numero_interior = $request->Numero_interior;
        $Administrativo->Codigo_postal = $request->Codigo_postal;
        $Administrativo->id_tipo_asentamiento = $request->id_tipo_asentamiento;
        $Administrativo->Nombre_asentamiento = $request->Nombre_asentamiento;
        $Administrativo->id_referencia_1 = $request->id_referencia_1;
        $Administrativo->Referencia_1 = $request->Referencia_1;
        $Administrativo->id_referencia_2 = $request->id_referencia_2;
        $Administrativo->Referencia_2 = $request->Referencia_2;
        $Administrativo->id_referencia_3 = $request->id_referencia_3;
        $Administrativo->Referencia_3 = $request->Referencia_3;
        $Administrativo->id_padrefamilia = $request->id_padrefamilia;
        $Administrativo->save();

        return $Administrativo;


  }
  public function GuardarEstudiante(Request $request)
  {

    $Administrativo = new Alumno();
    $Administrativo->Nombre = $request->Nombre;
    $Administrativo->Apellido_P = $request->Apellido_P;
    $Administrativo->Apellido_M = $request->Apellido_M;
    $Administrativo->CURP = $request->CURP;
    $Administrativo->Fecha_Nacimiento = $request->Fecha_Nacimiento;
    $Administrativo->id_tipo_vialidad = $request->id_tipo_vialidad;
    $Administrativo->Tramo = $request->Tramo;
    $Administrativo->id_administracion_vialidad = $request->id_administracion_vialidad;
    $Administrativo->id_transito = $request->id_Transito;
    $Administrativo->id_margen = $request->id_margen;
    $Administrativo->Nombre_vialidad = $request->Nombre_vialidad;
    $Administrativo->Kilometro = $request->Kilometro;
    $Administrativo->Numero_exterior = $request->Numero_exterior;
    $Administrativo->Numero_exterior_alfa = $request->Numero_exterior_alfa;
    $Administrativo->Numero_interior_alfa = $request->Numero_interior_alfa;
    $Administrativo->Numero_interior = $request->Numero_interior;
    $Administrativo->Codigo_postal = $request->Codigo_postal;
    $Administrativo->id_tipo_asentamiento = $request->id_tipo_asentamiento;
    $Administrativo->Nombre_asentamiento = $request->Nombre_asentamiento;
    $Administrativo->id_referencia_1 = $request->id_referencia_1;
    $Administrativo->Referencia_1 = $request->Referencia_1;
    $Administrativo->id_referencia_2 = $request->id_referencia_2;
    $Administrativo->Referencia_2 = $request->Referencia_2;
    $Administrativo->id_referencia_3 = $request->id_referencia_3;
    $Administrativo->Referencia_3 = $request->Referencia_3;
    $Administrativo->id_padrefamilia = $request->id_padrefamilia;
    $Administrativo->save();

    return $Administrativo;


  }

  public function index()
  {
    $Administrativo = Alumno::orderBy('id','DESC')->get();

      return $Administrativo;
  }

  public function ObtenerTipoViaidad()
  {
    $Administrativo = Tipo_vialidad::orderBy('id','ASC')->get();

      return $Administrativo;
  }

  public function ObtenerAdmiTipoViaidad()
  {
    $Administrativo = Administracion_vialidad::orderBy('id','ASC')->get();

      return $Administrativo;
  }

  public function ObtenerMargen()
  {
    $Administrativo = Margen::orderBy('id','ASC')->get();

      return $Administrativo;
  }
  public function ObtenerAsentamientos()
  {
    $Administrativo = Tipo_asentamiento::orderBy('id','ASC')->get();

      return $Administrativo;
  }
  public function ObtenerReferencias()
  {
    $Administrativo = Tipo_referencia::orderBy('id','ASC')->get();

      return $Administrativo;
  }
}
