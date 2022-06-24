<div>
    <div class="form-group row">
        {!! Form::label('options[]', 'Options :', ['class' => 'col-sm-4 col-form-label']) !!}
        {!! Form::select('options_id', $options, $car->options, ['class' => 'col-sm-8 form-control', 'multiple']) !!}
    </div>
    {!! Form::model($options, [
        'wire:submit.prevent' => 'save',
    ]) !!}
    <div class="form-group row">
        {!! Form::label('name', 'Ajouter une option à la liste', ['class' => 'col-sm-4 col-form-label']) !!}
        {!! Form::text('name', null, ['class' => 'col-sm-8 form-control', 'wire:model' => 'name', 'required', 'autofocus']) !!}
        @error('name') <span class="error">{{ $message }}</span> @enderror
        <button type="submit">Ajouter</button>
    </div>
</div>