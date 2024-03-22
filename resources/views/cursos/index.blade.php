@extends('layouts.app')

@section('content')


    <a href="{{route('cursos.create')}}" class="btn btn-success">Nuevo Curso</a>
    <table class="table">
        <tr>
            <th class="text-white">#</th>
            <th class="text-white">Título</th>
            <th class="text-white">Descripción</th>
            <th class="text-white">Grupo</th>
            <th class="text-white">Estado</th>
            <th class="text-white">Acciones</th>
        </tr>
        @foreach($cursos as $c)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td class="text-white">{{ $c->cur_titulo }}</td>
            <td class="text-white">{{ $c->cur_descripcion }}</td>
            <td class="text-white">{{ $c->cur_grupo }}</td>
            <td class="text-white">{{ $c->cur_estado == 1 ? 'Activo' : 'Inactivo' }}</td>
            <td>
                <a href="{{ route('cursos.edit',$c->cur_id) }}" class="btn btn-success text-light">Actualizar </a>
                <form action="{{route('cursos.destroy',$c->cur_id)}}" method="POST" onsubmit="return confirm('Desea Eliminar el Curso?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger text-light">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

@endsection
