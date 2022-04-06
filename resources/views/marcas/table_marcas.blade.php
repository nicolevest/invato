@extends('layouts.master')
@section('titulo', 'Marcas')
@section('contenido')
    <table>
        <head>
            <th>n</th>
            <th>Nombre</th>
            <th>Proveedor</th>
            <th></th>
        </head>
        <body>
            @foreach($marcas as $n => $marca)
                <tr>
                    <td>{{ $n + 1 }}</td>
                    <td>{{ $marca->nombre }}</td>
                    <td>{{ $marca->proveedor }}</td>

                    <td><a href="/info_marca/{{ $marca->id }}">Info</a></td>
                </tr>
            @endforeach
        </body>
    </table>
    <div>
        <button onclick="location.href = '/registro_marca';">Nueva Marca</button>
    </div>
@stop
