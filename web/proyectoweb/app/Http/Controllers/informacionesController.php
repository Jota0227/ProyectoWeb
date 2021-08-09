<?php

namespace App\Http\Controllers;
use App\Models\Informacion;
use Illuminate\Http\Request;

class informacionesController extends Controller
{
    public function getInformaciones(){
        $informaciones = Informacion::all();
        return $informaciones;
    }

    public function crearInformacion(Request $request){
        $input = $request->all();
        $informacion = new Informacion();
        $informacion->numero=$input["numero"];
        $informacion->correo=$input["correo"];
        $informacion->horario=$input["horario"];
        $informacion->direccion=$input["direccion"];
        $informacion->save();
        return $informacion;
    }
}

