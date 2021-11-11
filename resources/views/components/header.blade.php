<nav class="topbar">
    <div class="logo">
        <a href="{{route('home')}}">
            <img src="{{asset('img/assets/logo-peugeot.png')}}" alt="Logo Peugeot">
            <p>Garage Jeantet <span>Sébazac-Concourès</span></p>
        </a>
    </div>
    <div class="links">
        <button class="btn-collapse">
            <span></span>
            <span></span>
            <span></span>
        </button>
        <ul>
            <li><a href="{{route('history')}}">Notre histoire</a></li>
            <li><a href="{{route('services')}}">Nos services</a></li>
            <li><a href="{{route('ads')}}">Nos véhicules</a></li>
            <li><a href="{{route('contact')}}">Contact</a></li>
            <li><a href="{{route('infos')}}">Infos pratiques</a></li>
            <li id="link-appointment"><a href="https://rendezvousenligne.peugeot.fr/rendez-vous-garage-peugeot/france/garage/0000021473">Prendre rendez-vous</a></li>
        </ul>
    </div>
</nav>