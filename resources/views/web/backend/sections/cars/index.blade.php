@extends('web.backend.layouts.app')

@section('title', 'Annonces')

@section('main')

<div class="w-full py-2">
  <h1 class="text-center text-2xl font-bold my-3">Liste des véhicules</h1>
  {{-- Buttons --}}
  <div class="">
    <a class="block max-w-xs mx-auto py-2 px-2 mb-1 text-center rounded-md bg-sky-500 text-white hover:bg-sky-600 shadow-md " href="{{route('admin.cars.create')}}">Ajouter un véhicule</a>
    <a class="block max-w-xs mx-auto py-2 px-2 mb-1 text-center rounded-md bg-green-700 text-white hover:bg-green-800 shadow-md" href="{{route('admin.options.index')}}">Gérer les options des véhicules</a>
  </div>

  {{-- Validation messages --}}
  <div class="px-3">
    @include('components.message')
  </div>
    

  {{-- Mobile cars list --}}
  <div class="w-full px-3 my-6 md:hidden">
    @foreach ($cars as $car)
    <div class="my-4">
      <a href="{{route('admin.cars.edit', $car)}}">
        <img src={{asset('/img/cars') . '/' . $car->photos[0]->file_path}} alt="Photo de la voiture"/>
      </a>
      
      <p class="my-3"><span class="font-semibold ">{{$car->brand}} {{$car->model}}</span> | {{$car->mileage}} kms | {{$car->price}} € | <span class="font-semibold">{{$car->energy}}</span></p>
      
      <div class="flex justify-between">
        <a href="{{route('admin.cars.edit', $car)}}" class="inline-block py-2 px-3 bg-sky-500 rounded-md text-white hover:bg-sky-600">Modifier</a>
        <a href="{{route('admin.cars.destroy', $car)}}" class="inline-block py-2 px-3 bg-red-500 rounded-md text-white hover:bg-red-600" data-method="delete"
          data-confirm="Voulez vous vraiment supprimer cette voiture?">Supprimer</a>
      </div>
    </div>
    
    @endforeach

  </div>

  {{-- Desktop cars list --}}
  <table class="hidden md:block min-w-full mt-4 text-center">
    <thead class="">
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
    <tbody class="">
      @foreach ($cars as $car)
      <tr class="even:bg-white odd:bg-gray-200">
        <td><a href="{{route('admin.cars.edit', $car)}}"><img src={{asset('/img/cars') . '/' .
              $car->photos[0]->file_path}} width="100" alt="Photo de la voiture"></a></td>
        <td>P{{$car->id}}</td>
        <td>{{$car->brand}}</td>
        <td>{{$car->model}}</td>
        <td>{{$car->mileage}}</td>
        <td><strong>{{$car->price}}€</strong></td>
        <td>{{$car->creation_date}}</td>
        <td>
          <a href="{{route('admin.cars.edit', $car)}}" class="block lg:inline-block py-2 px-3 bg-sky-500 rounded-md text-white mx-1 hover:bg-sky-600">Modifier</a>
          <a href="{{route('admin.cars.destroy', $car)}}" class="block lg:inline-block py-2 px-3 bg-red-500 rounded-md text-white mx-1 hover:bg-red-600" data-method="delete"
            data-confirm="Voulez vous vraiment supprimer cette voiture?">Supprimer</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection