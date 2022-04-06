<?php

use Illuminate\Support\Facades\Route;


//ingreso pág principal
Route::get('/', function () {
    return view('home');
});

//registro de usuario
Route::get('registro_usuario', function () {
    return view('registro_usuario');
});

//Login
Route::get('login', function () {
    return view('login');
});

//activo
Route::get('registro_activo', function () {
    return view('registro_activo');
});

//información activo

Route::get('info_activo/{referencia_activo}', function ($referencia_activo) {
    return view('info_activo')->with('referencia_activo',$referencia_activo);
});

//editar activo
Route::get('editar_activo/{referencia_activo}', function ($referencia_activo) {
    return view('editar_activo')->with('referencia_activo',$referencia_activo);
});
//recepción
Route::get('recepcion_act/{referencia_activo}', function ($referencia_activo) {
    return view('recepcion_act')->with('referencia_activo',$referencia_activo);
});

//traslado
Route::get('traslado_act/{referencia_activo}', function ($referencia_activo) {
    return view('traslado_act')->with('referencia_activo',$referencia_activo);
});

//dados de baja
Route::get('salida_act/{referencia_activo}', function ($referencia_activo) {
    return view('salida_act')->with('referencia_activo',$referencia_activo);
});

//configuración
Route::get('config/{username}', function ($username) {
    return view('config')->with('username',$username);
});



