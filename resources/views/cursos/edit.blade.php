@extends('layouts.app')

@section('content')

<h1>Editar Cursos</h1>
<div class="container">
    <div>
        <form action="{{route('cursos.update',$curso->id)}}" method="POST">
        @csrf    
        @include('cursos.fields')
        </form>
    </div>
</div>
@endsection