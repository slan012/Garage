<div class="form-group row">
  <div class="col-sm-10 mx-auto" style="margin-top: 30px">
    <h3 class="text-center">{{$title}}</h3>
    @include('components.message')
  <div class="row">
    <div class="col-sm-12 col-md-4 col-md-offset-4">
        @if ($photos)
            @foreach ($photos as $photo)
                <img class="d-block" width="200" src="{{$photo->temporaryUrl()}}" alt="Photo de la voiture">
            @endforeach
        @elseif ($car->photos)
            @foreach ($car->photos as $photo)
                <img class="d-block" width="200" src="{{asset('/img/cars')}}/{{$photo->file_path}}" alt="Photo de la voiture">
            @endforeach
        @endif
        {!! Form::model($car, [
          'route' => [
              'admin.cars.' . $action . '', 
              $car->id,
          ],
          'method' => $action == 'store' ? 'post' : 'put',
          'enctype' => 'multipart/form-data',
          ])
          !!}
        <!-- Photo -->
        <div class="form-group row">
            {!! Form::label('photos', 'Photo :', ['class' => 'col-sm-4 col-form-label']) !!}
            {!! Form::file('photos[]', [
                'class' => 'col-sm-8 form-control',
                 'wire:model' => 'photos',
                  'multiple' => 'true',
                  'wire:loading.attr' => 'disabled']) !!}
            <div wire:loading wire:target="photos">
                <p><strong>Chargement...</strong></p>
            </div>
            @error('photo') <span class="error">{{ $message }}</span> @enderror
        </div>
        <!-- Brand -->
        <div class="form-group row">
            {!! Form::label('brand', 'Marque :', ['class' => 'col-sm-4 col-form-label']) !!}
            {!! Form::text('brand', null, ['class' => 'col-sm-8 form-control', 'required', 'autofocus']) !!}
        </div>
        <!-- Model -->
        <div class="form-group row">
            {!! Form::label('model', 'Modèle :', ['class' => 'col-sm-4 col-form-label']) !!}
            {!! Form::text('model', null, ['class' => 'col-sm-8 form-control', 'required']) !!}
        </div>
        <!-- Year -->
        <div class="form-group row">
            {!! Form::label('year', 'Année :', ['class' => 'col-sm-4 col-form-label']) !!}
            {!! Form::number('year', null, ['class' => 'col-sm-8 form-control', 'required']) !!}
        </div>
        <!-- Mileage -->
        <div class="form-group row">
            {!! Form::label('mileage', 'Kilomètrage :', ['class' => 'col-sm-4 col-form-label']) !!}
            {!! Form::number('mileage', null, ['class' => 'col-sm-8 form-control', 'required']) !!}
        </div>
        <!-- Energy -->
        <div class="form-group row">
            {!! Form::label('energy', 'Carburant :', ['class' => 'col-sm-4 col-form-label']) !!}
            {!! Form::select('energy', [
                'Diesel' => 'Diesel',
                'Essence' => 'Essence',
                'Hybride' => 'Hybride',
                'Electrique' => 'Electrique',
                'GPL' => 'GPL'
            ],
            null, ['class' => 'col-sm-8 form-control', 'required']) !!}
        </div>
        <!-- Options -->
        <div class="form-group row">
            {!! Form::label('options_id[]', 'Options :', ['class' => 'col-sm-4 col-form-label']) !!}
            {!! Form::select('options_id[]', $options, $car->options, ['class' => 'col-sm-8 form-control', 'multiple']) !!}
        </div>
        <!-- Description -->
        <div class="form-group row">
            {!! Form::label('description', 'Description :', ['class' => 'col-form-label', 'style' => 'font-weight: bold']) !!}
            {!! Form::textarea('description', null, ['class' => 'form-control', 'required']) !!}
        </div>
        <!-- Color -->
        <div class="form-group row">
            {!! Form::label('color', 'Couleur :', ['class' => 'col-sm-4 col-form-label']) !!}
            {!! Form::text('color', null, ['class' => 'col-sm-8 form-control']) !!}
        </div>
        <!-- Power -->
        <div class="form-group row">
            {!! Form::label('power', 'Puissance :', ['class' => 'col-sm-4 col-form-label']) !!}
            {!! Form::number('power', null, ['class' => 'col-sm-8 form-control']) !!}
        </div>
        <!-- Engine -->
        <div class="form-group row">
            {!! Form::label('engine', 'Moteur :', ['class' => 'col-sm-4 col-form-label']) !!}
            {!! Form::text('engine', null, ['class' => 'col-sm-8 form-control']) !!}
        </div>
        <!-- State -->
        <div class="form-group row">
            {!! Form::label('state', 'Etat :', ['class' => 'col-sm-4 col-form-label']) !!}
            {!! Form::select('state', ['N' => 'Neuf', 'O' => 'Occasion'], null, ['class' => 'col-sm-8 form-control', 'required']) !!}
        </div>
        <!-- Price -->
        <div class="form-group row">
            {!! Form::label('price', 'Prix (€):', ['class' => 'col-sm-4 col-form-label']) !!}
            {!! Form::number('price', null, ['class' => 'col-sm-8 form-control', 'required']) !!}
        </div>
        <!-- Registration -->
        <div class="form-group row">
            {!! Form::label('registration', 'Immatriculation :', ['class' => 'col-sm-4 col-form-label']) !!}
            <P><em>(n'est past montrée aux utilisateurs)</em></P>
            {!! Form::text('registration', null, ['class' => 'col-sm-8 form-control', 'maxlength' => '7']) !!}
        </div>
        <div class="form-group row">
            {!! Form::submit('Valider', [
                'class' => 'btn btn-primary btn-block',
                'wire:click' => 'save',
                ]) !!}
        </div>
       
        {!! Form::close() !!}
      </div>
  </div>
</div>


