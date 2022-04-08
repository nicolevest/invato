<?php

use App\Http\Controllers\ApiActivoController;
use App\Http\Controllers\ApiLugarController;
use App\Http\Controllers\ApiMarcaController;
use App\Http\Controllers\ApiProveedorController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'auth.basic'], function() {
	// Activos ------------------------------------------------------------------------------------
	Route::resource('activo', ApiActivoController::class, ['except' => ['create', 'edit']]);
	// Recepción de activo
	Route::put('activo/{id_activo}/recepcion', [ApiActivoController::class, 'recepcion']);
	// Traslado de activo
	Route::put('activo/{id_activo}/traslado', [ApiActivoController::class, 'traslado']);
	// Dar de baja al activo
	Route::put('activo/{id_activo}/salida', [ApiActivoController::class, 'salida']);

	// Marcas -------------------------------------------------------------------------------------
	Route::resource('marca', ApiMarcaController::class, ['except' => ['create', 'edit']]);

	// Lugares ------------------------------------------------------------------------------------
	Route::resource('lugar', ApiLugarController::class, ['except' => ['create', 'edit']]);

	// Proveedores ---------------------------------------------------------------------------------
	Route::resource('proveedor', ApiProveedorController::class, ['except' => ['create', 'edit']]);
});