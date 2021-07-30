@include('components.message')

<div class="row">
    <div class="col-sm-5 mr-auto">
        {!! Form::model($option, [
            'route' => [
                'options.' . $action . '', 
                $option->id,
            ],
            'method' => $action == 'store' ? 'post' : 'put',
            ])
            !!}
        <!-- Name -->
        <div class="form-group row">
            {!! Form::label('name', 'Option :', ['class' => 'col-sm-4 col-form-label']) !!}
            {!! Form::text('name', null, ['class' => 'col-sm-8 form-control', 'required']) !!}
        </div>
        
    </div>
</div>
{!! Form::submit('Valider', ['class' => 'btn btn-primary']) !!}
{!! Form::close() !!}

