@extends('web.backend.layouts.app')

@section('title', 'Coordonnées')

@section('main')

<div class="px-2 max-w-lg mx-auto">
  <h1 class="text-center text-2xl font-bold my-3">Coordonnées du garage</h1>
  
  @include('components.message')
  
  {!! Form::model($contact, [
    'route' => 'admin.contact.update',
    'class' => 'mt-4']) !!}
    <div class="my-4">
      {!! Form::label('name', 'Nom :', ['class' => 'font-semibold']) !!}
      {!! Form::text('name', null, ['class' => '
      block
      rounded-md
      w-full
      mt-1 border-gray-300
      focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50', 'required']) !!}
    </div>
    <div class="my-4">
      {!! Form::label('adress', 'Adresse :', ['class' => 'font-semibold']) !!}
      {!! Form::text('adress', null, ['class' => '
      block
      rounded-md
      w-full
      mt-1 border-gray-300
      focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50', 'required']) !!}
    </div>
    <div class="my-4">
      {!! Form::label('zipcode', 'Code postal :', ['class' => 'font-semibold']) !!}
      {!! Form::text('zipcode', null, ['class' => '
      block
      rounded-md
      w-full
      mt-1 border-gray-300
      focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50', 'required']) !!}
    </div>
    <div class="my-4">
      {!! Form::label('city', 'Ville :', ['class' => 'font-semibold']) !!}
      {!! Form::text('city', null, ['class' => '
      block
      rounded-md
      w-full
      mt-1 border-gray-300
      focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50', 'required']) !!}
    </div>
    <div class="my-4">
      {!! Form::label('phone', 'Téléphone :', ['class' => 'font-semibold']) !!}
      {!! Form::text('phone', null, ['class' => '
      block
      rounded-md
      w-full
      mt-1 border-gray-300
      focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50', 'required']) !!}
    </div>
    <div class="my-4">
      {!! Form::label('email', 'Email :', ['class' => 'font-semibold']) !!}
      {!! Form::email('email', null, ['class' => '
      block
      rounded-md
      w-full
      mt-1 border-gray-300
      focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50', 'required']) !!}
    </div>
    {!! Form::submit('Valider', ['class' => '
      w-full
      mt-4
      text-white 
      bg-sky-500 
      rounded-xl py-2
      hover:bg-sky-600 hover:cursor-pointer']) !!}
    {!! Form::close() !!}
</div>
@endsection