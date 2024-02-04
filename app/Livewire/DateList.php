<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use App\Models\DateNight;
use App\Models\Rating;

class DateList extends Component
{
    public $dates;

    public function render()
    {
//        $user = Auth::user();

        $this->dates = DateNight::with(['ratings', 'expenses'])->get();

        return view('livewire.date-list');
    }
}