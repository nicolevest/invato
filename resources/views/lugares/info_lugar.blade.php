@extends('layouts.master')
@section('titulo', $lugar->nombre)
@section('contenido')
<div class="formulario">
  <div class="campo">
      <h4>Nombre: {{ $lugar->nombre }}</h4>
  </div>
  <div class="campo">
      <h4>Ubicación:{{ $lugar->ubicacion }}</h4>
  </div>

  <div class="campo">
      <h4>Descripción:{{$lugar->descripcion }}</h4>
  </div>

  <div>
      <button onclick="location.href = '/editar_lugar/{{ $lugar->id }}';">Editar</button>
  </div>

  <form action="/eliminar_lugar/{{ $lugar->id }}" method="POST">
      {{ csrf_field() }}
      {{ method_field ('DELETE') }}
      <button type="submit">Eliminar</button>
  </form>
</div>

@stop
