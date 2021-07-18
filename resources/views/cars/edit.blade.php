@extends('layouts.app')

@section('title')
    <h1 class="text-center">Modifier l'annonce</h1>
@endsection

@section('main')
    <div class="col-sm-10 mx-auto" style="margin-top: 30px">
        @include('cars.form', ['action' => 'update', 'car' => $car])
    </div>
@endsection