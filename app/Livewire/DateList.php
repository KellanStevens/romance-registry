<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use App\Models\Date;
use App\Models\Rating;

class DateList extends Component
{
    public $dates;

    public function render()
    {
        $user = Auth::user();

//        $this->dates = Date::with('ratings')->get()
//            ->map(function ($date) use ($user) {
//                $userRating = $date->ratings->firstWhere('user_id', $user->id);
//
//                return [
//                    'date' => $date,
//                    'userRating' => $userRating,
//                ];
//            });

        $this->dates = Date::with('ratings')->get();

        $dates = $this->dates;
        return view('livewire.date-list', compact('dates'));
    }
}
