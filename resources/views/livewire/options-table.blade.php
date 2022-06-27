<div>
  {{-- <script>
    if (typeof {!! json_encode($message) !!})
  </script> --}}
  <div class="block mt-2">
    {!! Form::label('options[]', 'Options :', ['class' => 'block text-base']) !!}
    {!! Form::select('options_id[]', $options, $car->options, [
        'id' => 'car-options',
        'class' => '
          block 
          w-full 
          rounded-md 
          mt-1 border-gray-300 
          focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50',
        'multiple' => 'true',]) !!}
  </div>

  <div class="flex justify-start mt-4  ">
    
    <button id="add-option-button" class="
      block 
      mr-4 
      text-white
      bg-sky-500 
      rounded-md 
      px-4 py-1
      hover:bg-sky-600 hover:cursor-pointer">Ajouter une option</button>
    
    <a href="{{route('admin.options.index')}}" class="
      block 
      text-center
      text-white
      bg-teal-700
      rounded-md 
      px-4 py-1
      hover:bg-teal-800 hover:cursor-pointer'">Gérer les options
    </a>
    
  </div>

  @if (session()->has('message'))
    <div class="text-center block max-w-md mx-auto bg-green-100 rounded-md border-green-900 px-4 py-2 mt-4 ">
      {{ session('message')}}
    </div>
  @endif
  
  @error('name') <span id="error-message" class="text-center block max-w-md mx-auto bg-red-200 rounded-md border-red-500 px-4 py-2 mt-4">{{ $message }}</span> @enderror
  
  <div id="add-option" class="hidden">
      {!! Form::label('name', 'Nom de l\'option : ', ['class' => 'block text-base']) !!}
      {!! Form::text('name', null, [
        'id' => 'option-add',
        'class' => '
          block 
          w-full 
          rounded-md 
          mt-1 border-gray-300 
          focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50',
        'wire:model.defer' => 'name', 
        ])!!}
      
      
      <button wire:click.prevent="save" class="
        block 
        text-white
        bg-sky-500 
        rounded-md 
        px-4 py-1
        mt-2 
        hover:bg-sky-600 hover:cursor-pointer">Valider</button>
    
  </div>
</div>
