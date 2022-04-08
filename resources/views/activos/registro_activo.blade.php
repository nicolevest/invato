@extends ("layouts.template-form")

@section("titulo","Registro Activo")
@section("ruta","/registro_activo")

@section("metodo")
{{ method_field ('POST') }}
@stop

@section("contenido-form")
<div class="formulario">
  <h2>Registre el nuevo activo a continuación:</h2>
  <div class="campo">
      <label for="referencia">Referencia</label>
      <input type="text" name="referencia" id="referencia">
  </div>
  <div class="campo">
      <label for="costo">Costo</label>
      <input type="number" name="costo" id="costo">
  </div >

  <div class="campo">
      <label for="registro_fecha_compra">Fecha de compra</label>
      <input type="datetime-local" name="fecha_compra" id="registro_fecha_compra">
  </div>

  <div class="campo">
      <label for="registro_fecha_ingreso">Fecha de ingreso</label>
      <input type="datetime-local" name="fecha_ingreso" id="registro_fecha_ingreso">
  </div>

  <div class="campo">
      <label for="codigo_qr">Código QR</label>
      <input type="text" name="codigo_qr" id="codigo_qr">
  </div>
  <div class="campo">
  <label for="lugar">Lugar</label>
      <select name="lugar" id="lugar">
          @foreach($lugares as $lugar)
          <option value="{{$lugar->id}}">{{$lugar->nombre}}</option>
          @endforeach
      </select>
  	<button onclick="event.preventDefault(); window.open('/registro_lugar', '_blank');">Nuevo Lugar</button>
  </div>
  <div class="campo">
  <label for="marca">Marca</label>
      <select name="marca" id="marca">
          @foreach($marcas as $marca)
          <option value="{{$marca->id}}">{{$marca->nombre}}</option>
          @endforeach
      </select>
      <button onclick="event.preventDefault(); window.open('/registro_marca', '_blank');">Nueva Marca</button>
  </div>
  <div class="campo">
  <label for="tipo">Tipo</label>
      <select name="tipo" id="tipo">
          @foreach($tipos as $tipo)
          <option value="{{$tipo->id}}">{{$tipo->descripcion}}</option>
          @endforeach
      </select>
  </div>
  <div class="campo">
      <button type="submit">Guardar</button>
  </div>
</div>
@stop
