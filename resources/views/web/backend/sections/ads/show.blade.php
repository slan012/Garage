@extends('web.backend.layouts.app')

@section('main')
<h1 class="text-center">{{$car->brand}} {{$car->model}} de {{$car->year}}</h1>
<div class="container">
    <div class="row" style="margin-bottom: 30px">
        <div class="col-md-8">
            @if (Auth::user())
            <a href="{{route('cars.edit', $car)}}" class="btn btn-primary">Modifier</a>
            <a href="{{route('cars.destroy', $car)}}" class="btn btn-danger" data-method="delete" data-confirm="Voulez vous vraiment supprimer cette voiture?">Supprimer</a>
            @endif
        </div>
    </div>
    <div class="row">
        <div class="col-md-8">
                    <img src="{{$car->image('large')}}" style="max-width: 100%; margin-bottom:10px" alt="Photo de la {{$car->brand}} {{$car->model}}">
                    <h3>Informations</h3>
                    <div class="row">
                        <div class="col-sm-6">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td scope="row">Année :</td>
                                        <td><strong>{{$car->year}}</strong></td>
                                    </tr>
                                    <tr>
                                        <td scope="row">Kilométrage :</td>
                                        <td><strong>{{$car->mileage}}</strong></td>
                                    </tr>
                                    <tr>
                                        <td scope="row">Couleur :</td>
                                        <td><strong>{{$car->color}}</strong></td>
                                    </tr>
                                    <tr>
                                        <td scope="row">Puissance :</td>
                                        <td><strong>{{$car->power}} ch</strong></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-sm-6">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td scope="row">Moteur :</td>
                                        <td><strong>{{$car->engine}}</strong></td>
                                    </tr>
                                    <tr>
                                        <td scope="row">Etat :</td>
                                        <td><strong>{{$car->state == 'O' ? 'Occasion' : 'Neuf'}}</strong></td>
                                    </tr>
                                    <tr>
                                        <td scope="row">Carburant :</td>
                                        <td><strong>{{$car->energy}}</strong></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <h3>Options</h3>
                    <div class="row">
                        <div class="col-sm-12">
                            @foreach ($car->options as $option)
                                <span class="badge badge-success" style="font-size: 1.1em">{{$option['name']}}</span>
                            @endforeach
                        </div>
                    </div>
                    <h3>Description</h3>
                    <div class="row">
                        <div class="col-sm-12">
                            <p>{!!nl2br(e($car->description))!!}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">{{$car->brand}} {{$car->model}}</h4>
                            <p class="card-text display-4 text-primary" style="margin-bottom: 15px">{{$car->price}} €</p>
                            <p><a href="#" class="card-text btn btn-primary">Nous contacter</a></p>
                            <p><em>Référence annonce : P{{$car->id}}</em></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection