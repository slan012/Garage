
<div class="container-footer">
    <div class="footer-logo">
        <img src="{{asset('img/assets/logo-peugeot.png')}}" alt="Logo Peugeot">
    </div>
    <div class="footer-informations">
        <section class="footer-bloc address">
            <h3 class="footer-title">Nous contacter</h3>
            @if (isset($dataBaseError)) 
                <div class="footer-content">
                    <p>{{$dataBaseError}}</p>
                </div>
            @else
            <div class="footer-content">
                <address>
                    <span>{{$contact_information->name}}</span>
                    <span>{{$contact_information->adress}}</span>
                    <span>{{$contact_information->zipcode}} {{$contact_information->city}}</span>
                </address>
                <p>Tel :
                    <a href="tel:+33565469352"> 
                        <strong>
                        {{
                            sprintf("%s %s %s %s %s",
                                substr($contact_information->phone, 0, 2),
                                substr($contact_information->phone, 2, 2),
                                substr($contact_information->phone, 4, 2),
                                substr($contact_information->phone, 6, 2),
                                substr($contact_information->phone, 8, 2)
                            )
                        }}
                        </strong>
                    </a>
                </p>
                <p>e-mail :
                    <a class="footer-mail" href="mailto:{{$contact_information->email}}">{{$contact_information->email}}</a>
                </p>
                </div>
                <a class="btn" href="https://rendezvousenligne.peugeot.fr/rendez-vous-garage-peugeot/france/garage/0000021473">Prendre rendez-vous</a>
        </section>
        <section class="footer-bloc schedules">
            <h3 class="footer-title">Horaires d'ouverture</h3>
            <div class="footer-content">
                <p>du lundi au vendredi : {{$week_schedule}}</p>
                <p>le samedi : {{$saturday_schedule}}</p>
                <p>le dimanche : {{$sunday_schedule}}</p>
            </div>
            <a class="btn" href="#">Détails horaires</a>
        </section>
        <section class="footer-bloc site-informations">
            <h3 class="footer-title">Informations</h3>
            <div class="footer-content">
                <a href="#">Politique de cookies</a>
                <a href="#">Mentions Légales</a>
            </div>
        </section>
        @endif
    </div>
</div>
<div class="creation">
    <p>Réalisé avec <i class="fas fa-wrench"></i> par <a href="mailto:e.larroumets@hotmail.fr">Etienne LARROUMETS</a></p>
</div>