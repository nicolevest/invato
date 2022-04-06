@extends('layouts.template-form')

@section('titulo', 'Editar Proveedor')
@section("ruta", "/editar_proveedor/$proveedor->id")

@section("metodo")
{{ method_field ('PUT') }}
@stop

@section('contenido-form')
<div>
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" id="nombre" value="{{ $proveedor->nombre }}">
</div>
<div>
<label for="procedencia">Procedencia</label>
    <input type="text" name="procedencia" id="procedencia" value="{{ $proveedor->procedencia }}">
</div>
<div>
<label for="contacto_tel">Contacto tel</label>
    <input type="number" name="contacto_tel" id="contacto_tel"value="{{ $proveedor->contacto_tel }}">
</div>
<div>
<label for="contacto_email">contacto email</label>
    <input type="email" name="contacto_email" id="contacto_email" value="{{ $proveedor->contacto_email}}">
</div>


<div>
    <button>Guardar</button>
</div>
@stop
