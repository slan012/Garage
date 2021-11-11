<nav class="navbar">
    <a class="navbar-link" href="{{route('admin.dashboard')}}"><i class="fas fa-tachometer-alt"></i> Tableau de bord</a>
    <div class="navbar-dropdown">
        <span><i class="fas fa-car"></i> Annonces</span>
        <div class="dropdown-content">
            <a class="dropdown-link" href="{{route('admin.ads.index')}}"><i class="fas fa-shopping-cart"></i> Voir les annonces</a></li>
            <a class="dropdown-link" href="{{route('admin.cars.index')}}"><i class="fas fa-cogs"></i> Gérer les annonces</a></li>
            <a class="dropdown-link" href="{{route('admin.options.index')}}"><i class="fas fa-cogs"></i> Gérer les options véhicules</a></li>
        </div>
    </div>
    <div class="navbar-dropdown">
        <span><i class="fas fa-wrench"></i> Le garage</span>
        <div class="dropdown-content">
            <a class="dropdown-link" href="{{route('admin.contact.index')}}"><i class="fas fa-address-card"></i> Coordonnées</a></li>
            <a class="dropdown-link" href="{{route('admin.schedules.index')}}"><i class="fas fa-clock"></i> Horaires</a></li>
            <a class="dropdown-link" href="{{route('admin.holidays.index')}}"><i class="fas fa-calendar"></i> Fermetures/Vacances</a></li>
        </div>
    </div>
    <a class="navbar-link" href="#"><i class="fas fa-euro-sign"></i> Offres/Promotions</a>
    {!! Form::open(['route' => 'logout', 'class' => 'navbar-link']) !!}
        <a class="navbar-link" href={{ route('logout') }} onclick="
            event.preventDefault(); 
            this.closest('form').submit();">
            Déconnexion
        </a>
    {!! Form::close() !!}
</nav>

<!-- BEGIN mobile navigation menu -->
<nav class="navbar-collapse">
    <a class="navbar-link" href="{{route('admin.dashboard')}}"><i class="fas fa-tachometer-alt"></i> Tableau de bord</a>
    <div class="navbar-dropdown">
        <span><i class="fas fa-car"></i> Annonces</span>
        <div class="dropdown-content">
            <a class="dropdown-link" href="{{route('admin.ads.index')}}"><i class="fas fa-shopping-cart"></i> Voir les annonces</a></li>
            <a class="dropdown-link" href="{{route('admin.cars.index')}}"><i class="fas fa-cogs"></i> Gérer les annonces</a></li>
            <a class="dropdown-link" href="{{route('admin.options.index')}}"><i class="fas fa-cogs"></i> Gérer les options véhicules</a></li>
        </div>
    </div>
    <div class="navbar-dropdown">
        <span><i class="fas fa-wrench"></i> Le garage</span>
        <div class="dropdown-content">
            <a class="dropdown-link" href="{{route('admin.contact.index')}}"><i class="fas fa-address-card"></i> Coordonnées</a></li>
            <a class="dropdown-link" href="{{route('admin.schedules.index')}}"><i class="fas fa-clock"></i> Horaires</a></li>
            <a class="dropdown-link" href="{{route('admin.holidays.index')}}"><i class="fas fa-calendar"></i> Fermetures/Vacances</a></li>
        </div>
    </div>
    <a class="navbar-link" href="#"><i class="fas fa-euro-sign"></i> Offres/Promotions</a>
    
</nav>
<!-- END mobile navigation menu -->
