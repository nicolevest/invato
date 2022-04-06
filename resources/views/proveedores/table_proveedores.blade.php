@extends('layouts.master')
@section('titulo', 'Activos')
@section('contenido')
    <table>
        <head>
            <th>n</th>
            <th>Nombre</th>
            <th>Procedencia</th>
            <th>Contacto tel</th>
            <th>Contacto email</th>
            <th></th>
        </head>
        <body>
            @foreach($proveedores as $n => $proveedor)
                <tr>
                    <td>{{ $n + 1 }}</td>
                    <td>{{ $proveedor->nombre }}</td>
                    <td>{{ $proveedor->procedencia }}</td>
                    <td>{{ $proveedor->contacto_tel}}</td>
                    <td>{{ $proveedor->contacto_email}}</td>
                    <td><a href="/info_proveedor/{{ $proveedor->id }}">Info</a></td>
                </tr>
            @endforeach
        </body>
    </table>
@stop
