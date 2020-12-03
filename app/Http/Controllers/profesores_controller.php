<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;
use App\User;
use Illuminate\Support\Facades\Hash;

class profesores_controller extends Controller
{
    public function index()
    {
        $Administrativo = Usuario::where('tipo_usuario_id','3')->get();

        return $Administrativo;
    }

  

    public function store(Request $request)
    {

        $Administrativo = new Usuario();
        $Administrativo->Nombre = $request->Nombre;
        $Administrativo->tipo_usuario_id = 3;
        $Administrativo->Apellido_P = $request->Apellido_P;
        $Administrativo->Apellido_M = $request->Apellido_M;
        $Administrativo->CURP = $request->CURP;
        $Administrativo->contraseña = $request->Contraseña;
        $Administrativo->usuario = $request->CURP;
        $Administrativo->usuario = $request->email;
        $Administrativo->save();


        $usuario = new User();
        $usuario->name = $request->Nombre;
        $usuario->email = $request->email;
        $usuario->id_usuario = $Administrativo->id;
        $usuario->id_rol = 3;
        $usuario->id_Tipo_usuario = 3;

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
          $Administrativo->CURP = $request->CURP;
          $Administrativo->contraseña = $request->Contraseña;


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

          return 0;
    }
}
