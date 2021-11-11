@extends('web.backend.layouts.app')

@section('title')
    <h1 class="text-center">Créer une annonce</h1>
@endsection

@section('main')
    <div class="col-sm-10 mx-auto">
        @include('cars.form', ['action' => 'store', 'car' => $car])
    </div>
@endsection