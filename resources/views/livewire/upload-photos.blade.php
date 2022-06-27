<div class="container mx-auto p-2">

  <h3 class="text-xl font-medium text-center text-slate-500">{{$title}}</h3>

  @include('components.message')

  <!-- Photos -->
  @if ($photos)
    @foreach ($photos as $photo)
      <img class=" my-2 mx-auto" src="{{$photo->temporaryUrl()}}" alt="Photo de la voiture">
    @endforeach
  @elseif ($car->photos)
    @foreach ($car->photos as $photo)
      <img class=" my-2 mx-auto" src="{{asset('/img/cars')}}/{{$photo->file_path}}" alt="Photo de la voiture">
    @endforeach
  @endif

  <!-- Begin form-->  
  {!! Form::open([
    'route' => [
      'admin.cars.' . $action . '',
       $car->id,
    ],
    'method' => $action == 'store' ? 'post' : 'put',
    'enctype' => 'multipart/form-data',
  ])
  !!}
  
  <!-- Photo -->
  <div class="block mt-2">
    {!! Form::label('photos', 'Photos :', ['class' => 'block text-base ']) !!}
    {!! Form::file('photos[]', [
    'class' => '
      block 
      w-full
      text-slate-500
      file:rounded-full file:mr-2 file:bg-sky-600 file:text-white file:py-2 file:px-4 
      file:disabled:bg-gray-500',
    'wire:model' => 'photos',
    'multiple' => 'true',
    'wire:loading.attr' => 'disabled']) !!}
    
    <div wire:loading wire:target="photos">
      <p class="block text-center text-lg w-full mx-auto">Chargement...</p>
    </div>
    
    @error('photo') <span class="error">{{ $message }}</span> @enderror
  
  </div>
  
  <!-- Brand -->
  <div class="block mt-2">
    {!! Form::label('brand', 'Marque :', ['class' => 'block text-base ']) !!}
    {!! Form::text('brand', $car->brand, [
      'class' => '
        block 
        w-full 
        rounded-md 
        mt-1 border-gray-300 
        focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50', 'required', 'autofocus']) !!}
  </div>

  <!-- Model -->
  <div class="block mt-2">
    {!! Form::label('model', 'Modèle :', ['class' => 'block text-base ']) !!}
    {!! Form::text('model', $car->model, [
      'class' => '
        block 
        w-full 
        rounded-md 
        mt-1 border-gray-300 
        focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50', 'required']) !!}
  </div>

  <!-- Year -->
  <div class="block mt-2">
    {!! Form::label('year', 'Année :', ['class' => 'block text-base ']) !!}
    {!! Form::number('year', $car->year, [
      'class' => '
        block 
        w-full 
        rounded-md 
        mt-1 border-gray-300 
        focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50', 'required']) !!}
  </div>

  <!-- Mileage -->
  <div class="block mt-2">
    {!! Form::label('mileage', 'Kilomètrage :', ['class' => 'block text-base ']) !!}
    {!! Form::number('mileage', $car->mileage, [
      'class' => '
        block 
        w-full 
        rounded-md 
        mt-1 border-gray-300 
        focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50', 'required']) !!}
  </div>

  <!-- Energy -->
  <div class="block mt-2">
    {!! Form::label('energy', 'Carburant :', ['class' => 'block text-base ']) !!}
    {!! Form::select('energy', [
    'Diesel' => 'Diesel',
    'Essence' => 'Essence',
    'Hybride' => 'Hybride',
    'Electrique' => 'Electrique',
    'GPL' => 'GPL'
    ],
    $car->energy, [
      'class' => '
        block 
        w-full 
        rounded-md 
        mt-1 border-gray-300 
        focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50', 'required']) !!}
  </div>

  <!-- Options -->
  @livewire('options-table', ['car' => $car])

  <!-- Description -->
  <div class="block mt-2">
    {!! Form::label('description', 'Description :', ['class' => 'block text-base ', 'style' => 'font-weight: bold']) !!}
    {!! Form::textarea('description', $car->description, [
      'class' => '
        block 
        w-full 
        rounded-md 
        mt-1 border-gray-300 
        focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50', 'required']) !!}
  </div>

  <!-- Color -->
  <div class="block mt-2">
    {!! Form::label('color', 'Couleur :', ['class' => 'block text-base ']) !!}
    {!! Form::text('color', $car->color, [
      'class' => '
        block 
        w-full 
        rounded-md 
        mt-1 border-gray-300 
        focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50']) !!}
  </div>

  <!-- Power -->
  <div class="block mt-2">
    {!! Form::label('power', 'Puissance :', ['class' => 'block text-base ']) !!}
    {!! Form::number('power', $car->power, [
      'class' => '
        block 
        w-full 
        rounded-md 
        mt-1 border-gray-300 
        focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50']) !!}
  </div>

  <!-- Engine -->
  <div class="block mt-2">
    {!! Form::label('engine', 'Moteur :', ['class' => 'block text-base ']) !!}
    {!! Form::text('engine', $car->engine, [
      'class' => '
        block 
        w-full 
        rounded-md 
        mt-1 border-gray-300 
        focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50']) !!}
  </div>

  <!-- State -->
  <div class="block mt-2">
    {!! Form::label('state', 'Etat :', ['class' => 'block text-base ']) !!}
    {!! Form::select('state', ['N' => 'Neuf', 'O' => 'Occasion'], $car->state, [
      'class' => '
        block 
        w-full 
        rounded-md 
        mt-1 border-gray-300 
        focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50',
    'required']) !!}
  </div>

  <!-- Price -->
  <div class="block mt-2">
    {!! Form::label('price', 'Prix (€):', ['class' => 'block text-base ']) !!}
    {!! Form::number('price', $car->price, [
      'class' => '
        block 
        w-full 
        rounded-md 
        mt-1 border-gray-300 
        focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50', 'required']) !!}
  </div>

  <!-- Registration -->
  <div class="block mt-2">
    {!! Form::label('registration', 'Immatriculation :', ['class' => 'block text-base ']) !!}
    <P><em>(n'est past montrée aux utilisateurs)</em></P>
    {!! Form::text('registration', $car->registration, [
      'class' => '
        block 
        w-full 
        rounded-md 
        mt-1 border-gray-300 
        focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50', 'maxlength' => '7']) !!}
  </div>

  <!-- Submit -->
  <div class="block mt-2">
    {!! Form::submit('Valider', [
    'class' => '
      w-full 
      text-white 
      bg-sky-500 
      rounded-xl py-2
      hover:bg-sky-600 hover:cursor-pointer',
    ]) !!}
  </div>

  {!! Form::close() !!}

</div>