<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Cursos Online</title>
    <style>
        body {
            background-color: #212F3C; /* Fondo gris claro */
            color: #2c3e50; /* Texto gris oscuro */
        }

        .container {
            background-color: #ecf0f1; /* Color de fondo para el contenedor */
            border-radius: 10px; /* Bordes redondeados */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Sutil sombra */
            padding: 20px;
            max-width: 400px; /* Ancho máximo del contenedor */
            margin: auto; /* Centrar el contenedor en la pantalla */
            margin-top: 50px; /* Espaciado superior */
        }

        .btn-primary {
            background-color: #3498db !important; /* Azul */
            border-color: #3498db !important; /* Borde azul */
            transition: background-color 0.3s ease; /* Transición suave del color de fondo */
        }

        .btn-primary:hover {
            background-color: #2980b9 !important; /* Azul más oscuro al pasar el mouse */
            border-color: #2980b9 !important; /* Borde azul más oscuro al pasar el mouse */
        }

        .btn-register {
            background-color: #2c3e50 !important; /* Plomo */
            border-color: #2c3e50 !important; /* Borde plomo */
            color: #fff !important; /* Texto blanco */
            transition: background-color 0.3s ease; /* Transición suave del color de fondo */
        }

        .btn-register:hover {
            background-color: #1e272e !important; /* Plomo más oscuro al pasar el mouse */
            border-color: #1e272e !important; /* Borde plomo más oscuro al pasar el mouse */
        }

        p {
            margin-bottom: 0; /* Elimina el margen inferior del párrafo para un mejor aspecto */
        }
    </style>
</head>
<body>

    <div class="container text-center">
        <h1 class="display-4">Cursos Online</h1>
        <p class="lead">Eres Libre Para Decidir</p>

        <div class="row mt-4">
            <div class="col-md-6 offset-md-3">
                <a href="{{ route('login') }}" class="btn btn-primary btn-lg btn-block">Iniciar Sesión</a>
                <p class="mt-3">¿No tienes una cuenta? <a href="{{ route('register') }}" class="btn btn-register">Regístrate aquí</a></p>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
