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
<div>
    <label for="proveedor">Proveedor</label>
    <select name="proveedor" id="proveedor" value="{{ $marca->proveedor }}">
        @foreach($proveedores as $proveedor)
        <option @if($marca->proveedor == $proveedor->id) selected @endif value="{{$proveedor->id}}">{{$proveedor->nombre}}</option>
        @endforeach
    </select>
    <button onclick="location.href = '/registro_proveedor';">Nuevo Proveedor</button>
</div>

<div>
    <button>Guardar</button>
</div>
@stop
