<?php

namespace App\Livewire;

use App\Models\DateNight;
use App\Models\Rating;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Rule;
use LivewireUI\Modal\ModalComponent;

class FormRating extends ModalComponent
{
    #[Rule('required|integer|between:1,5')]
    public $price_rating;

    #[Rule('required|integer|between:1,5')]
    public $setting_rating;

    #[Rule('required|integer|between:1,5')]
    public $food_rating;

    #[Rule('nullable|string|max:255')]
    public $comments;

    public $title;
    public $dateNightId;

    public $rating;
    #[Computed]
    public function dateNightsData()
    {
        /* List all date nights that the user has not rated */
        $user = Auth::user();

        return DateNight::whereDoesntHave('ratings', function ($query) use ($user) {
            $query->where('user_id', $user->id);
        })->get();
    }

    public function mount($dateNightId = null): void
    {
        $this->dateNightId = $dateNightId;
        $this->rating = Rating::where('date_night_id', $dateNightId)
            ->where('user_id', Auth::id())
            ->first();
        $this->title = $this->rating ? 'Edit Rating' : 'Create Rating';

        if ($this->rating) {
            $this->price_rating = $this->rating->price_rating;
            $this->setting_rating = $this->rating->setting_rating;
            $this->food_rating = $this->rating->food_rating;
            $this->comments = $this->rating->comments;
        } else {
            $this->price_rating = 0;
            $this->setting_rating = 0;
            $this->food_rating = 0;
            $this->comments = '';
        }
    }

    public function render()
    {
        return view('livewire.form-rating');
    }

    public function storeOrUpdate(): void
    {
        $validated = $this->validate();

        if ($this->rating) {
            Rating::where('date_night_id', $this->dateNightId)
                ->where('user_id', Auth::id())
                ->update($validated);
            session()->flash('message', 'Rating updated successfully!');
        } else {
            Rating::create([
                'user_id' => Auth::id(),
                'date_night_id' => $this->dateNightId,
                'price_rating' => $this->price_rating,
                'setting_rating' => $this->setting_rating,
                'food_rating' => $this->food_rating,
                'comment' => $this->comments,
            ]);
            session()->flash('message', 'Rating created successfully!');
        }

        $this->closeModal();
    }
}
