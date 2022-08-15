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
  <div class="px-3 w-4/5 mx-auto">
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
  <table class="hidden md:table w-4/5 mx-auto mt-4 text-center">
    <thead class="mx-auto">
      <tr>
        <th class="w-1/6">Aperçu</th>
        <th class="w-1/10">Réf. annonce</th>
        <th class="w-1/10">Marque</th>
        <th class="w-1/10">Modèle</th>
        <th class="w-1/10">Kilométrage</th>
        <th class="w-1/10">Prix</th>
        <th class="w-1/10">Date création</th>
        <th class="w-1/6">Action</th>
      </tr>
    </thead>
    <tbody class="mx-auto">
      @foreach ($cars as $car)
      <tr class="even:bg-zinc-300 odd:bg-gray-200">
        <td><a  href="{{route('admin.cars.edit', $car)}}"><img class="inline-block mx-auto w-36 my-2" src={{asset('/img/cars') . '/' .
              $car->photos[0]->file_path}} alt="Photo de la voiture"></a></td>
        <td>P{{$car->id}}</td> {{--Reference annonce--}}
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