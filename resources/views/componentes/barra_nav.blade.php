<nav class="navbar navbar-expand-lg navbar-dark  " style="background-color: #8FB339">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">Invato</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Informes
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Análisis de almacén</a></li>
                            <li><a class="dropdown-item" href="#">Informe de inventario</a></li>
                            <li><a class="dropdown-item" href="#">Informe de operaciones</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Activos
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="/activos">Mostrar Activos</a></li>
                            <li><a class="dropdown-item" href="/registro_activo">Crear nuevo activo</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Operaciones
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="/recepcion_act">Recepción</a></li>
                            <li><a class="dropdown-item" href="/traslado_act">Traslados</a></li>
                            <li><a class="dropdown-item" href="/salida_act">Baja de activo</a></li>
                            <li><a class="dropdown-item" href="#">Ajuste de inventario</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Configuración
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="/marcas">Marcas</a></li>
                            <li><a class="dropdown-item" href="/proveedores">Proveedores</a></li>
                            <li><a class="dropdown-item" href="/lugares">Lugares</a></li>
                            <li><a class="dropdown-item" href="/contacto">Contacto departamento TI</a></li>
                        </ul>
                    </li>

                    @if( Auth::check() )
                        <li class="nav-item">
                            <form action="{{ url('/logout') }}" method="POST" style="display:inline">
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-link nav-link" style="display:inline;cursor:pointer">
                                    Cerrar sesión
                                </button>
                            </form>
                        </li>
                    @endif

                </ul>

            </div>
        </div>
    </nav>
