<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proveedor;

class ProveedorController extends Controller
{
    public function getProveedor($id_proveedor) {
        $proveedor = Proveedor::findOrFail($id_proveedor);
        return view("proveedores.info_proveedor", ["proveedor" => $proveedor]);
    }

    public function getProveedores(){
        $proveedores = Proveedor::all();
        return view("proveedores.table_proveedores", ["proveedores" => $proveedores]);
    }

    public function getRegistroProveedor(){
        return view ("proveedores.registro_proveedor");
    }

    public function postRegistroProveedor(Request $req){
        $proveedor= new Proveedor;

        $proveedor->nombre = $req->input('nombre');
        $proveedor->procedencia = $req->input('procedencia');
        $proveedor->contacto_tel = $req->input('contacto_tel');
        $proveedor->contacto_email = $req->input('contacto_email');
        $proveedor->save();

        return redirect()->route("info_proveedor", ["id_proveedor" => $proveedor->id]);
    }

    public function getEditarProveedor($id_proveedor) {
        $proveedor = Proveedor::findOrFail($id_proveedor);
        return view('proveedores.editar_proveedor', ["proveedor" => $proveedor, "proveedor" => $proveedor]);
    }

    public function putEditarProveedor(Request $req, $id_proveedor){
        $proveedor = Proveedor::findOrFail($id_proveedor);

        $proveedor->nombre = $req->input('nombre');
        $proveedor->procedencia = $req->input('procedencia');
        $proveedor->contacto_tel = $req->input('contacto_tel');
        $proveedor->contacto_email = $req->input('contacto_email');
        $proveedor->save();

        return redirect()->route("info_proveedor", ["id_proveedor" => $proveedor->id]);
    }

    public function deleteProveedor($id_proveedor){
        $proveedor = Proveedor::findOrFail($id_proveedor);

        Proveedor::where("id", $proveedor->id)->delete();

        return redirect()->route("proveedores");
    }
}
