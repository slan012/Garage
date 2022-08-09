@extends('web.backend.layouts.app')

@section('title', 'S\'enregistrer')

@section('main')
@include('components.message')
    <div class="max-w-sm mx-auto mt-6 p-2">
      <h4 class="text-center text-lg text-slate-500 font-bold">Enregistrement d'un administrateur</h4>
          <div class="mt-6">
            
            {!! Form::open(['route' => 'register']) !!}
            
            <!-- Username-->
            {!! Form::label('name', 'Nom :', [
              'class' => 'block w-full mt-6'
            ]) !!}
            {!! Form::text('name', null, [
              'class' => '
                w-full 
                mt-2 
                rounded-md
                focus:border-sky-300 focus:ring focus:ring-sky-300 focus:ring-opacity-50' ,
              'required' => 'true'
              ]) !!}
            
            <!-- Email -->
            {!! Form::label('email', 'Email :', [
            'class' => 'block w-full mt-6'
            ]) !!}
            {!! Form::text('email', null, [
            'class' => '
                w-full 
                mt-2 
                rounded-md
                focus:border-sky-300 focus:ring focus:ring-sky-300 focus:ring-opacity-50' ,
            'required' => 'true'
            ]) !!}
            
            <!-- Password -->
            {!! Form::label('password', 'Mot de passe :', [
              'class' => '
                block 
                w-full 
                mt-6'
              ]) !!}
            {!! Form::password('password', [
              'class' => '
                w-full 
                mt-2 
                rounded-md
                focus:border-sky-300 focus:ring focus:ring-sky-400 focus:ring-opacity-50', 
              'required' => 'true']) !!}
            
            <!-- Confirm password -->
            {!! Form::label('password_confirmation', 'Confirmez le mot de passe :', [
              'class' => '
                block 
                w-full 
                mt-6'
              ]) !!}
            {!! Form::password('password_confirmation', [
              'class' => '
                w-full 
                mt-2 
                rounded-md
                focus:border-sky-300 focus:ring focus:ring-sky-400 focus:ring-opacity-50', 
              'required' => 'true']) !!}
    
            {!! Form::submit('Se connecter', [
              'class' => '
              w-full 
              mx-auto 
              text-white
              bg-sky-500 
              rounded-full 
              px-4 py-2
              mt-6
              hover:bg-sky-600 hover:cursor-pointer']) !!}
            
            {!! Form::close() !!}
          </div>
    </div>
@endsection