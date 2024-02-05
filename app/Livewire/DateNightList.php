<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use App\Models\DateNight;
use App\Models\Rating;

class DateNightList extends Component
{
    public $dates;
    public $showEditModal = false;

    public function render()
    {
        $this->dates = DateNight::with(['ratings', 'expenses'])->get();

        return view('livewire.date-night-list');
    }

    public function edit()
    {
        $this->showEditModal = true;
    }
}
