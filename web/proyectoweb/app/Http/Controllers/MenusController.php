<?php

namespace App\Http\Controllers;
use App\Models\Menu;
use Illuminate\Http\Request;

class MenusController extends Controller
{
    public function getMenus(){ 
        $menus = Menu::all();
        return $menus;
    }

    public function crearMenu(Request $request){ 
        $input = $request->all();
        $menu = new Menu();
        $menu->colacion = $input["colacion"];
        $menu->valor = $input["valor"];
        $menu->save();
        return $menu;
    }

    public function eliminarMenu(Request $request){
        $input = $request->all();
        $id = $input["id"];
        $menu = Menu::findOrFail($id);
        $menu->delete();
        return "ok";
    }
}
