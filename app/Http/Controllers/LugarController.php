<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LugarController extends Controller
{
      //
      public function getLugar($id){
      $lugar=Lugar::findOrFail($id);
      return view("lugar.info_lugar",["lugar"=>$lugar]);
    }
    public function createLugar($nombre,$ubicacion,$descripcion){
      DB::table("lugares")->insert([
          "nombre"=>$nombre,
          "ubicacion"=>$ubicacion,
          "descripcion"=>$descripcion
        ]);
    }
    public function updateLugar($id,$nombre,$ubicacion,$descripcion){
      $lugar=Lugar::findOrFail($id);
        DB::table("activos")->where("id",$lugar->id)->update([
          "nombre"=>$nombre,
          "ubicacion"=>$ubicacion,
          "descripcion"=>$descripcion
          ]);
    }
    public function deleteLugar($id){
      $lugar=Lugar::findOrFail($id);
      DB::table("lugares")->where("id",$lugar->id)->delete();
    }
}
