<div class="container">
    <form action="{{ isset($curso) ? route('cursos.update', $curso->id) : route('cursos.store') }}" method="POST">
        @csrf
        @isset($curso)
            @method('PUT')
        @endisset

        <div class="mb-3">
            <label for="cur_titulo" class="form-label">Título del Curso</label>
            <input type="text" class="form-control" id="cur_titulo" placeholder="Título del Curso" name="cur_titulo" value="{{ isset($curso) ? $curso->cur_titulo : '' }}">
        </div>

        <div class="mb-3">
            <label for="cur_descripcion" class="form-label">Descripción del Curso</label>
            <input type="text" class="form-control" id="cur_descripcion" placeholder="Descripción del curso" name="cur_descripcion" value="{{ isset($curso) ? $curso->cur_descripcion : '' }}">
        </div>

        <div class="mb-3">
            <label for="cur_grupo" class="form-label">Grupo del Curso</label>
            <input type="text" class="form-control" id="cur_grupo" placeholder="Grupo del Curso" name="cur_grupo" value="{{ isset($curso) ? $curso->cur_grupo : '' }}">
        </div>

        <button type="submit" class="btn btn-success">Actualizar</button> 
    </form>
</div>
