@extends('web.backend.layouts.app')

@section('title', 'S\'enregistrer')

@section('main')
    @include('components.message')
    <h4 class="text-center">Enregistrement d'un administrateur</h4>
    <div class="col-md-4 col-sm-12 col-md-offset-4">
        {!! Form::open(['route' => 'register']) !!}
        <!-- Name-->
        <div class="form-group row">
            {!! Form::label('name', 'Nom :', ['class' => 'col-form-label']) !!}
            {!! Form::text('name', null, ['class' => 'form-control' , 'required' => 'true']) !!}
        </div>
        <!-- Username/Email-->
        <div class="form-group row">
            {!! Form::label('email', 'Email :', ['class' => 'col-form-label']) !!}
            {!! Form::text('email', null, ['class' => 'form-control' , 'required' => 'true']) !!}
        </div>
        <!-- Password -->
        <div class="form-group row">
            {!! Form::label('password', 'Mot de passe :', ['class' => 'col-form-label']) !!}
            {!! Form::password('password', ['class' => 'form-control' , 'required' => 'true']) !!}
        </div>
        <!-- Password confirmation -->
        <div class="form-group row">
            {!! Form::label('password_confirmation', 'Confirmation mot de passe :', ['class' => 'col-form-label']) !!}
            {!! Form::password('password_confirmation', ['class' => 'form-control' , 'required' => 'true']) !!}
        </div>
        <div class="form-group row">
          {!! Form::submit('Enregistrer', ['class' => 'btn btn-block btn-primary']) !!}
        </div>
        {!! Form::close() !!}
    </div>

@endsection