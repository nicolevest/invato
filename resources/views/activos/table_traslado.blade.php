@extends('layouts.master')
@section('titulo', 'Activos en Transito')
@section('contenido')
    <table>
        <head>
            <th>n</th>
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
			<th></th>
        </head>
        <body>
            @foreach($activos as $n => $activo)
			<form action="/traslado_act/{{ $activo->id }}" method="POST">
				{{ csrf_field() }}
				{{ method_field('PUT') }}
                <tr>
                    <td>{{ $n + 1 }}</td>
                    <td>{{ $activo->referencia }}</td>
                    <td>{{ $activo->costo }}</td>
                    <td>{{ $activo->fecha_compra }}</td>
                    <td>{{ $activo->fecha_ingreso }}</td>
                    <td>{{ $activo->codigo_qr }}</td>
                    <th>{{ $activo->estado }}</th>
                    <td>{
						<select name="lugar" id="lugar" value="{{ $activo->lugar }}">
							@foreach($lugares as $lugar)
							<option @if($activo->lugar == $lugar->id) selected @endif value="{{$lugar->id}}">{{$lugar->nombre}}</option>
							@endforeach
						</select>
						<!-- <button onclick="location.href = '/registro_lugar';">Nuevo Lugar</button> -->
					</td>
                    <td>{{ $activo->marca }}</td>
                    <td>{{ $activo->tipo }}</td>
                    <td><a href="/info_activo/{{ $activo->id }}">Info</a></td>
					@if($activo->estado != 'En transito')
						<td>
							<button type="submit">Trasladar</button>
						</td>
					@endif
                </tr>
			</form>
            @endforeach
        </body>
    </table>
@stop
