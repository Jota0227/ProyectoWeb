<?php

namespace App\Http\Controllers;
use App\Models\Pedido;
use Illuminate\Http\Request;

class PedidosController extends Controller
{
    public function getPedidos(){ 
        $pedidos = Pedido::all();
        return $pedidos;
    }

    public function crearPedido(Request $request){ 
        $input = $request->all();
        $pedido = new Pedido();
        $pedido->nombre = $input["nombre"];
        $pedido->contacto = $input["contacto"];
        $pedido->hora = $input["hora"];
        $pedido->colacion = $input["colacion"];
        $pedido->valor = $input["valor"];
        $pedido->save();
        return $pedido;
    }
    
    public function eliminarPedido(Request $request){
        $input = $request->all();
        $id = $input["id"];
        $pedido = Pedido::findOrFail($id);
        $pedido->delete();
        return "ok";
    }
}
