<?php

namespace App\Http\Livewire;

use App\Models\Option;
use Livewire\Component;

class OptionsTable extends Component
{
    public $car;
    public $name = '';

    public function save()
    {
        $this->validate([
            'name' => 'unique:options',
        ]);

        Option::create(['name' => $this->name]);
        $this->name = '';
    }

    public function render()
    {
        return view('livewire.options-table', [
            'options' => Option::pluck('name', 'id'),
        ]);
    }
}
