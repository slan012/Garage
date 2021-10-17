@extends('layouts.app')

@section('title')
    <h1 class="text-center">Les options véhicules</h1>
@endsection

@section('main')
<div class="row">
    <div class="col-sm-6">
        @include('components.message')
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($options as $option)
                    <tr>
                        {{-- {{dd($car->image)}} --}}
                        <td>{{$option->id}}</td>
                        <td>{{$option->name}}</td>
                        <td>
                            <a href="{{route('options.edit', $option)}}" class="btn btn-primary">Modifier</a>
                            <a href="{{route('options.destroy', $option)}}" class="btn btn-danger" data-method="delete" data-confirm="Voulez vous vraiment supprimer cette option?">Supprimer</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="col-sm-4 mx-auto shadow" style="max-height:200px;">
        <h2>Ajouter une option à la liste</h2>
        {!! Form::open(
            [
                'route' => 'options.store',
                'method' => 'post',
                ]
                )
                !!}
        <!-- Name -->
        <div class="form-group row">
            {!! Form::label('name', 'Option :', ['class' => 'col-sm-4 col-form-label']) !!}
            {!! Form::text('name', null, ['class' => 'col-sm-8 form-control', 'required']) !!}
        </div>
        {!! Form::submit('Valider', ['class' => 'btn btn-primary mt-3']) !!}
        {!! Form::close() !!}
    </div>
</div>

@endsection