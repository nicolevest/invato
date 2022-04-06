@extends ("layouts.template-form")

@section("titulo","Registro Proveedor")
@section("ruta","/registro_proveedor")

@section("metodo")
{{ method_field ('POST') }}
@stop

@section("contenido-form")
<div>
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" id="nombre">
</div>
<div>
    <label for="procedencia">procedencia</label>
    <input type="text" name="procedencia" id="procedencia">
</div>

<div>
    <label for="contacto_tel">Contacto tel</label>
    <input type="number" name="contacto_tel" id="contacto_tel">
</div>

<div>
    <label for="contacto_email">Contacto email</label>
    <input type="email" name="contacto_tel" id="contacto_tel">
</div>

<div>
    <button>Guardar</button>
</div>
@stop
