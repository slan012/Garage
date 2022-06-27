<?php

namespace App\Http\Livewire;

use App\Models\Car;
use App\Models\Option;
use Livewire\Component;

class OptionsTable extends Component
{
    public $car;
    public $name = '';

    protected $rules = [
        'name' => 'required|string|unique:options',
    ];

    protected $messages = [
        'name.required' => "Le champ 'option' ne peut pas être vide",
        'name.unique' => "Cette option est déjà présente dans la liste",
        'name.string' => "L'option doit être désignée par une chaîne de caractères",
    ];
        
    /**
     * Emit optionUpdate event once a property is updated
     *
     * @return void
     */
    public function updated()
    {
        $this->emit('optionUpdate');
    }
    
    /**
     * Create a new Option in database
     *
     * @return void
     */
    public function save()
    {
        $this->validate();
        
        Option::create(['name' => $this->name]);

        session()->flash('message', "Option :  '$this->name' correctement ajoutée !");

        $this->name = '';
    }
    
    /**
     * Render the option-table view with options list updated
     *
     * @return void
     */
    public function render()
    {
        return view('livewire.options-table', [
            'options' => Option::pluck('name', 'id'),
        ]);
    }
}
