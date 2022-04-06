@extends('layouts.master')
@section('titulo', 'Activos')
@section('contenido')
    <table>
        <head>
            <th>n</th>
            <th>Nombre</th>
            <th>Proveedor</th>
            <th></th>
        </head>
        <body>
            @foreach($activos as $n => $activo)
                <tr>
                    <td>{{ $n + 1 }}</td>
                    <td>{{ $marca->nombre}}</td>
                    <td>{{ $marca->proveedor}}</td>

                    <td><a href="/info_marca/{{ $marca->id }}">Info</a></td>
                </tr>
            @endforeach
        </body>
    </table>
@stop
