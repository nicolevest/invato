@extends ("layouts.template-form")

@section("titulo","Registro Marca")
@section("ruta","/registro_marca")

@section("metodo")
{{ method_field ('POST') }}
@stop

@section("contenido-form")
<div class="formulario">
  <div>
      <label for="nombre">Nombre</label>
      <input type="text" name="nombre" id="nombre">
  </div>
  <label for="marca">Marca</label>
  <select name="proveedor" id="proveedor">
      @foreach($proveedores as $proveedor)
          <option value="{{$proveedor->id}}">{{$proveedor->nombre}}</option>
      @endforeach
  </select>

  <button onclick="event.preventDefault(); window.open('/registro_proveedor', '_blank');">Nuevo Proveedor</button>
  <div>
    <button type="submit">Guardar</button>
  </div>

</div>


@stop
