<?php

namespace App\Http\Livewire;

use App\Models\Test;
use Livewire\Component;
use Livewire\WithPagination;

class UsersTable extends Component
{

    use WithPagination;

    public function render()
    {

        //$tests = Test::paginate(5);

        return view('livewire.users-table', [
            "tests" => Test::paginate(5)
        ]);
    }
}
