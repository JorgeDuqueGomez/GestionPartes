
<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="http://example.com/favicon.ico" />

    <title>
        HMMC
    </title>

    <link href="/HINO/JS/cdn.jsdelivr.net_npm_bootstrap@5.2.3_dist_css_bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="/HINO/JS/cdn.lordicon.com_bhenfmcm.js"></script>
    <link rel="stylesheet" type="text/css" href="/HINO/CSS/estilos.css">
    <link rel="stylesheet" href="/HINO/JS/cdn.datatables.net_1.13.4_css_jquery.dataTables.css" />
    <link rel="stylesheet" href="/HINO/JS/cdn.datatables.net_responsive_2.4.1_css_responsive.dataTables.min.css">
    <script src="/HINO/JS/code.jquery.com_jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
    <script src="/HINO/JS/cdn.datatables.net_1.13.4_js_jquery.dataTables.js"></script>
    <script src="/HINO/JavaScript/formulario.js"></script>

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
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Módulo de Gestión</a>
                                <ul class="dropdown-menu dropdown-menu-dark">
                                    <li><a class="dropdown-item" href="/HINO/view/grupo/index.php">Grupos</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="/HINO/view/linea/index.php">Lineas</a></li>
                                    <li><a class="dropdown-item" href="/HINO/view/estacion/index.php">Estaciones</a></li>
                                    <li><a class="dropdown-item" href="/HINO/view/lateralidad/index.php">Lateralidades</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="/HINO/view/serie/index.php">Serie</a></li>
                                    <li><a class="dropdown-item" href="/HINO/view/familia/index.php">Familia</a></li>
                                    <li><a class="dropdown-item" href="/HINO/view/modelo/index.php">Modelos</a></li>
                                    <li><a class="dropdown-item" href="/HINO/view/sufix/index.php">Sufix</a></li>
                                </ul>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Módulo de Listados</a>
                                <ul class="dropdown-menu dropdown-menu-dark">
                                    <li><a class="dropdown-item" href="/HINO/view/listado/index.php">Gestión de listados</a></li>
                                    <li><a class="dropdown-item" href="/HINO/view/tpm/index.php">Gestión de TPM's</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="/HINO/view/lote/index.php" target="_blank">Lotes de efectividad</a></li>
                                </ul>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Módulo de Estanteria</a>
                                <ul class="dropdown-menu dropdown-menu-dark">
                                    <li><a class="dropdown-item" href="/HINO/view/estanteria/index.php">Gestión de estanteria</a></li>
                                    <li><a class="dropdown-item" href="/HINO/view/parte/index.php">Gestión de partes</a></li>
                                </ul>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Módulo de Consulta</a>
                                <ul class="dropdown-menu dropdown-menu-dark">
                                    <li><a class="dropdown-item" href="/HINO/view/listado/show.php" target="_blank">Listados</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="/HINO/view/estanteria/show.php" target="_blank">Estanteria</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="/HINO/view/grupo/show.php" target="_blank">Grupos</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="/HINO/view/sufix/show.php" target="_blank">Modelos</a></li>
                                </ul>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Módulo de Alistamiento</a>
                                <ul class="dropdown-menu dropdown-menu-dark">
                                    <li><a class="dropdown-item" href="/HINO/view/tornilleria/index.php">Alistamiento PC</a></li>
                                    <li><a class="dropdown-item" href="/HINO/view/sufix/show.php">Alistamiento CKD</a></li>
                                    <li><a class="dropdown-item" href="/HINO/view/sufix/show.php">Alistamiento LOCAL</a></li>
                                </ul>
                            </li>

                            <!-- <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Módulo de Novedades</a>
                                <ul class="dropdown-menu dropdown-menu-dark">
                                    <li><a class="dropdown-item" href="/HINO/view/novedades/index.php">Gestión de novedades</a></li>
                                    <li><a class="dropdown-item" href="/HINO/view/estanteria/index.php">Actualización de novedades</a></li>
                                </ul>
                            </li> -->

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>