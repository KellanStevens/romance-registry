<?php

namespace App\Livewire;

use App\Models\DateNight;
use App\Models\Rating;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Computed;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class CreateRating extends ModalComponent
{
    public $dateNightId;
    public $priceRating;
    public $settingRating;
    public $foodRating;
    public $comment;
    public $title = 'Edit Date Night';

    public function render()
    {
        return view('livewire.create-rating');
    }

    #[Computed]
    public function dateNightsData()
    {
        /* List all date nights that the user has not rated */
        $user = Auth::user();

        return DateNight::whereDoesntHave('ratings', function ($query) use ($user) {
            $query->where('user_id', $user->id);
        })->get();
    }

    public function store()
    {
        /* Validate the form and submit rating */

        $this->validate([
            'dateNightId' => 'required',
            'priceRating' => 'required|integer',
            'settingRating' => 'required|integer',
            'foodRating' => 'required|integer',
            'comment' => 'nullable|string'
        ]);

        // Check if a date has been selected
        if (!$this->dateNightId) {
            session()->flash('message', 'Please select a date night before submitting a rating.');
            return;
        }

        // Check if the user has already rated this date
        $existingRating = Rating::where('date_night_id', $this->dateNightId)
            ->where('user_id', Auth::id())
            ->first();

        if (!$existingRating) {
            Rating::create([
                'user_id' => Auth::id(),
                'date_night_id' => $this->dateNightId,
                'price_rating' => $this->priceRating,
                'setting_rating' => $this->settingRating,
                'food_rating' => $this->foodRating,
                'comments' => $this->comment,
            ]);

            session()->flash('message', 'Rating added successfully!');
        } else {
            session()->flash('message', 'You have already rated this date night.');
        }

        $this->closeModal();
    }
}
