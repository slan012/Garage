@extends('web.backend.layouts.app')

@section('title', 'Garage Jeantet - Véhicules')

@section('main')
<h1 class="text-center">Nos voitures</h1>
    <div class="row">
        @foreach ($cars as $car)
            <div class="col-sm-3">
                <div class="card" style="width:300px">
                    <a href="{{route('ads.show', $car->id)}}"><img class="card-img-top" src="{{$car->image('thumb')}}" alt="Photo de la {{$car->brand}} {{$car->model}}"></a>
                    <div class="card-body">
                        <h4 class="card-title">{{$car->brand}} {{$car->model}}</h4>
                        <ul>
                                <li class="card-text">Année : {{$car->year}}</li>
                                <li class="card-text">{{$car->mileage}} kms</li>
                                <li class="card-text">{{$car->state == 'O' ? 'Occasion' : 'Neuf'}}</li>
                                <li class="card-text">{{$car->energy}}</li>
                        </ul>
                        <p style="font-size: 1.2em"><strong>Prix : {{$car->price}} € TTC</strong></p>
                        <a href="{{route('ads.show', $car->id)}}" class="btn btn-primary">Plus d'infos</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection