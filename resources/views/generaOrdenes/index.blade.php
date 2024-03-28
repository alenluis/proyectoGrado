@extends('layouts.app')

@section('content')
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

<div class="container bg-white rounded p-4"> <!-- Agregada la clase bg-white y estilos de espaciado y redondeo -->
    <h3 class="bg-success text-center py-2 mb-4">Generar Órdenes</h3>

    <form action="{{ route('GeneraOrdenes') }}" method="POST" id="generar_ordenes_form">
        @csrf

        <div class="form-row align-items-end mb-3">
            <div class="form-group col-md-4">
                <label for="anl_id">Período:</label>
                <select name="anl_id" id="anl_id" class="form-control" required>
                    <option value="">Seleccionar período</option>
                    @foreach ($periodos as $p)
                        <option value="{{ $p->id }}">{{ $p->anl_descripcion }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group col-md-4">
                <label for="jor_id">Jornada:</label>
                <select name="jor_id" id="jor_id" class="form-control" required>
                    <option value="">Seleccionar jornada</option>
                    @foreach ($jornadas as $j)
                        <option value="{{ $j->id }}">{{ $j->jor_descripcion }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group col-md-4">
                <label for="mes">Mes:</label>
                <select name="mes" id="mes" class="form-control" required>
                    <option value="">Seleccionar mes</option>
                    @foreach ($meses as $key => $m)
                        <option value="{{ $key }}">{{ $m }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-primary">
                <i class="fas fa-search mr-2"></i>Generar
            </button>
        </div>
    </form>

    <div class="table-responsive mt-4">
        <table class="table table-striped table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th scope="col" class="text-white">Ordenes Generadas</th>
                    <th scope="col" class="text-white">Secuencial</th>
                    <th scope="col" class="text-white">Fecha</th>
                    <th scope="col" class="text-white">Año Lectivo</th>
                    <th scope="col" class="text-white">Jornada</th>
                    <th scope="col" class="text-white">MES</th>
                    <th scope="col" class="text-white">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($ordenes as $o)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $o->especial }}</td>
                    <td>{{ $o->fecha }}</td>
                    <td>{{ $o->anl_descripcion }}</td>
                    <td>{{ $o->jor_descripcion }}</td>
                    <td>{{ $o->mes }}</td>
                    <td>
                        <!-- Aquí puedes colocar tus acciones -->
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
