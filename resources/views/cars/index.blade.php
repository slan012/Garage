@extends('layouts.app')

@section('title')
<h1 class="text-center">Mes annonces</h1>
@endsection

@section('main')
    <div class="col-sm-10 mx-auto">
        <div class="row">
            <div class="col-sm-6">
                <p class="text-left">
                    <a class="btn btn-primary" href="{{route('options.index')}}">Gérer les options des véhicules</a>
                </p>
            </div>
            <div class="col-sm-6">
                <p class="text-right">
                    <a class="btn btn-info" href="{{route('cars.create')}}">Ajouter une annonce</a>
                </p>
            </div>
        </div>
        @include('components.message')
        <table class="table">
            <thead>
                <tr>
                    <th>Aperçu</th>
                    <th>Réf. annonce</th>
                    <th>Marque</th>
                    <th>Modèle</th>
                    <th>Kilométrage</th>
                    <th>Prix</th>
                    <th>Date création</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cars as $car)
                    <tr>
                        {{-- {{dd($car->image)}} --}}
                        <td><a href="{{route('cars.edit', $car)}}"><img src="{{$car->image('thumb')}}" width="100" alt="Photo de la voiture"></a></td>
                        <td>P{{$car->id}}</td>
                        <td>{{$car->brand}}</td>
                        <td>{{$car->model}}</td>
                        <td>{{$car->mileage}}</td>
                        <td><strong>{{$car->price}}€</strong></td>
                        <td>{{$car->creation_date}}</td>
                        <td>
                            
                            <a href="{{route('ads.show', $car->id)}}" class="btn btn-secondary">Voir</a>
                            <a href="{{route('cars.edit', $car)}}" class="btn btn-primary">Modifier</a>
                            <a href="{{route('cars.destroy', $car)}}" class="btn btn-danger" data-method="delete" data-confirm="Voulez vous vraiment supprimer cette voiture?">Supprimer</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection