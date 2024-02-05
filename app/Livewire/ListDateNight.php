<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Computed;
use Livewire\Component;
use App\Models\DateNight;
use App\Models\Rating;

class ListDateNight extends Component
{
    public $showEditModal = false;

    public function render()
    {
        return view('livewire.list-date-night');
    }

    #[Computed()]
    public function dateNightsData()
    {
        return DateNight::with(['ratings', 'expenses'])->get();
    }

    public function edit()
    {
        $this->showEditModal = true;
    }
}
