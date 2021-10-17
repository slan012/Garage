@extends('layouts.guest')

@section('main')
    <section class="banner">
        <img src="{{asset('img/assets/img_banner3.png')}}" alt="">
        <div class="container-banner">
            <p>Situé à Sébazac Concourès près de Rodez en Aveyron, le garage Jeantet, 
                réparateur agréé Peugeot, entretient et répare les véhicules toutes marques depuis 1963.</p>
            <a href="#">Prendre rendez-vous</a>
        </div>
    </section>
    <div class="container-small">
        <section class="bloc bloc-left">
            <img class="bloc-img" src="{{asset('../img/assets/old-logo-peugeot_500w.png')}}" alt=""> 
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
        </section>
        <section class="bloc bloc-right">
            <img class="bloc-img" src="{{asset('../img/assets/atelier.jpg')}}" alt=""> 
            <div class="bloc-content">
                <h2 class="bloc-header">Réparations toutes marques</h2>
                <div class="bloc-body">
                    <p>
                        Nous réalisons également l'entretien et la réparation des véhicules 
                        <strong>toutes marques</strong> dans le respect des <strong>préconisations constructeur</strong>.
                    </p>
                    <p>
                        Le garage Jeantet est équipé d"une valise multimarque permettant le diagnostic
                        électronique des
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
                       
                    </ul>
                </div>
            </div>
        </section>
    </div>
@endsection
