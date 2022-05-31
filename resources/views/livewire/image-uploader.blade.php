<div class="form-group row">
  <h1>Test</h1>
  <form wire:submit.prevent="save">

    <input type="file" wire:model="photo">

 

    @error('photo') <span class="error">{{ $message }}</span> @enderror

 

    <button type="submit">Save Photo</button>
    <div wire:loading wire:target="photo">Uploading...</div>

</form>
  
  <h2>Fin test</h2>
</div>
