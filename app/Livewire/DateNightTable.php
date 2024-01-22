<?php

namespace App\Livewire;

use App\Models\DateNight;
use Livewire\Component;

class DateNightTable extends Component
{
    public function render()
    {
        $dateNights = DateNight::all();

        return view('livewire.date-night-table', compact('dateNights'));
    }
}
