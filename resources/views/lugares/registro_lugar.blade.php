@extends ("layouts.template-form")

@section("titulo","Registro Lugar")
@section("ruta","/registro_lugar")

@section("metodo")
{{ method_field ('POST') }}
@stop

@section("contenido-form")
<div class="formulario">
  <div>
      <label for="nombre">Nombre</label>
      <input type="text" name="nombre" id="nombre">
  </div>
  <div>
      <label for="">Ubicación</label>
      <input type="" name="ubicacion" id="ubicacion">
  </div>

  <div>
      <label for="descripcion">Descripción</label>
      <input type="text" name="descripcion" id="descripcion">
  </div>

  <div>
      <button type="submit">Guardar</button>
  </div>
</div>

@stop
