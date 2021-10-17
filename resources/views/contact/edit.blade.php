@extends('layouts.app')

@section('title')
    <h1>Modifier les coordonées</h1>
@endsection

@section('main')
    @include('components.message')
    {!! Form::model($contact, ['route' => 'contact.update']) !!}
        <div class="form-group row">
            {!! Form::label('name', 'Nom :', ['class' => 'col-sm-2 col-form-label']) !!}
            {!! Form::text('name', null, ['class' => 'col-sm-6 form-control', 'required']) !!}
        </div>
        <div class="form-group row">
            {!! Form::label('adress', 'Adresse :', ['class' => 'col-sm-2 col-form-label']) !!}
            {!! Form::text('adress', null, ['class' => 'col-sm-6 form-control', 'required']) !!}
        </div>
        <div class="form-group row">
            {!! Form::label('zipcode', 'Code postal :', ['class' => 'col-sm-2 col-form-label']) !!}
            {!! Form::text('zipcode', null, ['class' => 'col-sm-6 form-control', 'required']) !!}
        </div>
        <div class="form-group row">
            {!! Form::label('city', 'Ville :', ['class' => 'col-sm-2 col-form-label']) !!}
            {!! Form::text('city', null, ['class' => 'col-sm-6 form-control', 'required']) !!}
        </div>
        <div class="form-group row">
            {!! Form::label('phone', 'Téléphone :', ['class' => 'col-sm-2 col-form-label']) !!}
            {!! Form::text('phone', null, ['class' => 'col-sm-6 form-control', 'required']) !!}
        </div>
        <div class="form-group row">
            {!! Form::label('email', 'Email :', ['class' => 'col-sm-2 col-form-label']) !!}
            {!! Form::email('email', null, ['class' => 'col-sm-6 form-control', 'required']) !!}
        </div>
    {!! Form::submit('Valider', ['class' => 'mt-3 btn btn-primary']) !!}
    {!! Form::close() !!}
@endsection