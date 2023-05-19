<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HMMC</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/HINO/CSS/estilos.css">
    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.4.1/css/responsive.dataTables.min.css">
</head>

<body>

    <nav class="navbar navbar-dark bg-danger">
        <div class="container-fluid">
            <a class="navbar-brand" href="/HINO/index.php">Hino Motors Manufacturing</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">HERRAMIENTAS</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>

                <div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Modulo de Gestión</a>
                                <ul class="dropdown-menu dropdown-menu-dark">
                                    <li><a class="dropdown-item" href="/HINO/view/grupo/index.php">Grupos</a></li>
                                    <li><a class="dropdown-item" href="/HINO/view/parte/index.php">Partes</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="/HINO/view/linea/index.php">Lineas</a></li>
                                    <li><a class="dropdown-item" href="/HINO/view/estacion/index.php">Estaciones</a></li>
                                    <li><a class="dropdown-item" href="/HINO/view/lateralidad/index.php">Lateralidades</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="/HINO/view/modelo/index.php">Modelos</a></li>
                                    <li><a class="dropdown-item" href="/HINO/view/sufix/index.php">Sufix</a></li>
                                </ul>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Modulo de Consulta</a>
                                <ul class="dropdown-menu dropdown-menu-dark">
                                    <li><a class="dropdown-item" href="/HINO/view/grupo/show.php">Grupos</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="/HINO/view/sufix/show.php">Modelos</a></li>
                                </ul>
                            </li>

                            <!-- <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Modelo
                                </a>
                                <ul class="dropdown-menu dropdown-menu-dark">
                                    <li><a class="dropdown-item" href="/HINO/view/modelo/index.php">Consultar modelos actuales</a></li>
                                    <li><a class="dropdown-item" href="#">Agregar nuevo Sufix</a></li>
                                    <li><a class="dropdown-item" href="#">Modificar Sufix</a></li>
                                    <li><a class="dropdown-item" href="#">Desactivar Sufix</a></li>
                                </ul>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Area
                                </a>
                                <ul class="dropdown-menu dropdown-menu-dark">

                                    <li><a class="dropdown-item" href="/HINO/view/estacion/index.php">Estación</a></li>

                                    <li><a class="dropdown-item" href="#">Consultar listados</a></li>
                                    <li><a class="dropdown-item" href="#">Consultar CPL</a></li>
                                    <li><a class="dropdown-item" href="#">Consultar planos</a></li>
                                    <li><a class="dropdown-item" href="#">Consultar modelos</a></li>
                                </ul>
                            </li> -->

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>