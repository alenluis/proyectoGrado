<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Vendor CSS -->
    <link rel="stylesheet" href="./assets/css/libs.bundle.css" />
    <!-- Main CSS -->
    <link rel="stylesheet" href="./assets/css/theme.bundle.css" />
    
    <!-- Page Content -->
</head>

<body class="">
    <!-- Mover el aside a la izquierda -->
    <aside class="aside p-3" style="position: fixed; top: 0; left: 0; bottom: 0; background-color: #ff6f61; border-right: 2px solid black; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
        <!-- Mobile Logo-->
        <div class="d-flex justify-content-center align-items-center py-3">
            <a class="m-0" href="./index.html">
                <div class="d-flex align-items-center justify-content-center">
                    <svg class="f-w-6 me-2 text-warning" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 398.39 353.81"><polygon points="228.38 33.94 0 262.32 0 0 119.61 0 119.61 43.01 101.9 60.73 86.02 76.61 86.02 33.6 33.6 33.6 33.6 181.2 214.46 0.34 390.66 0.34 242.09 148.91 218.73 124.76 309.55 33.94 228.38 33.94" fill="black"/><polygon points="398.39 353.81 217.51 353.81 131.04 261.75 45.09 353.81 0 353.81 0 353.49 131.26 212.91 232.05 320.21 317.27 320.21 170.28 173.21 194.19 149.29 194.19 149.55 254.9 210.51 254.97 210.39 398.39 353.81" fill="black"/></svg>
                    <span class="fw-bold fs-3 text-white">TUTI</span>
                </div>                    
            </a>
        </div>
        <!-- User Details-->
        <style>
            .aside-menu {
                list-style: none;
                padding: 0;
                margin: 0;
            }

            .aside-menu .menu-section {
                font-weight: bold;
                color: white;
                margin-bottom: 15px;
                font-size: 18px;
                padding-left: 10px;
                border-bottom: 2px solid rgba(255, 255, 255, 0.3);
            }

            .aside-menu .menu-item {
                margin-bottom: 12px;
            }

            .aside-menu .menu-link {
                text-decoration: none;
                color: white;
                display: flex;
                align-items: center;
                padding: 12px;
                border-radius: 8px;
                transition: background-color 0.3s ease, color 0.3s ease;
            }

            .aside-menu .menu-link:hover {
                background-color: #ff866b; /* Color de fondo al pasar el mouse */
                color: black;
            }

            .aside-menu .menu-link i {
                margin-right: 15px;
                font-size: 20px;
            }

            .aside-menu .menu-link span {
                font-size: 16px;
            }
        </style>

        <ul class="aside-menu">
            <!-- Dashboard Menu Section-->
            <li class="menu-section">Menú</li>
            <li class="menu-item">
                <a class="menu-link" href="{{ route('login') }}">
                    <i class="ri-user-line"></i> <span>Iniciar sesión</span>
                </a>
            </li>
            <li class="menu-item">
                <a class="menu-link" href="http://localhost/tercero/cursos/public/cursos">
                    <i class="ri-book-line"></i> <span>Cursos</span>
                </a>
            </li>
            <li class="menu-item">
                <a class="menu-link" href="users">
                    <i class="ri-group-line"></i> <span>Usuarios</span>
                </a>
            </li>
            <li class="menu-item">
                <a class="menu-link" href="{{ route('generar_ordenes.index') }}">
                    <i class="ri-file-list-line"></i> <span>Generar Órdenes</span>
                </a>
            </li>
        </ul>
    </aside>

    <!-- Contenido principal -->
    <main style="margin-left: 250px;"> <!-- Ajusta el margen según el ancho de tu aside -->
        @include('layouts.navigation')
        <div class="min-h-screen">
            <div class="container">
                @yield('content')
            </div>
        </div>
    </main>

    <!-- Tus scripts al final del body -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
