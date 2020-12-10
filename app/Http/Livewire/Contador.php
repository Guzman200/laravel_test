<?php

namespace App\Http\Livewire;

use App\Models\Test;
use Livewire\Component;
use Livewire\WithPagination;

class Contador extends Component
{

    use WithPagination;

    public function render()
    {
        

        return view('livewire.contador', [
            "tests" => Test::orderBy('id')->paginate(5)
        ]);
    }
}
