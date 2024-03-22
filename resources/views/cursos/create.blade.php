@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Cursos</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Agrega el enlace a tu hoja de estilos personalizada si tienes una -->
</head>
<body>

<div class="container mt-5">
    <div class="card">
        <div class="card-header bg-secondary text-white">
            <h3 class="mb-0">Crear Cursos</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('cursos.store') }}" method="POST">
                @csrf    
                @include('cursos.fields')
                <!-- Aquí deberías tener los campos del formulario incluidos -->
               
            </form>
        </div>
    </div>
</div>

<!-- Agrega los scripts de Bootstrap 
 -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.9/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>


@endsection