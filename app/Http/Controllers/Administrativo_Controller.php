<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;
use App\Usuario;
use App\User;


class Administrativo_Controller extends Controller
{
    public function index()
    {
        $Administrativo = Usuario::where('tipo_usuario_id','2')->get();

        return $Administrativo;
    }

    public function store(Request $request)
    {

        $Administrativo = new Usuario();
        $Administrativo->Nombre = $request->Nombre;
        $Administrativo->tipo_usuario_id = 2;
        $Administrativo->Apellido_P = $request->Apellido_P;
        $Administrativo->Apellido_M = $request->Apellido_M;
        $Administrativo->CURP = $request->CURP;
        $Administrativo->contraseña = $request->contraseña;
        $Administrativo->usuario = $request->email;
        $Administrativo->save();

        $usuario = new User();
        $usuario->id = $Administrativo->id;
        $usuario->name = $request->Nombre;
        $usuario->email = $request->email;
        $usuario->id_usuario = $Administrativo->id;
        $usuario->id_rol = 2;
        $usuario->id_Tipo_usuario = 2;

        $usuario->password = Hash::make($request->contraseña);

        $usuario->save();



        return $Administrativo;
    }

    public function edit(Request $request)
    {
          $Administrativo = Usuario::findOrFail($request->id);
          $Administrativo->Nombre = $request->Nombre;
          $Administrativo->Apellido_P = $request->Apellido_P;
          $Administrativo->Apellido_M = $request->Apellido_M;
          $Administrativo->usuario = $request->email;
          $Administrativo->contraseña = $request->contraseña;
          $Administrativo->CURP = $request->CURP;

          $Administrativo->save();

          $usuario = User::where('id_usuario', $request->id)->get()->first();
          $usuario->name = $request->Nombre;
          $usuario->email = $request->email;
          $usuario->password = Hash::make($request->contraseña);

          $usuario->save();

          return $Administrativo;


    }

    public function destroy(Request $request)
    {
          $Administrativo = Usuario::findOrFail($request->id);
          $Administrativo->delete();
            $usuario = User::where('id_usuario', $request->id)->get()->first();
            $usuario->delete();
          return 0;
    }
}
