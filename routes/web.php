<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ActivosController;
use App\Http\Controllers\LugarController;
use App\Http\Controllers\MarcaController;
use App\Http\Controllers\ProveedorController;


// Página principal
Route::get('/', [HomeController::class, 'getHome']);

Route::group(['middleware' => 'auth'], function() {
	// Activos ------------------------------------------------------------------------------------
	Route::get('activos', [ActivosController::class, "getActivos"])->name('activos');
	// Mostrar Activo
	Route::get('info_activo/{id_activo}', [ActivosController::class, "getActivo"])->name('info_activo');
	// Registro activo
	Route::get('registro_activo', [ActivosController::class, "getRegistroActivo"]);
	Route::post('registro_activo', [ActivosController::class, "postRegistroActivo"]);
	// Editar activo
	Route::get('editar_activo/{id_activo}', [ActivosController::class, 'getEditarActivo']);
	Route::put('editar_activo/{id_activo}', [ActivosController::class, "putEditarActivo"]);
	// Eliminar activo
	Route::delete('eliminar_activo/{id_activo}', [ActivosController::class, "deleteActivo"]);
	// Recepción de activo
	Route::get('recepcion_act', [ActivosController::class, "getRecepcionActivo"])->name('recepcion_act');
	Route::put('recepcion_act/{id_activo}', [ActivosController::class, "putRecepcionActivo"]);
	// Traslado de activo
	Route::get('traslado_act', [ActivosController::class, "getTrasladoActivo"])->name('traslado_act');
	Route::put('traslado_act/{id_activo}', [ActivosController::class, "putTrasladoActivo"]);
	// Dar de baja al activo
	Route::get('salida_act', [ActivosController::class, "getSalidaActivo"])->name('salida_act');
	Route::put('salida_act/{id_activo}', [ActivosController::class, "putSalidaActivo"]);

	// Marcas -------------------------------------------------------------------------------------
	Route::get('marcas', [MarcaController::class, "getMarcas"])->name('marcas');
	// Mostrar Marca
	Route::get('info_marca/{id_marca}', [MarcaController::class, "getMarca"])->name('info_marca');
	// Registro marca
	Route::get('registro_marca', [MarcaController::class, "getRegistroMarca"]);
	Route::post('registro_marca', [MarcaController::class, "postRegistroMarca"]);
	// Editar marca
	Route::get('editar_marca/{id_marca}', [MarcaController::class, 'getEditarMarca']);
	Route::put('editar_marca/{id_marca}', [MarcaController::class, "putEditarMarca"]);
	// Eliminar marca
	Route::delete('eliminar_marca/{id_marca}', [MarcaController::class, "deleteMarca"]);

	// Lugares ------------------------------------------------------------------------------------
	Route::get('lugares', [LugarController::class, "getLugares"])->name('lugares');
	// Mostrar Lugar
	Route::get('info_lugar/{id_lugar}', [LugarController::class, "getLugar"])->name('info_lugar');
	// Registro lugar
	Route::get('registro_lugar', [LugarController::class, "getRegistroLugar"]);
	Route::post('registro_lugar', [LugarController::class, "postRegistroLugar"]);
	// Editar lugar
	Route::get('editar_lugar/{id_lugar}', [LugarController::class, 'getEditarLugar']);
	Route::put('editar_lugar/{id_lugar}', [LugarController::class, "putEditarLugar"]);
	// Eliminar lugar
	Route::delete('eliminar_lugar/{id_lugar}', [LugarController::class, "deleteLugar"]);

	// Proveedores ---------------------------------------------------------------------------------
	Route::get('proveedores', [ProveedorController::class, "getProveedores"])->name('proveedores');
	// Mostrar Proveedor
	Route::get('info_proveedor/{id_proveedor}', [ProveedorController::class, "getProveedor"])->name('info_proveedor');
	// Registro proveedor
	Route::get('registro_proveedor', [ProveedorController::class, "getRegistroProveedor"]);
	Route::post('registro_proveedor', [ProveedorController::class, "postRegistroProveedor"]);
	// Editar proveedor
	Route::get('editar_proveedor/{id_proveedor}', [ProveedorController::class, 'getEditarProveedor']);
	Route::put('editar_proveedor/{id_proveedor}', [ProveedorController::class, "putEditarProveedor"]);
	// Eliminar proveedor
	Route::delete('eliminar_proveedor/{id_proveedor}', [ProveedorController::class, "deleteProveedor"]);
});


//configuración
// Route::get('config/{username}');

require __DIR__.'/auth.php';
