<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::view("/","home")->name("home");

Route::view("/actualizar_menu","actualizar_menu")->name("actualizar_menu");

Route::view("/ingresar_pedido","ingresar_pedido")->name("ingresar_pedido");

Route::view("/ver_pedido","ver_pedido")->name("ver_pedido");

Route::view("/modificar_informacion","modificar_informacion")->name("modificar_informacion");

Route::view("/ver_informacion","ver_informacion")->name("ver_informacion");

Route::view("/login_register","login_register")->name("login_register");

Route::view("/iniciar_sesion","iniciar_sesion")->name("iniciar_sesion");

Route::view("/registrar","registrar")->name("registrar");