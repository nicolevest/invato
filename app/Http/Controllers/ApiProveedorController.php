<?php

namespace App\Http\Controllers;

use App\Models\Proveedor;
use Illuminate\Http\Request;

class ApiProveedorController extends Controller
{
	public function index()
	{
		return response()->json(Proveedor::all());
	}

	public function show($id_proveedor)
	{
		try {
			$r = Proveedor::findOrFail($id_proveedor);
		} catch (\Throwable $th) {
			$r = [
				'error' => true,
				'msg' => "Proveedor $id_proveedor no existe"
			];
		}
		return response()->json($r);
	}

	public function store(Request $request)
	{
		$proveedor = new Proveedor;

        $proveedor->nombre = $request->nombre;
        $proveedor->procedencia = $request->procedencia;
        $proveedor->contacto_tel = $request->contacto_tel;
        $proveedor->contacto_email = $request->contacto_email;

		$proveedor->save();
		$r = [
			'error' => false,
			'msg' => "Nuevo proveedor $proveedor->id creado"
		];

		return response()->json($r);
	}

	public function update(Request $request, $id_proveedor)
	{
		try {
			$proveedor = Proveedor::findOrFail($id_proveedor);

			$proveedor->nombre = $request->nombre;
			$proveedor->procedencia = $request->procedencia;
			$proveedor->contacto_tel = $request->contacto_tel;
			$proveedor->contacto_email = $request->contacto_email;

			$proveedor->save();
			$r = [
				'error' => false,
				'msg' => "Proveedor $proveedor->id actualizado"
			];
		} catch (\Throwable $th) {
			$r = [
				'error' => true,
				'msg' => "Proveedor $id_proveedor no existe"
			];
		}
		return response()->json($r);
	}

	public function destroy($id_proveedor)
	{
		try {
			$proveedor = Proveedor::findOrFail($id_proveedor);
			$proveedor->delete();
			$r = [
				'error' => false,
				'msg' => "Proveedor $proveedor->id eliminado"
			];
		} catch (\Throwable $th) {
			$r = [
				'error' => true,
				'msg' => "Proveedor $id_proveedor no existe"
			];
		}
		return response()->json($r);
	}
}
