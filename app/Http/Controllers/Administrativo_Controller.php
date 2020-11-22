<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;

class Administrativo_Controller extends Controller
{
    public function index()
    {
        $Administrativo = Usuario::where('tipo_usuario_id','2')->get();

        return $Administrativo;
    }

    public function store(Request $request)
    {

      $usuario = new Usuario ( array(
        'Nombre' =>$request->get('Nombre')
        ,'Apellido_P' =>$request->get('Apellido_P')
        ,'Apellido_M' =>$request->get('Apellido_M')
        ,'CURP' =>$request->get('CURP')
        ,'tipo_usuario_id' =>(2)
        ,'contraseña' =>$request->get('Contraseña')
        ,'usuario' =>$request->get('Usuario')
      ));
        $usuario->save();

        return;
    }
}
