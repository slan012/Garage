@extends('layouts.app')

@section('title')
<h1 class="text-center">Fermetures/Vacances</h1>
@endsection

@section('main')
    <div class="row">
        <div class="col-sm-7">
            @include('components.message')
            <table class="table">
                <thead>
                    <tr>
                        <th>Date début</th>
                        <th>Date fin</th>
                        <th>Alerte visiteurs</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($holidays as $holiday)
                        <tr>
                            <td>{{$holiday->beginDate}}</td>
                            <td>{{$holiday->endDate}}</td>
                            <td>{{$holiday->validated ? 'Activée' : 'Désactivée'}}</td>
                            <td>
                                <a href="{{route('holidays.edit', $holiday)}}" class="btn btn-primary">Modifier</a>
                                <a href="{{route('holidays.destroy', $holiday)}}" class="btn btn-danger" data-method="delete" data-confirm="Voulez vous vraiment supprimer cette période?">Supprimer</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-sm-4 shadow mx-auto">
            <h2>Ajouter une période</h2>
            {!! Form::open([
                'route' => 'holidays.store',
                'method' => 'POST',
                ]) !!}
            <div class="form-group row align-items-center">
                {!! Form::label('beginDay', 'Date de début :', ['class' => 'col-sm-4 form-label']) !!}
                {!! Form::date('beginDay', null, ['class' => 'col-sm-6 form-control']) !!}
            </div>
            <div class="form-group row align-items-center">
                {!! Form::label('endDay', 'Date de fin :', ['class' => 'col-sm-4 form-label']) !!}
                {!! Form::date('endDay', null, ['class' => 'col-sm-6 form-control']) !!}
            </div>
            <div class="form-check">
                {!! Form::checkbox('validated', true, true, ['class' => 'form-check-input']) !!}
                {!! Form::label('validated', 'Activer l\'alerte pour les visiteurs', ['class' => 'form-check-label']) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('Valider', ['class' => 'mt-3 btn btn-primary']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection