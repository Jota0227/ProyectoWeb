<?php

namespace App\Http\Controllers;
use App\Models\Admin;
use Illuminate\Http\Request;

class AdminsController extends Controller
{
    public function getAdmins(){
        $admins = Admin::all();
        return $admins;
    }

    public function crearAdmin(Request $request){
        $input = $request->all();
        $admin = new Admin();
        $admin->nombre=$input["nombre"];
        $admin->rut=$input["rut"];
        $admin->contraseña=$input["contraseña"];
        $admin->fono=$input["fono"];
        $admin->save();
        return $admin;
    }

    public function eliminarAdmin(Request $request){
        $input = $request->all();
        $id = $input["id"];
        $admin = Admin::findOrFail($id);
        $admin->delete();
        return "ok";
    }
}
