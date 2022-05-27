<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li>
          <a href="{{route('admin.dashboard')}}"><i class="fas fa-tachometer-alt"></i> Tableau de bord</a>
        </li>
        <li class="dropdown">
          <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false" aria-haspopup="true">
            <span><i class="fas fa-car"></i> Annonces <span class="caret"></span></span>
          </a>
          <ul class="dropdown-menu">
            <li><a href="{{route('admin.ads.index')}}"><i class="fas fa-shopping-cart"></i> Voir les annonces</a></li>
            <li><a href="{{route('admin.cars.index')}}"><i class="fas fa-cogs"></i> Gérer les annonces</a></li>
            <li><a href="{{route('admin.options.index')}}"><i class="fas fa-cogs"></i> Gérer les options véhicules</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false" aria-haspopup="true">
            <span><i class="fas fa-wrench"></i> Le garage <span class="caret"></span></span>
          </a>
          <ul class="dropdown-menu">
            <li><a href="{{route('admin.contact.index')}}"><i class="fas fa-address-card"></i> Coordonnées</a></li>
            <li><a href="{{route('admin.schedules.index')}}"><i class="fas fa-clock"></i> Horaires</a></li>
            <li><a href="{{route('admin.holidays.index')}}"><i class="fas fa-calendar"></i> Fermetures/Vacances</a></li>
          </ul>
        </li>
        <li><a class="nav-link" href="#"><i class="fas fa-euro-sign"></i>Offres/Promotions</a></li>
        @if (Auth::check()) 
          <li>
            <a class="nav-link" href="{{route('admin.adminlogout')}}"><i class="fas fa-power-off"></i> Deconnexion</a>
          </li>
        @else
          <li>
            <a class="nav-link" href="{{route('login')}}"><i class="fas fa-user"></i> Login</a>
          </li>
        @endif
      </ul>
    </div>
  </div>
</nav>

<!-- BEGIN mobile navigation menu -->
<nav class="navbar-collapse">
  <a class="navbar-link" href="{{route('admin.dashboard')}}"><i class="fas fa-tachometer-alt"></i> Tableau de bord</a>
  <div class="navbar-dropdown">
    <span><i class="fas fa-car"></i> Annonces</span>
    <div class="dropdown-content">
      <a class="dropdown-link" href="{{route('admin.ads.index')}}"><i class="fas fa-shopping-cart"></i> Voir les
        annonces</a></li>
      <a class="dropdown-link" href="{{route('admin.cars.index')}}"><i class="fas fa-cogs"></i> Gérer les
        annonces</a></li>
      <a class="dropdown-link" href="{{route('admin.options.index')}}"><i class="fas fa-cogs"></i> Gérer les
        options véhicules</a></li>
    </div>
  </div>
  <div class="navbar-dropdown">
    <span><i class="fas fa-wrench"></i> Le garage</span>
    <div class="dropdown-content">
      <a class="dropdown-link" href="{{route('admin.contact.index')}}"><i class="fas fa-address-card"></i>
        Coordonnées</a></li>
      <a class="dropdown-link" href="{{route('admin.schedules.index')}}"><i class="fas fa-clock"></i> Horaires</a>
      </li>
      <a class="dropdown-link" href="{{route('admin.holidays.index')}}"><i class="fas fa-calendar"></i>
        Fermetures/Vacances</a></li>
    </div>
  </div>
  <a class="navbar-link" href="#"><i class="fas fa-euro-sign"></i> Offres/Promotions</a>

</nav>
<!-- END mobile navigation menu -->