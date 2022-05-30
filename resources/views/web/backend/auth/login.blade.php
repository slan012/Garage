@extends('web.backend.layouts.app')

@section('title', 'Connexion')

@section('main')
    @include('components.message')
    <h4 class="text-center">Connexion à l'interface d'administration</h4>
    <div class="row">
      <div class="col-md-4 col-sm-12 col-md-offset-4">
          {!! Form::open(['route' => 'login']) !!}
          <!-- Username-->
          <div class="form-group row">
              {!! Form::label('email', 'Email :', ['class' => 'col-form-label']) !!}
              {!! Form::text('email', null, ['class' => 'form-control' , 'required' => 'true']) !!}
          </div>
          <!-- Password -->
          <div class="form-group row">
              {!! Form::label('password', 'Mot de passe :', ['class' => 'col-form-label']) !!}
              {!! Form::password('password', ['class' => 'form-control', 'required' => 'true']) !!}
          </div>
          <div class="form-group row">
            {!! Form::submit('Se connecter', ['class' => 'btn btn-block btn-primary']) !!}
          </div>
          {!! Form::close() !!}
      </div>
    </div>
@endsection