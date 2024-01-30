<?php

namespace App\Livewire;

use App\Models\Date;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class DateSelector extends Component
{
    public $selectedDateId;

    public function render()
    {
        $user = Auth::user();

        $dates = Date::whereDoesntHave('ratings', function ($query) use ($user) {
            $query->where('user_id', $user->id);
        })->get();

        return view('livewire.date-selector', ['dates' => $dates]);
    }
}
