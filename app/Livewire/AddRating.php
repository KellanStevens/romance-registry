<?php

namespace App\Livewire;

use App\Models\Date;
use App\Models\Rating;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class AddRating extends Component
{
    public $dateId;
    public int $priceRating;
    public int $settingRating;
    public int $foodRating;
    public string $comment;

    public function render()
    {
        $user = Auth::user();

        $dates = Date::whereDoesntHave('ratings', function ($query) use ($user) {
            $query->where('user_id', $user->id);
        })->get();

        return view('livewire.add-rating', ['dates' => $dates]);
    }

    public function submitRating()
    {
        // Check if a date has been selected
        if (!$this->dateId) {
            session()->flash('message', 'Please select a date before submitting a rating.');
            return;
        }

        // Check if the user has already rated this date
        $existingRating = Rating::where('date_id', $this->dateId)
            ->where('user_id', Auth::id())
            ->first();

        if (!$existingRating) {
            Rating::create([
                'user_id' => Auth::id(),
                'date_id' => $this->dateId,
                'price_rating' => $this->priceRating,
                'setting_rating' => $this->settingRating,
                'food_rating' => $this->foodRating,
                'comments' => $this->comment,
            ]);

            session()->flash('message', 'Rating added successfully!');
        } else {
            session()->flash('message', 'You have already rated this date.');
        }

        $this->reset();
    }

    public function dateSelected($dateId)
    {
        $this->dateId = $dateId;
    }
}
