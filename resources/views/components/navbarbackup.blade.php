<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <ul class="navbar-nav mr-auto">
        @if (!Auth::user())
        <li class="nav-item">
            <a class="nav-link" href="{{route('ads.index')}}">Annonces</a>
        </li>
        @endif
    </ul>

    <ul class="navbar-nav ml-auto">
        @if (Auth::user())
            @auth
            <li class="nav-item">
                <a class="nav-link" href="{{route('dashboard')}}">Tableau de bord</a>
            </li>
            <li class="nav-item">
                {!! Form::open(['route' => 'logout']) !!}
                <a class="nav-link" href={{ route('logout') }} onclick="
                    event.preventDefault(); 
                    this.closest('form').submit();">
                    Logout
                </a>
                {!! Form::close() !!}
            </li>
            @endauth
        @else
            <li class="nav-item">
                <a class="nav-link" href="{{route('login')}}">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('register')}}">S'enregistrer</a>
            </li>
        @endif
    </ul>
  </nav>