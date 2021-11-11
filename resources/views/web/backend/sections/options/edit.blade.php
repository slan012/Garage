@extends('web.backend.layouts.app')

@section('title')
    <h1 class="text-center">Modifier une option</h1>
@endsection

@section('main')
    <div class="col-sm-10 mx-auto">
        {!! Form::model($option,
            [
                'route' => ['options.update', $option],
                'method' => 'put',
            ]
        )!!}
        <!-- Name -->
        <div class="form-group row">
            {!! Form::label('name', 'Option :', ['class' => 'col-sm-4 col-form-label']) !!}
            {!! Form::text('name', null, ['class' => 'col-sm-8 form-control', 'required', 'autofocus']) !!}
        </div>
        {!! Form::submit('Valider', ['class' => 'btn btn-primary mt-3']) !!}
        {!! Form::close() !!}
    </div>
@endsection