@extends('layouts.master')
@section('titulo', $marca->nombre)
@section('contenido')
    <div class="campo">
        <h4>Nombre: {{ $activo->nombre}}</h4>
    </div>
    <div class="campo">
        <h4>Proveedor:{{ $activo->proveedor}}</h4>
    </div>
    <form action="/eliminar_marca/{{ $marca->id }}" method="POST">
        {{ csrf_field() }}
        {{ method_field ('DELETE') }}
        <button type="submit">Eliminar</button>
    </form>
@stop
