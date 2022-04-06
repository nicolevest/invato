<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LugarController extends Controller
{
  public function getLugar($id_lugar) {
      $lugar = Lugar::findOrFail($id_lugar);
      return view("lugares.info_lugar", ["lugar" => $lugar]);
  }

  public function getLugares(){
      $lugares = Lugar::all();
      return view("lugares.table_lugares", ["lugares" => $lugares]);
  }

  public function getRegistroLugar(){
      return view ("lugares.registro_lugar");
  }

  public function postRegistroLugar(Request $req){
      $lugar= new Lugar;

      $lugar->nombre = $req->input('nombre');
      $lugar->ubicacion = $req->input('ubicacion');
      $lugar->descripcion = $req->input('descripcion');
      $lugar->save();

      return redirect()->route("info_lugar", ["id_lugar" => $lugar->id]);
  }

  public function getEditarLugar($id_lugar) {
      $lugar = Lugar::findOrFail($id_lugar);
      return view('lugares.editar_lugar', ["lugar" => $lugar, "proveedor" => $proveedor]);
  }

  public function putEditarLugar(Request $req, $id_lugar){
      $lugar = Lugar::findOrFail($id_lugar);

      $lugar->nombre = $req->input('nombre');
      $lugar->ubicacion = $req->input('ubicacion');
      $lugar->descripcion = $req->input('descripcion');
      $lugar->save();

      return redirect()->route("info_lugar", ["id_lugar" => $lugar->id]);
  }

  public function deleteLugar($id_lugar){
      $lugar = Lugar::findOrFail($id_lugar);

      Lugar::where("id", $lugar->id)->delete();

      return redirect()->route("lugares");
  }
}
