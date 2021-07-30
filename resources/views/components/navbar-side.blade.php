<nav class="navbar bg-dark">
    <ul class="navbar-nav">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbardrop" data-toggle="dropdown" href="#">Les annonces</a>
            <div class="dropdown-menu">
                <a href="{{route('ads.index')}}" class="dropdown-item">Voir les annonces</a>
                <a href="{{route('cars.index')}}" class="dropdown-item">Gérer les annonces</a>
                <a href="{{route('options.index')}}" class="dropdown-item">Gérer les options véhicules</a>
            </div>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbardrop" data-toggle="dropdown" href="#">Le garage</a>
            <div class="dropdown-menu">
                <a href="#" class="dropdown-item">Coordonnées</a>
                <a href="{{route('schedules.index')}}" class="dropdown-item">Horaires</a>
            </div>
        </li>
    </ul>
</nav>