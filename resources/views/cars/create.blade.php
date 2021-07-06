@extends('layouts.guest')

@section('title')
    <h1 class="text-center">Nos voitures</h1>
    <p class="text-center">Annonces de voitures</p>
@endsection

@section('main')
    <h2>Créer une annonce</h2>
    <div class="col-sm-4">
        @include('cars.form', ['action' => 'store', 'car' => $car])
    </div>
@endsection