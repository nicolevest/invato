@extends('layouts.template-form')

@section('titulo', 'Editar Marca')
@section("ruta", "/editar_marca/$marca->id")

@section("metodo")
{{ method_field ('PUT') }}
@stop

@section('contenido-form')
<div>
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" id="nombre" value="{{ $marca->nombre }}">
</div>
<div>
<label for="proveedor">Proveedor</label>
    <input type="text" name="proveedor" id="proveedor" value="{{ $marca->proveedor }}">
</div>

<div>
    <button>Guardar</button>
</div>
@stop
