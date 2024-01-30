<?php

namespace App\Livewire;

use App\Models\Date;
use App\Models\Rating;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class DateRating extends Component
{
    public $date;
    public $ratings;

    public function mount(Date $date, Rating $ratings = null)
    {
        $this->date = $date;
        $this->$ratings = $ratings ?? new Rating([
            'food_rating' => 0,
            'price_rating' => 0,
            'setting_rating' => 0,
        ]);
    }


    public function addRating()
    {
        $user = Auth::user();
        if (!$user) {
            logger('User is not authenticated.'); // Log the message

            // Handle the case where the user is not authenticated
            dd("HERE");
//            return;
        }
//        dd($user);

//        logger('User ID: ' . $user->id); // Log the user ID

        // Proceed with saving the rating
        $this->ratings->user_id = $user->id;
        $this->ratings->date_id = $this->date->id;

        $this->ratings->save();

        dd('SUCCESS');
        session()->flash('message', 'Rating added successfully!');
    }

    public function render()
    {
        return view('livewire.date-rating');
    }
}
