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
}
