<nav class="relative bg-gray-800 w-full flex justify-between items-center">

  <div>
    {{-- Mobile button --}}
    <div id="mobile-button" class="flex justify-start gap-2 px-2 py-2 items-center md:hidden">
      <button aria-controls="mobile-menu" aria-expanded="false">
        <svg id="menu-open-icon" class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="white" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
        <svg id="menu-close-icon" class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="white" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
        </svg>
      </button>
      <p id="mobile-button-label" class="md:hidden inline-block text-white">Menu</p>
    </div>
    
    {{-- Menu --}}
    <div id="admin-menu" class="absolute hidden flex-col px-3 md:py-2 w-full bg-gray-800 z-10 text-white md:flex md:relative md:flex-row md:gap-2">
      
      <a class="py-3 px-2 text-gray-300 hover:bg-gray-700 hover:text-white rounded-md text-md font-medium" href="{{route('admin.dashboard')}}"><i class="fas fa-tachometer-alt"></i> Tableau de bord</a>
        
      <div class="relative dropdown-toggle py-3 px-2 text-gray-300 hover:bg-gray-700 hover:cursor-pointer hover:text-white rounded-md md:rounded-none md:rounded-t-md text-md font-medium">
        <a  href="#" role="button" data-toggle="dropdown" aria-expanded="false" aria-haspopup="true">
          <i class="fas fa-car"></i> Annonces <span class="fas fa-caret-down"></span>
        </a>
        <ul class="dropdown-menu hidden md:absolute md:left-0 ml-6 md:ml-0 md:mt-3 w-64 rounded-md md:rounded-none md:rounded-b-md md:rounded-tr-md bg-gray-700 text-white ">
          <li class="rounded-md hover:bg-gray-800"><a class="block py-2 px-3" href="{{route('admin.ads.index')}}"><i class="fas fa-shopping-cart"></i> Voir les annonces</a></li>
          <li class="rounded-md hover:bg-gray-800"><a class="block py-2 px-3" href="{{route('admin.cars.index')}}"><i class="fas fa-cogs"></i> Gérer les annonces</a></li>
          <li class="rounded-md hover:bg-gray-800"><a class="block py-2 px-3" href="{{route('admin.options.index')}}"><i class="fas fa-cogs"></i> Gérer les options véhicules</a>
          </li>
        </ul>
      </div>
      
      <div class="relative dropdown-toggle py-3 px-2 text-gray-300 hover:bg-gray-700 hover:cursor-pointer hover:text-white rounded-md md:rounded-none md:rounded-t-md text-md font-medium">
        <a href="#" role="button" data-toggle="dropdown" aria-expanded="false" aria-haspopup="true">
          <i class="fas fa-wrench"></i> Le garage <span class="fas fa-caret-down"></span>
        </a>
        <ul class="dropdown-menu hidden md:absolute md:left-0 ml-6 md:ml-0 md:mt-3 w-64 rounded-md md:rounded-none md:rounded-b-md md:rounded-tr-md bg-gray-700 text-white">
          <li class="rounded-md hover:bg-gray-800"><a class="block py-2 px-3" href="{{route('admin.contact.index')}}"><i class="fas fa-address-card"></i> Coordonnées</a></li>
          <li class="rounded-md hover:bg-gray-800"><a class="block py-2 px-3" href="{{route('admin.schedules.index')}}"><i class="fas fa-clock"></i> Horaires</a></li>
          <li class="rounded-md hover:bg-gray-800"><a class="block py-2 px-3" href="{{route('admin.holidays.index')}}"><i class="fas fa-calendar"></i> Fermetures/Vacances</a></li>
        </ul>
      </div>
      
      {{-- <a class="py-3 px-2 text-gray-300 hover:bg-gray-700 hover:text-white rounded-md text-md font-medium" href="#"><i class="fas fa-euro-sign"></i> Offres/Promotions</a> --}}
      
      @if (auth()->check())
        <a class="py-3 px-2 text-gray-300 hover:bg-gray-700 hover:text-white rounded-md text-md font-medium" href="{{route('admin.adminlogout')}}"><i class="fas fa-power-off"></i> Deconnexion</a>
      @else
        <a class="py-3 px-2 text-gray-300 hover:bg-gray-700 hover:text-white rounded-md text-md font-medium" href="{{route('login')}}"><i class="fas fa-user"></i> Login</a>
      @endif
    
    </div>
  </div>
  <div class="text-gray-300 pr-4">
    @if (auth()->check())
      <p>Utilisateur : {{auth()->user()->name}}</p>
    @endif
  </div>
</nav>