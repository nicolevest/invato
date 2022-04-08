@extends('layouts.master')
@section('titulo', $proveedor->nombre)
@section('contenido')
<div class="formulario">
  <div class="campo">
      <h4>Nombre: {{ $proveedor->nombre }}</h4>
  </div>
  <div class="campo">
      <h4>Procedencia:{{ $proveedor->procedencia }}</h4>
  </div>

  <div class="campo">
      <h4>Contacto tel:{{$proveedor->contacto_tel }}</h4>
  </div>

  <div class="campo">
      <h4>contacto_email:{{ $proveedor->contacto_email }}</h4>
  </div>

  <div>
      <button onclick="location.href = '/editar_proveedor/{{ $proveedor->id }}';">Editar</button>
  </div>

  <form action="/eliminar_proveedor/{{ $proveedor->id }}" method="POST">
      {{ csrf_field() }}
      {{ method_field ('DELETE') }}
      <button type="submit">Eliminar</button>
  </form>
</div>

@stop
