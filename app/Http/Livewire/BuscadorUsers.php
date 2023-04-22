<?php

namespace App\Http\Livewire;

use Livewire\Component;

class BuscadorUsers extends Component
{
    public $search ='';
    public function render()
    {
        return view('livewire.buscador-users');
    }
}
