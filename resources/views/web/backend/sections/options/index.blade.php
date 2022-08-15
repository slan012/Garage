@extends('web.backend.layouts.app')

@section('title', 'Options véhicules')

@section('main')

<div class="max-w-2xl px-2 mx-auto">
  <h1 class="text-center text-2xl font-bold my-3">Liste des options</h1>

  {{-- Validation messages --}}
  <div>
    @include('components.message')
  </div>

  <table class="w-full text-center mt-6">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nom</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($options as $option)
      <tr class="even:bg-zinc-300 odd:bg-gray-200 ">
        <td>{{$option->id}}</td>
        <td>
          {!! Form::model($option,
            [
                'route' => ['admin.options.update', $option],
                'method' => 'put',
            ]
          )!!}
          {!! Form::text('name', null, ['class' => 'w-48 md:w-full md:max-w-xl rounded-md', 'required', 'autofocus']) !!}
        </td>
        <td class="">
          {!! Form::submit('Mettre à jour', ['class' => 'my-1 w-32 mx-auto block md:inline-block py-2 px-2 bg-sky-500 rounded-md text-white hover:bg-sky-600 cursor-pointer']) !!}
          {!! Form::close() !!}
          <a href="{{route('admin.options.destroy', $option)}}"
            class="my-1 w-32 mx-auto block md:inline-block py-2 px-2 bg-rose-600 rounded-md text-white hover:bg-sky-600 cursor-pointer" data-method="delete"
            data-confirm="Voulez vous vraiment supprimer cette option?">Supprimer</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  <div class="mt-6 text-lg" style="max-height:200px;">
    <h2 class="text-center ">Ajouter une option à la liste : </h2>
    {!! Form::open(
    [
    'route' => 'admin.options.store',
    'method' => 'post',
    ]
    )
    !!}
    <!-- Name -->
    <div class="w-full flex">
      {!! Form::label('name', 'Option :', ['class' => 'text-base']) !!}
      {!! Form::text('name', null, [
        'class' => 'rounded-md mt-1 border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50',
        'required',
      ]) !!}
    </div>
    {!! Form::submit('Ajouter', ['class' => 'mt-3 w-full text-white bg-sky-500 rounded-xl py-2 hover:bg-sky-600 hover:cursor-pointer']) !!}
    {!! Form::close() !!}
  </div>
</div>
@endsection