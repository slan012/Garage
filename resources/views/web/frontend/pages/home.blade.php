@extends('web.frontend.layouts.layout')

@section('title', 'Accueil')

@section('main')


    <div class="banner">
        <strong>Database Connected: </strong>
        <img src="{{asset('img/assets/img_banner3.png')}}" alt="">
        <div class="container-banner">
            <p>Situé à Sébazac Concourès près de Rodez en Aveyron, le garage Jeantet, 
                réparateur agréé Peugeot, entretient et répare les véhicules automobiles toutes marques depuis 1963.</p>
            <a class="btn" href="https://rendezvousenligne.peugeot.fr/rendez-vous-garage-peugeot/france/garage/0000021473">Prendre rendez-vous</a>
        </div>
    </div>
    <div class="img-fullwidth">
        <picture>
            <source media="(max-width: 640px)" srcset="{{asset('img/assets/garage1_small.jpg')}}">
            <source media="(min-width: 641px)" srcset="{{asset('img/assets/garage1.jpg')}}">
            <img src="" alt="{{asset('img/assets/garage1.jpg')}}"" alt="La devanture du garage Jeantet, une 208 électrique est garée devant l'entrée.">
        </picture>
    </div>
    <section class="container-fullwidth">
        <div class="bloc bloc-left">
            <img class="bloc-img" src="{{asset('../img/assets/logo_v2_600.png')}}" alt=""> 
            <div class="bloc-content">
                <h2 class="bloc-header">Les automobiles Peugeot</h2>
                <div class="bloc-body">
                    <p>
                        Au <strong>garage Jeantet</strong>, nous sommes agréés et spécialisés 
                        dans la <strong>réparation</strong>, l'<strong>entretien</strong>
                            et le <strong>diagnostic</strong> des
                        véhicules de la marque <strong>Peugeot</strong>.
                    </p>
                    <p>
                        Nos techniciens sont formés tout au long de l'année 
                        aux <strong>dernières technologies</strong> et <strong>innovations</strong> de la marque au Lion.
                        Ils sont également habilités et formés à la réparation des 
                        véhicules <strong>électriques</strong> et <strong>hybrides</strong>. 
                    </p>
                </div>
                <div class="bloc-footer">
                    <ul class="bloc-list">
                        <li>
                            <svg class="icon">
                                <use xlink:href="{{asset('../img/icons/sprite.svg#oil')}}"></use>
                            </svg>
                            <p>Révision contructeur</p>
                        </li>
                        <li>
                            <svg class="icon">
                                <use xlink:href="{{asset('../img/icons/sprite.svg#wrench')}}"></use>
                            </svg>
                            <p>Pièces d'origine Peugeot</p>
                        </li>
                        <li>
                            <svg class="icon">
                                <use xlink:href="{{asset('../img/icons/sprite.svg#diag')}}"></use>
                            </svg>
                            <p>Diagnostic de pannes</p>
                        </li>
                        <li>
                            <svg class="icon">
                                <use xlink:href="{{asset('../img/icons/sprite.svg#electric')}}"></use>
                            </svg>
                            <p>Véhicules hybrides/électriques</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="container-fullwith hotrod">
        <div class="bloc bloc-right">
            <img class="bloc-img" src="{{asset('../img/assets/mechanic_600.png')}}" alt=""> 
            <div class="bloc-content">
                <h2 class="bloc-header">Réparations toutes marques</h2>
                <div class="bloc-body">
                    <p>
                        Nous réalisons également l'entretien et la réparation des véhicules 
                        <strong>toutes marques</strong> dans le respect des <strong>préconisations constructeurs</strong>.
                    </p>
                    <p>
                        Le garage Jeantet est équipé d"une <strong>valise multimarques</strong> permettant le <strong>diagnostic
                            électronique</strong> des véhicules toutes marques.
                    </p>
                </div>
                <div class="bloc-footer">
                    <ul class="bloc-list">
                        <li>
                            <svg class="icon">
                                <use xlink:href="{{asset('../img/icons/sprite.svg#oil')}}"></use>
                            </svg>
                            <p>Entretien multimarques</p>
                        </li>
                        <li>
                            <svg class="icon">
                                <use xlink:href="{{asset('../img/icons/sprite.svg#damper')}}"></use>
                            </svg>
                            <p>Réparation multimarques</p>
                        </li>
                        <li>
                            <svg class="icon">
                                <use xlink:href="{{asset('../img/icons/sprite.svg#engine')}}"></use>
                            </svg>
                            <p>Diagnostic électronique</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="container-fullwidth line-before">
        <h2 class="bloc-header">Nos services</h2>
        <div class="container-services">
                <article class="bloc-service">
                    <img class="bloc-service-img" src="{{asset('img/assets/entretien_square.jpg')}}" alt="">
                    <div class="service-content">
                        <h3 class="service-title">Entretien</h3>
                        <p  class="service-body">Nous réalisons toutes les travaux nécéssaires
                             à l'entretien de votre véhicule : entretiens périodiques, vidanges, 
                             freinage, amortisseurs, etc...</p>
                    </div>
                </article>
                <article class="bloc-service">
                    <img class="bloc-service-img" src="{{asset('img/assets/culasse_square.jpg')}}" alt="">
                    <div class="service-content">
                        <h3 class="service-title">Réparation</h3>
                        <p  class="service-body">Notre équipe peut intervenir sur votre véhicule
                             pour la réparation ou le remplacement de pièces défectueuses
                              responsables d'une défaillance.</p>
                    </div>
                </article>
                <article class="bloc-service">
                    <img class="bloc-service-img" src="{{asset('img/assets/tyre_square.jpg')}}" alt="">
                    <div class="service-content">
                        <h3 class="service-title">Pneumatiques</h3>
                        <p  class="service-body">Nous proposons un grand choix de pneumatiques adaptés à votre profil de conduite.
                            Pneus été, hiver ou 4 saisons au choix parmi plusieurs marques.
                        </p>
                    </div>
                </article>
                <article class="bloc-service">
                    <img class="bloc-service-img" src="{{asset('img/assets/diag.jpg')}}" alt="">
                    <div class="service-content">
                        <h3 class="service-title">Diagnostic</h3>
                        <p  class="service-body">Notre atelier est équipé de valises de diagnostic permettant une lecture des défauts des 
                            calculateurs électroniques de l'ensemble du parc automobile équipé d'une prise OBD.
                        </p>
                    </div>
                </article>
                <article class="bloc-service">
                    <img class="bloc-service-img" src="{{asset('img/assets/carrosserie_square.jpg')}}" alt="">
                    <div class="service-content">
                        <h3 class="service-title">Carrosserie</h3>
                        <p  class="service-body">Nous prenons en charge vos travaux de carrosserie et de peinture. Suite à un sinistre, votre assurance
                            pourra mandater un expert qui se déplacera dans notre atelier afin d'inspecter votre véhicule.
                        </p>
                    </div>
                </article>
                <article class="bloc-service">
                    <img class="bloc-service-img" src="{{asset('img/assets/carte-grise_square.jpg')}}" alt="">
                    <div class="service-content">
                        <h3 class="service-title">Carte grise</h3>
                        <p  class="service-body">Grâce à notre agrément SIV, Nous somme habilités à réaliser pour vous les démarches
                             dans le but d'obtenir le certificat d'immatriculation (carte grise) de votre véhicule.</p>
                    </div>
                </article>
            </div>
            
    </section>
    <section class="container-fullwith line-before google-map">
        <h2 class="bloc-header">Nous situer</h2>
        <iframe class="google-map-frame" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2850.8393126843853!2d2.5966730157900706!3d44.39542017910271!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12b287cf6826bf83%3A0x1e102ba3a9c4ae68!2sPEUGEOT%20-%20GARAGE%20JEANTET!5e0!3m2!1sfr!2sfr!4v1634453795088!5m2!1sfr!2sfr" allowfullscreen="" loading="lazy"></iframe>
    </section>
@endsection
