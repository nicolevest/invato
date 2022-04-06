<?php

namespace App\Http\Controllers;

use App\Models\Marca;
use App\Models\Proveedor;

use Illuminate\Http\Request;

class MarcaController extends Controller
{
    public function getMarca($id_marca) {
        $marca = Marca::findOrFail($id_marca);

        $marca->proveedor = Proveedor::where('id', $marca->proveedor)->get('nombre')[0]->nombre;

        return view("marcas.info_marca", ["marca" => $marca]);
    }

    public function getMarcas(){
        $marcas = Marca::all();

        foreach ($marcas as $marca) {
            $marca->proveedor = Proveedor::where('id', $marca->proveedor)->get('nombre')[0]->nombre;
        }
        return view("marcas.table_marcas", ["marcas" => $marcas]);
    }

    public function getRegistroMarca(){
        $proveedores = Proveedor::all();

        return view ("marcas.registro_marca",["proveedores" => $proveedores]);
    }

    public function postRegistroMarca(Request $req){
        $marca= new Marca;

        $marca->nombre = $req->input('nombre');
        $marca->proveedor = $req->input('proveedor');
        $marca->save();

        return redirect()->route("info_marca", ["id_marca" => $marca->id]);
    }

    public function getEditarMarca($id_marca) {
        $marca = Marca::findOrFail($id_marca);

        $proveedor = Proveedor::all();

        return view('marcas.editar_marca', ["marca" => $marca, "proveedor" => $proveedor]);
    }

    public function putEditarMarca(Request $req, $id_marca){
        $marca = Marca::findOrFail($id_marca);

        $marca->nombre = $req->input('nombre');
        $marca->proveedor = $req->input('proveedor');
        $marca->save();

        return redirect()->route("info_marca", ["id_marca" => $marca->id]);
    }

    public function deleteMarca($id_marca){
        $marca = Marca::findOrFail($id_marca);

        Marca::where("id", $marca->id)->delete();

        return redirect()->route("marcas");
    }
}
