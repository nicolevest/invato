<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Models\Activo;

class HomeController extends Controller
{
    public function getHome() {
        if (Auth::check()) {
			$recibidos = count(Activo::where('estado', 'Recibido')->get());
			$en_transito = count(Activo::where('estado', 'En transito')->get());
			$dados_de_baja = count(Activo::where('estado', 'Dado de baja')->get());
            return view('home', ["recibidos"=>$recibidos,"en_transito"=>$en_transito,"dados_de_baja"=>$dados_de_baja]);
        } else {
            return redirect()->action([AuthenticatedSessionController::class, 'create']);
        }
    }
}
