<?php

namespace App\Http\Controllers;

use App\Models\Activo;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ApiActivoController extends Controller
{
	public function index()
	{
		return response()->json(Activo::all());
	}

	public function show($id_activo)
	{
		try {
			$r = Activo::findOrFail($id_activo);
		} catch (\Throwable $th) {
			$r = [
				'error' => true,
				'msg' => "Activo $id_activo no existe"
			];
		}
		return response()->json($r);
	}

	public function store(Request $request)
	{
		$activo = new Activo;

		$activo->referencia = $request->referencia;
		$activo->costo = $request->costo;
		$fecha_ingreso = Carbon::parse($request->fecha_ingreso)->format('Y-m-d\TH:i');
		$fecha_compra = Carbon::parse($request->fecha_compra)->format('Y-m-d\TH:i');
		$activo->fecha_ingreso = $fecha_ingreso;
		$activo->fecha_compra = $fecha_compra;
		$activo->codigo_qr = $request->codigo_qr;
		$activo->lugar = $request->lugar;
		$activo->marca = $request->marca;
		$activo->tipo = $request->tipo;

		$activo->save();
		$r = [
			'error' => false,
			'msg' => "Nuevo activo $activo->id creado"
		];

		return response()->json($r);
	}

	public function update(Request $request, $id_activo)
	{
		try {
			$activo = Activo::findOrFail($id_activo);

			$activo->referencia = $request->referencia;
			$activo->costo = $request->costo;
			$fecha_ingreso = Carbon::parse($request->fecha_ingreso)->format('Y-m-d\TH:i');
			$fecha_compra = Carbon::parse($request->fecha_compra)->format('Y-m-d\TH:i');
			$activo->fecha_ingreso = $fecha_ingreso;
			$activo->fecha_compra = $fecha_compra;
			$activo->codigo_qr = $request->codigo_qr;
			$activo->lugar = $request->lugar;
			$activo->marca = $request->marca;
			$activo->tipo = $request->tipo;

			$activo->save();
			$r = [
				'error' => false,
				'msg' => "Activo $activo->id actualizado"
			];
		} catch (\Throwable $th) {
			$r = [
				'error' => true,
				'msg' => "Activo $id_activo no existe"
			];
		}
		return response()->json($r);
	}

	public function destroy($id_activo)
	{
		try {
			$activo = Activo::findOrFail($id_activo);
			$activo->delete();
			$r = [
				'error' => false,
				'msg' => "Activo $activo->id eliminado"
			];
		} catch (\Throwable $th) {
			$r = [
				'error' => true,
				'msg' => "Activo $id_activo no existe"
			];
		}
		return response()->json($r);
	}

	public function recepcion($id_activo)
	{
		try {
			$activo = Activo::findOrFail($id_activo);
			$activo->estado = 'Recibido';
			$activo->save();
			$r = [
				'error' => false,
				'msg' => "Activo $activo->id recibido"
			];
		} catch (\Throwable $th) {
			$r = [
				'error' => true,
				'msg' => "Activo $id_activo no existe"
			];
		}
		return response()->json($r);
	}

	public function traslado($id_activo)
	{
		try {
			$activo = Activo::findOrFail($id_activo);
			$activo->estado = 'En Transito';
			$activo->save();
			$r = [
				'error' => false,
				'msg' => "Activo $activo->id en transito"
			];
		} catch (\Throwable $th) {
			$r = [
				'error' => true,
				'msg' => "Activo $id_activo no existe"
			];
		}
		return response()->json($r);
	}

	public function salida($id_activo)
	{
		try {
			$activo = Activo::findOrFail($id_activo);
			$activo->estado = 'Dado de baja';
			$activo->save();
			$r = [
				'error' => false,
				'msg' => "Activo $activo->id dado de baja"
			];
		} catch (\Throwable $th) {
			$r = [
				'error' => true,
				'msg' => "Activo $id_activo no existe"
			];
		}
		return response()->json($r);
	}
}
