@extends('layouts.app')

@section('content')
    
<h1 style="color: black;">VISTA DE USUARIOS</h1>
<a href="{{route('users.create')}}" class="btn btn-success">AÑADIR</a>
<table>
	<tr>
		<th style="color: black;">#</th>
		<th style="color: black;">USUARIO</th>
		<th style="color: black;">ROLES</th>
		<th style="color: black;">NOMBRES</th>
		<th style="color: black;">CORREO</th>
	</tr>

	@foreach($users as $u)
<tr>
	<td style="color: black;">{{$loop->iteration}}</td>
	<td style="color: black;">{{$u->name}}</td>
	<td style="color: black;">{{$u->rol_descripcion}}</td>
	<td style="color: black;">{{$u->usu_nombre}}</td>
	<td style="color: black;">{{$u->email}}</td>
	
	<td><a href="{{route('users.edit',$u->usu_id)}}" class="btn btn-success">EDITAR</a></td>
	<td>
		<form action="{{ route('users.destroy',$u->usu_id) }}" method="POST" onsubmit="return confirm('Desea eliminar el Usuario?')">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
        </form>
    </td>
</tr>
@endforeach

</table>
@endsection
