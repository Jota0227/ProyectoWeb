<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenusController;
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

Route::get("pedidos/get", [MenusController::class, "getPedidos"]);

Route::post("pedidos/post", [MenusController::class, "crearPedido"]);

Route::post("pedidos/delete", [MenusController::class, "eliminarPedido"]);