@extends('layouts.master')
@section('titulo', 'Activos')
@section('contenido')
    <table>
        <head>
            <th>n</th>
            <th>Nombre</th>
            <th>Ubicación</th>
            <th>Descripción</th>111
            <th></th>
        </head>
        <body>
            @foreach($activos as $n => $activo)
                <tr>
                    <td>{{ $n + 1 }}</td>
                    <td>{{ $lugar->nombre }}</td>
                    <td>{{ $lugar->ubicacion}}</td>
                    <td>{{ $lugar->descripcion }}</td>
                    <td><a href="/info_lugar/{{ $lugar->id }}">Info</a></td>
                </tr>
            @endforeach
        </body>
    </table>
@stop
