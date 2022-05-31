<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class ImageUploader extends Component
{
    use WithFileUploads;

    public $photo;

    public function save()
    {
        $this->validate([
            'photo' => 'image|max:5000'
        ]);
        $this->photo->storeAs('public/photos/', $this->photo->getClientOriginalName());
    }
    
    public function render()
    {
        return view('livewire.image-uploader');
    }
}
