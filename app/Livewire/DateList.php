<?php

namespace App\Livewire;

use App\Models\Date;
use Livewire\Component;

class DateList extends Component
{
    public $dates;

    public function render()
    {
        $this->dates = Date::all();

        return view('livewire.date-list');
    }
}
