<?php

namespace App\Http\Controllers;

use App\Models\Lugar;
use Illuminate\Http\Request;

class ApiLugarController extends Controller
{
	public function index()
	{
		return response()->json(Lugar::all());
	}

	public function show($id_lugar)
	{
		try {
			$r = Lugar::findOrFail($id_lugar);
		} catch (\Throwable $th) {
			$r = [
				'error' => true,
				'msg' => "Lugar $id_lugar no existe"
			];
		}
		return response()->json($r);
	}

	public function store(Request $request)
	{
		$lugar = new Lugar;

		$lugar->nombre = $request->nombre;
		$lugar->ubicacion = $request->ubicacion;
		$lugar->descripcion = $request->descripcion;

		$lugar->save();
		$r = [
			'error' => false,
			'msg' => "Nuevo lugar $lugar->id creado"
		];

		return response()->json($r);
	}

	public function update(Request $request, $id_lugar)
	{
		try {
			$lugar = Lugar::findOrFail($id_lugar);

			$lugar->nombre = $request->nombre;
			$lugar->ubicacion = $request->ubicacion;
			$lugar->descripcion = $request->descripcion;

			$lugar->save();
			$r = [
				'error' => false,
				'msg' => "Lugar $lugar->id actualizado"
			];
		} catch (\Throwable $th) {
			$r = [
				'error' => true,
				'msg' => "Lugar $id_lugar no existe"
			];
		}
		return response()->json($r);
	}

	public function destroy($id_lugar)
	{
		try {
			$lugar = Lugar::findOrFail($id_lugar);
			$lugar->delete();
			$r = [
				'error' => false,
				'msg' => "Lugar $lugar->id eliminado"
			];
		} catch (\Throwable $th) {
			$r = [
				'error' => true,
				'msg' => "Lugar $id_lugar no existe"
			];
		}
		return response()->json($r);
	}
}
