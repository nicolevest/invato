@extends ("layouts.master")
@section('contenido')
    <form action="@yield('ruta')" method="POST">
    {{ csrf_field() }}
    @yield('metodo')
    @yield('contenido-form')
    </form>
@stop
