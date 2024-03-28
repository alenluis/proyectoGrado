@extends('layouts.app')

@section('content')
    <style>
        /* Aplica color negro al texto dentro de la tabla */
        .table th,
        .table td {
            color: black;
        }
    </style>

    <a href="{{route('cursos.create')}}" class="btn btn-success">Nuevo Curso</a>
    <table class="table">
        <tr>
            <th>#</th>
            <th>Título</th>
            <th>Descripción</th>
            <th>Grupo</th>
            <th>Estado</th>
            <th>Acciones</th>
        </tr>
        @foreach($cursos as $c)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $c->cur_titulo }}</td>
            <td>{{ $c->cur_descripcion }}</td>
            <td>{{ $c->cur_grupo }}</td>
            <td>{{ $c->cur_estado == 1 ? 'Activo' : 'Inactivo' }}</td>
            <td>
                <a href="{{ route('cursos.edit',$c->id) }}" class="btn btn-success text-light">Actualizar </a>
                <form action="{{route('cursos.destroy',$c->id)}}" method="POST" onsubmit="return confirm('Desea Eliminar el Curso?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger text-light">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
@endsection
