<?php

namespace App\Livewire;

use App\Models\Date;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class DateSelector extends Component
{
    public $selectedDateId;

    protected $listeners = ['ratingAdded' => '$refresh'];
    public function render()
    {
        $user = Auth::user();

        $dates = Date::whereDoesntHave('ratings', function ($query) use ($user) {
            $query->where('user_id', $user->id);
        })->get();

        return view('livewire.date-selector', ['dates' => $dates]);
    }

    public function dateSelected()
    {
        $this->emit('dateSelected', $this->selectedDateId);
    }
}
