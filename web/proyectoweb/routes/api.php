<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenusController;
use App\Http\Controllers\PedidosController;
use App\Http\Controllers\AdminsController;
use App\Http\Controllers\informacionesController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get("menus/get", [MenusController::class, "getMenus"]);

Route::post("menus/post", [MenusController::class, "crearMenu"]);

Route::post("menus/delete", [MenusController::class, "eliminarMenu"]);

Route::get("pedidos/get", [PedidosController::class, "getPedidos"]);

Route::post("pedidos/post", [PedidosController::class, "crearPedido"]);

Route::post("pedidos/delete", [PedidosController::class, "eliminarPedido"]);

Route::get("admins/get", [AdminsController::class, "getAdmins"]);

Route::post("admins/post", [AdminsController::class, "crearAdmin"]);

Route::get("informaciones/get", [informacionesController::class, "getInformaciones"]);

Route::post("informaciones/post", [informacionesController::class, "crearInformacion"]);