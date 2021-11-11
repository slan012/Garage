@extends('web.frontend.layouts.layout')

@section('title', 'Nos véhicules')

@section('main')
    <section class="container-small">

        <h1 class="title-page">Nos véhicules</h1>
        
        <div class="ads">
            @foreach ($cars as $car)
            <div class="car-bloc">
                <a href="{{route('ads.show', $car->id)}}">
                <div class="car-image-zoom">
                    <img class="car-thumb-img" src="{{$car->image('thumb')}}" alt="Photo de la {{$car->brand}} {{$car->model}} de couleur {{$car->color}}" >
                    <p class="img-more">Plus d'infos</p>
                </div>
                <div class="car-thumb-body">
                    <h2 class="car-thumb-title">{{$car->brand}} {{$car->model}} {{$car->year}}</h2>
                    <p class="car-thumb-price">{{$car->price}} €</p>
                </div>
                <ul class="car-thumb-footer">
                        <li>
                            <svg class="car-icon">
                                <use xlink:href="{{asset('../img/icons/sprite.svg#road')}}"></use>
                            </svg>
                            {{$car->mileage}} kms
                        </li>
                        <li>
                            <svg class="car-icon">
                                <use xlink:href="{{asset('../img/icons/sprite.svg#fuel')}}"></use>
                            </svg>
                            {{$car->energy}}
                        </li>
                        <li>
                            <svg class="car-icon">
                                <use xlink:href="{{asset('../img/icons/sprite.svg#engine')}}"></use>
                            </svg>
                            {{$car->power}} ch
                        </li>
                </ul>
                </a>
            </div>
            @endforeach
        </div>
    </section>
@endsection