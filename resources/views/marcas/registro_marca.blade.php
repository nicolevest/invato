@extends ("layouts.template-form")

@section("titulo","Registro Marca")
@section("ruta","/registro_marca")

@section("metodo")
{{ method_field ('POST') }}
@stop

@section("contenido-form")
<div>
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" id="nombre">
</div>
</div>
    <label for="marca">Marca</label>
    <select name="proveedor" id="proveedor">
        @foreach($proveedores as $proveedor)
            <option value="{{$proveedor->id}}">{{$proveedor->nombre}}</option>
        @endforeach
    </select>

    <button onclick="location.href = '/registro_marca';">Nueva Marca</button>
</div>
<div>
    <button>Guardar</button>
</div>
@stop
