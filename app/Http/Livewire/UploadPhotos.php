<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class UploadPhotos extends Component
{
    use WithFileUploads;
    
    public $photos =[];
    public $title;
    public $car;
    public $options;
    public $action;
    
    public function render()
    {
        return view('livewire.upload-photos');
    }
}
