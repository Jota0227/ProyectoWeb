<?php

namespace App\Http\Controllers;
use App\Models\Admin;
use Illuminate\Http\Request;

class AdminsController extends Controller
{
    public function getAdmin(){ 
        $admins = Admin::all();
        return $admins;
    }

    public function crearAdmin(Request $request){ 
        $input = $request->all();
        $admin = new Admin();
        $admin->rut = $input["rut"];
        $admin->nombre = $input["nombre"];
        $admin->pass = $input["pass"];
        $admin->telefono = $input["telefono"];
        $admin->save();
        return $admin;
    }
}
