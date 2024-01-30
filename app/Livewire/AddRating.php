<?php

namespace App\Livewire;

use Livewire\Component;

class AddRating extends Component
{
    public $dateId;
    public $priceRating;
    public $settingRating;
    public $foodRating;
    public $comments;

    public function mount($dateId)
    {
        $this->dateId = $dateId;
    }

    public function render()
    {
        return view('livewire.add-rating');
    }

    public function submitRating()
    {
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
                'comments' => $this->comments,
            ]);

            session()->flash('message', 'Rating added successfully!');
        } else {
            session()->flash('message', 'You have already rated this date.');
        }

        $this->reset();
    }
}
