<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Invato - @yield('titulo')</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet" type="text/css" />
</head>
<body>
    @include("componentes.barra_nav")
	@yield('contenido')

    <script src="{{ mix('js/app.js') }}" type="text/javascript"></script>
</body>
</html>
