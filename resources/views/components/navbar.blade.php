<nav class="navbar navbar-expand-lg bg-warning ">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{route('homepage')}}">Home</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse m-auto" id="navbarSupportedContent">
        <ul class="navbar-nav m-auto mb-2 mb-lg-0">
          @auth
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('user.profile')}}">Profilo</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('game.create')}}">Carica un gioco</a>
          </li>
          @endauth
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('game.index')}}">Lista giochi</a>
          </li>
          @auth
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('console.create')}}">Inserisci una console</a>
          </li>
          @endauth
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('console.index')}}">Lista console</a>
          </li>
          @auth
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Ciao {{Auth::user()->name}}
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{route('login')}}">Accedi</a></li>
              <li><a class="dropdown-item" href="{{route('register')}}">Registrati</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#" onclick="event.preventDefault();document.querySelector('#form-logout').submit();">Esci</a></li>
              <form action="{{route('logout')}}" method="POST" id="form-logout" class="d-none">@csrf</form>
            </ul>
          </li>
          @else
          
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Benvenuto
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{route('login')}}">Accedi</a></li>
              <li><a class="dropdown-item" href="{{route('register')}}">Registrati</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#" onclick="event.preventDefault();document.querySelector('#form-logout').submit();">Esci</a></li>
              <form action="{{route('logout')}}" method="POST" id="form-logout" class="d-none">@csrf</form>
            </ul>
          </li>
          @endauth
        </ul>
        
      </div>
    </div>
  </nav>