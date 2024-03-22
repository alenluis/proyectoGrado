

      </ul>
      
      <!-- Botón desplegable en la parte superior derecha -->
      <div class="dropdown">
        <br>
        <div class="d-flex justify-content-center">
    <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        {{ Auth::user()->usu_nombre }}
    </button>
</div>

        <br>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          <a class="dropdown-item" href="{{ route('profile.edit') }}">Perfil</a>
          <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="dropdown-item">Cerrar Sesión</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</nav>
