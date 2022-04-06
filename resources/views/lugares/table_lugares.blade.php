@extends('layouts.master')
@section('titulo', 'Lugares')
@section('contenido')
    <table>
        <head>
            <th>n</th>
            <th>Nombre</th>
            <th>Ubicación</th>
            <th>Descripción</th>
            <th></th>
        </head>
        <body>
            @foreach($lugares as $n => $lugar)
                <tr>
                    <td>{{ $n + 1 }}</td>
                    <td>{{ $lugar->nombre }}</td>
                    <td>{{ $lugar->ubicacion }}</td>
                    <td>{{ $lugar->descripcion }}</td>
                    <td><a href="/info_lugar/{{ $lugar->id }}">Info</a></td>
                </tr>
            @endforeach
        </body>
    </table>
    <div>
        <button onclick="location.href = '/registro_marca';">Nueva Marca</button>
    </div>
@stop
