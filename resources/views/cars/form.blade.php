{!! Form::model($car, [
    'route' => [
        'cars.' . $action . '', 
        $car->id,
    ],
    'method' => $action == 'create' ? 'post' : 'put'
    ])
!!}
<!-- Brand -->
<div class="form-group row">
    {!! Form::label('brand', 'Marque :', ['class' => 'col-sm-4 col-form-label']) !!}
    {!! Form::text('brand', null, ['class' => 'col-sm-8 form-control']) !!}
</div>
{!! Form::close() !!}
<!-- Model -->
<div class="form-group row">
    {!! Form::label('model', 'Modèle :', ['class' => 'col-sm-4 col-form-label']) !!}
    {!! Form::text('model', null, ['class' => 'col-sm-8 form-control']) !!}
</div>
{!! Form::close() !!}