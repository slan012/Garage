@extends('web.frontend.layouts.layout')

@section('title',  "$car->brand $car->model")

@section('main')
    
    <h1 class="title-page">{{$car->brand}} {{$car->model}} {{$car->year}}</h1>
    
    <div class="container-small">
        <div class="car-show">
            <a href="{{$car->image('large')}}"><img class="car-show-img" src="{{$car->image('thumb')}}" alt="Photo de la {{$car->brand}} {{$car->model}}"></a>
            <section class="car-show-bloc">
                <h2 class="car-show-title">Infos</h2>
                <table class="car-infos-table">
                    <tr>
                        <th>État</th>
                        <td>{{$car->state == 'O' ? 'Occasion' : 'Neuf'}}</td>
                    </tr>
                    <tr>
                        <th>Marque</th>
                        <td>{{$car->brand}}</td>
                    </tr>
                    <tr>
                        <th>Modèle</th>
                        <td>{{$car->model}}</td>
                    </tr>
                    <tr>
                        <th>Année</th>
                        <td>{{$car->year}}</td>
                    </tr>
                    <tr>
                        <th>Kilomètres</th>
                        <td>{{$car->mileage}}</td>
                    </tr>
                    <tr>
                        <th>Énergie</th>
                        <td>{{$car->energy}}</td>
                    </tr>
                    <tr>
                        <th>Moteur</th>
                        <td>{{$car->engine}}</td>
                    </tr>
                    <tr>
                        <th>Puissance</th>
                        <td>{{$car->power}}</td>
                    </tr>
                    <tr>
                        <th>Couleur</th>
                        <td>{{$car->color}}</td>
                    </tr>
                </table>
            </section>
            <section class="car-show-bloc">
                <p class="car-price">Prix TTC : {{$car->price}} €</p>
            </section>
            <section class="car-show-bloc">
                <h2 class="car-show-title">Description</h2>
                <p>
                     {{$car->description}}
                </p>
            </section>
            <section class="car-options">
                <h2 class="car-show-title">Options</h2>
                <ul class="car-options-list">
                    @foreach ($car->options as $option)
                        <li class="car-option">
                            <svg class="car-option-icon">
                                <use xlink:href="{{asset('../img/icons/sprite.svg#check')}}"></use>
                            </svg>
                            {{$option->name}}
                        </li>
                        
                    @endforeach
                </ul>
            </section>
            <section class="car-show-bloc">
                <h2 class="car-show-title">Demande de renseignements</h2>
                @include('components.message')
                <form action="{{route('askmessage.store')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label class="form-label" for="askname">Nom : </label>
                        <input class="form-input" id="askname" name="askname" type="text" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="askemail">Email : </label>
                        <input class="form-input" id="askemail" name="askemail" type="mail" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="askphone">Téléphone : </label>
                        <input class="form-input" id="askphone" name="askphone" type="text">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="askmessage">Message : </label>
                        <textarea class="form-input textarea" id="askmessage" name="askmessage" required></textarea>
                    </div>
                    <input class="btn btn-form" type="submit" value="Valider">
                </form>
            </section>
        </div>
    </div>
@endsection

