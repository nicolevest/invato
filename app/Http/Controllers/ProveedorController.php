<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProveedorController extends Controller
{
    //
    public function getActivo($id){
      $activo=Activo::findOrFail($id);
      return view("activos.info_activo",["activo"=>$activo]);
    }
    public function getActivos(){
      $activos=DB::table("activos")->get();
      return view("activos.table_activos",["activos"=>$activos]);
    }
    public function createActivo($referencia,$costo,$fecha_ingreso,$fecha_compra,$codigo_qr,$lugar,$marca,$tipo){
      DB::table("activos")->insert([
          "referencia"=>$referencia,
          "costo"=>$costo,
          "fecha_ingreso"=>$fecha_ingreso,
          "fecha_compra"=>$fecha_compra,
          "codigo_qr"=>$codigo_qr,
          "lugar"=>$lugar,
          "marca"=>$marca,
          "tipo"=>$tipo
        ]);
    }
    public function updateActivo($id,$referencia,$costo,$fecha_ingreso,$fecha_compra,$codigo_qr,$lugar,$marca,$tipo){
        $activo=Activo::findOrFail($id);
        DB::table("activos")->where("id",$activo->id)->update([
          "referencia"=>$referencia,
          "costo"=>$costo,
          "fecha_ingreso"=>$fecha_ingreso,
          "fecha_compra"=>$fecha_compra,
          "codigo_qr"=>$codigo_qr,
          "lugar"=>$lugar,
          "marca"=>$marca,
          "tipo"=>$tipo
          ]);
    }
    public function deleteActivo($id){
      $activo=Activo::findOrFail($id);
      DB::table("activos")->where("id",$activo->id)->delete();
    }
}
