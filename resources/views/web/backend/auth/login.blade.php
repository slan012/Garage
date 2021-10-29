@extends('layouts.app')

@section('title')
    <h4>Connexion</h4>
@endsection

@section('main')
    @include('components.message')
    <div class="col-md-4 sm-12 mx-auto">
        {!! Form::open(['route' => 'login']) !!}
        <!-- Username-->
        <div class="form-group row">
            {!! Form::label('email', 'Email :', ['class' => 'col-sm-4 col-form-label']) !!}
            {!! Form::text('email', null, ['class' => 'col-sm-8 form-control required']) !!}
        </div>
        <!-- Password -->
        <div class="form-group row">
            {!! Form::label('password', 'Mot de passe :', ['class' => 'col-sm-4 col-form-label']) !!}
            {!! Form::password('password', null, ['class' => 'col-sm-8 form-control required']) !!}
        </div>
        {!! Form::submit('Se connecter') !!}
        {!! Form::close() !!}
    </div>
@endsection