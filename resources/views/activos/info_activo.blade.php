@extends('layouts.master')
@section('titulo', $activo->referencia)
@section('contenido')
    <div class="campo">
        <h4>Rerferencia: {{ $activo->referencia }}</h4>
    </div>
    <div class="campo">
        <h4>Costo:{{ $activo->costo }}</h4>
    </div>

    <div class="campo">
        <h4>Fecha compra:{{$activo->fecha_compra }}</h4>
    </div>

    <div class="campo">
        <h4>Fecha ingreso:{{ $activo->fecha_ingreso }}</h4>
    </div>


    <div class="campo">
        <h4>Código QR:</h4>
        <img src="{{ $activo->codigo_qr }}">
    </div>

    <div class="campo">
        <h4>Lugar: {{ $activo->lugar }}</h4>
    </div>

    <div class="campo">
        <h4>Marca: {{ $activo->marca }}</h4>
    </div>

    <div class="campo">
        <h4>Tipo: {{ $activo->tipo }}</h4>
    </div>

    <div>
        <button onclick="location.href = '/editar_activo/{{ $activo->id }}';">Editar</button>
    </div>

    <form action="/eliminar_activo/{{ $activo->id }}" method="POST">
        {{ csrf_field() }}
        {{ method_field ('DELETE') }}
        <button type="submit">Eliminar</button>
    </form>
@stop
