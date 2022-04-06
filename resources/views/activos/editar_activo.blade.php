@extends('layouts.template-form')

@section('titulo', 'Editar Activo')
@section("ruta", "/editar_activo/$activo->id")

@section("metodo")
{{ method_field ('PUT') }}
@stop

@section('contenido-form')
<div>
    <label for="referencia">Referencia</label>
    <input type="text" name="referencia" id="referencia" value="{{ $activo->referencia }}">
</div>
<div>
<label for="costo">Costo</label>
    <input type="number" name="costo" id="costo" value="{{ $activo->costo }}">
</div>
<div>
<label for="registro_fecha_compra">Fecha de compra</label>
    <input type="datetime-local" name="fecha_compra" id="registro_fecha_compra"value="{{ $activo->fecha_compra }}">
</div>
<div>
<label for="registro_fecha_ingreso">Fecha de ingreso</label>
    <input type="datetime-local" name="fecha_ingreso" id="registro_fecha_ingreso" value="{{ $activo->fecha_ingreso}}">
</div>

<div>
    <label for="codigo_qr">Código QR</label>
    <input type="text" name="codigo_qr"  id="codigo_qr"value="{{ $activo->codigo_qr }}">
</div>
<div>
    <label for="lugar">Lugar</label>
    <select name="lugar" id="lugar" value="{{ $activo->lugar }}">
        @foreach($lugares as $lugar)
        <option @if($activo->lugar == $lugar->id) selected @endif value="{{$lugar->id}}">{{$lugar->nombre}}</option>
        @endforeach
    </select>
    <button onclick="location.href = '/registro_lugar';">Nuevo Lugar</button>
</div>
<div>
    <label for="marca">Marca</label>
    <select name="marca" id="marca" value="{{ $activo->marca }}">
        @foreach($marcas as $marca)
        <option @if($activo->marca == $marca->id) selected @endif value="{{$marca->id}}">{{$marca->nombre}}</option>
        @endforeach
    </select>
    <button onclick="location.href = '/registro_marca';">Nueva Marca</button>
</div>
<div>
<label for="tipo">Tipo</label>
    <select name="tipo" id="tipo"value="{{ $activo->tipo }}">
        @foreach($tipos as $tipo)
        <option @if($activo->tipo == $tipo->id) selected @endif value="{{$tipo->id}}">{{$tipo->descripcion}}</option>
        @endforeach
    </select>
</div>
<div>
    <button>Guardar</button>
</div>
@stop
