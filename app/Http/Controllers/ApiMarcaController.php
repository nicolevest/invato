<?php

namespace App\Http\Controllers;

use App\Models\Marca;
use Illuminate\Http\Request;

class ApiMarcaController extends Controller
{
	public function index()
	{
		return response()->json(Marca::all());
	}

	public function show($id_marca)
	{
		try {
			$r = Marca::findOrFail($id_marca);
		} catch (\Throwable $th) {
			$r = [
				'error' => true,
				'msg' => "Marca $id_marca no existe"
			];
		}
		return response()->json($r);
	}

	public function store(Request $request)
	{
		$marca = new Marca;

		$marca->nombre = $request->nombre;
		$marca->proveedor = $request->proveedor;

		$marca->save();
		$r = [
			'error' => false,
			'msg' => "Nuevo marca $marca->id creado"
		];

		return response()->json($r);
	}

	public function update(Request $request, $id_marca)
	{
		try {
			$marca = Marca::findOrFail($id_marca);

			$marca->nombre = $request->nombre;
			$marca->proveedor = $request->proveedor;

			$marca->save();
			$r = [
				'error' => false,
				'msg' => "Marca $marca->id actualizado"
			];
		} catch (\Throwable $th) {
			$r = [
				'error' => true,
				'msg' => "Marca $id_marca no existe"
			];
		}
		return response()->json($r);
	}

	public function destroy($id_marca)
	{
		try {
			$marca = Marca::findOrFail($id_marca);
			$marca->delete();
			$r = [
				'error' => false,
				'msg' => "Marca $marca->id eliminado"
			];
		} catch (\Throwable $th) {
			$r = [
				'error' => true,
				'msg' => "Marca $id_marca no existe"
			];
		}
		return response()->json($r);
	}
}
