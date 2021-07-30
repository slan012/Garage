@extends('layouts.app')

@section('title')
    <h2>Les options véhicules</h2>
@endsection

@section('main')
<div class="col-sm-10 mx-auto">
    <p class="text-right">
        <a class="btn btn-info" href="{{route('options.create')}}">Ajouter une option</a>
    </p>
    @include('components.message')
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($options as $option)
                <tr>
                    {{-- {{dd($car->image)}} --}}
                    <td>{{$option->id}}</td>
                    <td>{{$option->name}}</td>
                    <td>
                        <a href="#" class="btn btn-primary">Modifier</a>
                        <a href="#" class="btn btn-danger" data-method="delete" data-confirm="Voulez vous vraiment supprimer cette option?">Supprimer</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection