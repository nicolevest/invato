@extends('layouts.master')
@section('titulo', $marca->nombre)
@section('contenido')
<div class="formulario">
  <div class="campo">
      <h4>Nombre: {{ $marca->nombre}}</h4>
  </div>
  <div class="campo">
      <h4>Proveedor:{{ $marca->proveedor}}</h4>
  </div>
<div>
  <button onclick="location.href = '/editar_marca/{{ $marca->id }}';">Editar</button>
</div>
  <form action="/eliminar_marca/{{ $marca->id }}" method="POST">
      {{ csrf_field() }}
      {{ method_field ('DELETE') }}
      <button type="submit">Eliminar</button>
  </form>
</div>

@stop
