@extends('layouts.template-form')

@section('titulo', 'Editar Lugar')
@section("ruta", "/editar_lugar/$lugar->id")

@section("metodo")
{{ method_field ('PUT') }}
@stop

@section('contenido-form')
<div class="formulario">
  <div>
      <label for="nombre">Nombre</label>
      <input type="text" name="nombre" id="nombre" value="{{ $lugar->nombre }}">
  </div>
  <div>
  <label for="ubicacion">Ubicación</label>
      <input type="text" name="ubicacion" id="ubicacion" value="{{ $lugar->ubicacion }}">
  </div>
  <div>
  <label for="descripcion">Descripcion</label>
      <input type="text" name="descripcion" id="descripcion"value="{{ $lugar->descripcion }}">
  </div>

  <div>
      <button>Guardar</button>
  </div>
</div>

@stop
