@extends('layouts.app')

@section('title')
    <h1>Informations de contact</h1>
@endsection

@section('main')
<div class="row">
    <div class="col-sm-8">
        <p class="text-right">
            <a class="btn btn-info" href="{{route('contact.edit', $contact)}}">Modifier les coordonnées</a>
        </p>
        @include('components.message')
        <table class="text-center table table-striped table-bordered">
            <tr>
                <th>Nom</th>
                <td>{{$contact->name}}</td>
            </tr>
            <tr>
                <th>Adresse</th>
                <td>{{$contact->adress}}</td>
            </tr>
            <tr>
                <th>Code postal</th>
                <td>{{$contact->zipcode}}</td>
            </tr>
            <tr>
                <th>Ville</th>
                <td>{{$contact->city}}</td>
            </tr>
            <tr>
                <th>Téléphone</th>
                <td>{{$contact->phone}}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{$contact->email}}</td>
            </tr>
        </table>
    </div>
    
</div>
@endsection