<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Invato - @yield('titulo')</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="{{ asset('css/tables.css') }}">
		<link rel="stylesheet" href="{{ asset('css/home.css') }}">
		<link rel="stylesheet" href="{{ asset('css/forms.css') }}">
		<link rel="shortcut icon" href="{{ asset('img/logo.png') }}" type="image/x-icon">
</head>
<body>
    @include("componentes.barra_nav")
		@yield('contenido')

    <script src="{{ mix('js/app.js') }}" type="text/javascript"></script>
</body>
</html>
