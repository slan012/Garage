@extends('web.backend.layouts.app')

@section('title')
<h1 class="text-center">Modifier une période</h1>
@endsection

@section('main')
<div class="col-sm-6 mx-auto">
        @include('components.message')
        {!! Form::model($holiday, 
            [
                'route' => [
                    'admin.holidays.update',
                    $holiday,
            ],
                'method' => 'PUT',
            ]
        ) !!}
        <div class="form-group">
            {!! Form::label('beginDay', 'Date de début :', ['class' => 'form-label']) !!}
            {!! Form::date('beginDay', null, ['class' => 'form-control', 'required']) !!}
            
        </div>
        <div class="form-group">
            {!! Form::label('endDay', 'Date de fin :', ['class' => 'form-label']) !!}
            {!! Form::date('endDay', null, ['class' => 'form-control', 'required']) !!}
        </div>
        <div class="form-check">
            {!! Form::checkbox('validated', true, null, ['class' => 'form-check-input']) !!}
            {!! Form::label('validated', 'Activer l\'alerte pour les visiteurs', ['class' => 'form-check-label']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Valider', ['class' => 'mt-3 btn btn-primary']) !!}
        </div>
        {!! Form::close() !!}
    </div>
@endsection