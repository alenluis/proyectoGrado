@extends('layouts.app')

@section('content')
    
<h1>VISTA DE USUARIOSS</h1>
<a href="{{route('users.create')}}" class="btn btn-success">AÑADIR</a>
<table>
	<tr>
		<th>#</th>
		<th>USUARIO</th>
		<th>ROLES</th>
		<th>NOMBRES</th>
		<th>CORREO</th>
	</tr>

	@foreach($users as $u)
<tr>
	<td>{{$loop->iteration}}</td>
	<td>{{$u->name}}</td>
	<td>{{$u->rol_descripcion}}</td>
	<td>{{$u->usu_nombre}}</td>
	<td>{{$u->email}}</td>
	
	<td><a href="{{route('users.edit',$u->usu_id)}}" class="btn btn-success">EDITAR<a></td>
<td><form action="{{ route('users.destroy',$u->usu_id) }}" method="POST" onsubmit="return confirm('Desea eliminar el Usuario?')">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
           </form></td>

</tr>
@endforeach

</table





@endsection

