@extends('layouts.master')
@section('titulo', 'Activos')
@section('contenido')
<div class="boton">
    <button onclick="location.href = '/registro_activo';">Nuevo Activo</button>
</div>
<div class="">
  <table>
      <head>
          <th>#</th>
          <th>Referencia</th>
          <th>Costo</th>
          <th>Fecha Compra</th>
          <th>Fecha Ingreso</th>
          <th>Código QR</th>
          <th>Estado</th>
          <th>Lugar</th>
          <th>Marca</th>
          <th>Tipo</th>
          <th></th>
      </head>
      <body>
          @foreach($activos as $n => $activo)
              <tr>
                  <td>{{ $n + 1 }}</td>
                  <td>{{ $activo->referencia }}</td>
                  <td>{{ $activo->costo }}</td>
                  <td>{{ $activo->fecha_compra }}</td>
                  <td>{{ $activo->fecha_ingreso }}</td>
                  <td>{{ $activo->codigo_qr }}</td>
                  <td>{{ $activo->estado }}</td>
                  <td>{{ $activo->lugar }}</td>
                  <td>{{ $activo->marca }}</td>
                  <td>{{ $activo->tipo }}</td>
                  <td><a href="/info_activo/{{ $activo->id }}">Info</a></td>
              </tr>
          @endforeach
      </body>
  </table>
</div>

@stop
