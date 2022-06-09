<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top pt-4">
  <div class="container">
    <a class="navbar-brand" href="/"><strong>Fiber</strong></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#">Comunidad</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Precios</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Características</a>
        </li>
      </ul>

      <ul class="navbar-nav ms-md-5">            
      @if(Auth::check())                
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            {{auth()->user()->name}}
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="/profile">Perfil</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="/logout">Cerrar Sesión</a></li>
            </ul>
            </li> 
            @else
              <li class="nav-item">
                  <a href="/login" class="nav-link text-black btn btn-light"><strong>Inicia Sesión</strong></a>
              </li>
              <li class="nav-item ms-md-4">
                  <a href="/register" class="btn btn-primary nav-link btn-reg"><strong>Regístrate</strong></a>
              </li>            
      @endif
      </ul>
    </div>
  </div>
</nav>