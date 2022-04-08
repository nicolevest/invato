<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Activo;
use Carbon\Carbon;
use App\Models\lugar;
use App\Models\Marca;
use App\Models\Proveedor;
use App\Models\TipoActivo;

class ActivosController extends Controller
{
	public function getActivo($id_activo)
	{
		$activo = Activo::findOrFail($id_activo);

		$activo->lugar = Lugar::where('id', $activo->lugar)->get('nombre')[0]->nombre;
		$activo->marca = Marca::where('id', $activo->marca)->get('nombre')[0]->nombre;
		$activo->tipo = TipoActivo::where('id', $activo->tipo)->get('descripcion')[0]->descripcion;

		return view("activos.info_activo", ["activo" => $activo]);
	}

	public function getActivos()
	{
		$activos = Activo::all();

		foreach ($activos as $activo) {
			$activo->lugar = Lugar::where('id', $activo->lugar)->get('nombre')[0]->nombre;
			$activo->marca = Marca::where('id', $activo->marca)->get('nombre')[0]->nombre;
			$activo->tipo = TipoActivo::where('id', $activo->tipo)->get('descripcion')[0]->descripcion;
		}
		return view("activos.table_activos", ["activos" => $activos]);
	}

	public function getRegistroActivo()
	{
		$lugares = Lugar::all();
		$marcas = Marca::all();
		$tipos = TipoActivo::all();

		return view("activos.registro_activo", ["lugares" => $lugares, "marcas" => $marcas, "tipos" => $tipos]);
	}

	public function postRegistroActivo(Request $req)
	{
		$activo = new Activo;

		$activo->referencia = $req->input('referencia');
		$activo->costo = $req->input('costo');
		$fecha_ingreso = Carbon::parse($req->input('fecha_ingreso'))->format('Y-m-d\TH:i');
		$fecha_compra = Carbon::parse($req->input('fecha_compra'))->format('Y-m-d\TH:i');
		$activo->fecha_ingreso = $fecha_ingreso;
		$activo->fecha_compra = $fecha_compra;
		$activo->codigo_qr = $req->input('codigo_qr');
		$activo->lugar = $req->input('lugar');
		$activo->marca = $req->input('marca');
		$activo->tipo = $req->input('tipo');
		$activo->save();

		return redirect()->route("info_activo", ["id_activo" => $activo->id]);
	}

	public function getEditarActivo($id_activo)
	{
		$activo = Activo::findOrFail($id_activo);

		$lugares = Lugar::all();
		$marcas = Marca::all();
		$tipos = TipoActivo::all();
		$activo->fecha_ingreso = str_replace(' ', 'T', $activo->fecha_ingreso);
		$activo->fecha_compra = str_replace(' ', 'T', $activo->fecha_compra);

		return view('activos.editar_activo', ["activo" => $activo, "lugares" => $lugares, "marcas" => $marcas, "tipos" => $tipos]);
	}

	public function putEditarActivo(Request $req, $id_activo)
	{
		$activo = Activo::findOrFail($id_activo);

		$activo->referencia = $req->input('referencia');
		$activo->costo = $req->input('costo');
		$fecha_ingreso =
			$fecha_compra = Carbon::parse($req->input('fecha_compra'))->format('Y-m-d\TH:i');
		$activo->fecha_ingreso = Carbon::parse($req->input('fecha_ingreso'))->format('Y-m-d\TH:i');
		$activo->fecha_compra = $fecha_compra;
		$activo->codigo_qr = $req->input('codigo_qr');
		$activo->lugar = $req->input('lugar');
		$activo->marca = $req->input('marca');
		$activo->tipo = $req->input('tipo');
		$activo->save();

		return redirect()->route("info_activo", ["id_activo" => $activo->id]);
	}

	public function deleteActivo($id_activo)
	{
		$activo = Activo::findOrFail($id_activo);

		Activo::where("id", $activo->id)->delete();

		return redirect()->route("activos");
	}

	public function getRecepcionActivo()
	{
		$activos = Activo::all();

		foreach ($activos as $activo) {
			$activo->lugar = Lugar::where('id', $activo->lugar)->get('nombre')[0]->nombre;
			$activo->marca = Marca::where('id', $activo->marca)->get('nombre')[0]->nombre;
			$activo->tipo = TipoActivo::where('id', $activo->tipo)->get('descripcion')[0]->descripcion;
		}
		return view('activos.table_recepcion', ["activos" => $activos]);
	}

	public function putRecepcionActivo($id_activo)
	{
		$activo = Activo::where('id', $id_activo)->firstOrFail();
		$activo->estado = "Recibido";
		$activo->save();
		return redirect()->route('recepcion_act');
	}

	public function getTrasladoActivo()
	{
		$activos = Activo::all();
		$lugares = Lugar::all();

		foreach ($activos as $activo) {
			$activo->marca = Marca::where('id', $activo->marca)->get('nombre')[0]->nombre;
			$activo->tipo = TipoActivo::where('id', $activo->tipo)->get('descripcion')[0]->descripcion;
		}
		return view('activos.table_traslado', ["activos" => $activos,"lugares" => $lugares]);
	}

	public function putTrasladoActivo(Request $req, $id_activo)
	{
		$activo = Activo::where('id', $id_activo)->firstOrFail();
		$activo->lugar = $req->input('lugar');
		$activo->estado = "En transito";
		$activo->save();
		return redirect()->route('traslado_act');
	}

	public function getSalidaActivo()
	{
		$activos = Activo::all();

		foreach ($activos as $activo) {
			$activo->lugar = Lugar::where('id', $activo->lugar)->get('nombre')[0]->nombre;
			$activo->marca = Marca::where('id', $activo->marca)->get('nombre')[0]->nombre;
			$activo->tipo = TipoActivo::where('id', $activo->tipo)->get('descripcion')[0]->descripcion;
		}
		return view('activos.table_salida', ["activos" => $activos]);
	}

	public function putSalidaActivo($id_activo)
	{
		$activo = Activo::where('id', $id_activo)->firstOrFail();
		$activo->estado = "Dado de baja";
		$activo->save();
		return redirect()->route('salida_act');
	}
}
