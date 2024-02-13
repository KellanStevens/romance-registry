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
    public $priceRating;

    #[Rule('required|integer|between:1,5')]
    public $settingRating;

    #[Rule('required|integer|between:1,5')]
    public $foodRating;

    #[Rule('nullable|string|max:255')]
    public $comments;

    public $title;

    public $dateNightId;

    public $rating;

    public function mount($dateNightId = null): void
    {
        if ($dateNightId === null || !DateNight::where('id', $dateNightId)->exists()) {
            // If dateNightId is null or does not exist in the DateNight table, throw an error
            $this->addError('dateNightId', 'Invalid Date Night ID.');
        }

        $this->dateNightId = $dateNightId;
        $this->rating = Rating::where('date_night_id', $dateNightId)
            ->where('user_id', Auth::id())
            ->first();
        $this->title = $this->rating ? 'Edit Rating' : 'Create Rating';

        $this->priceRating = $this->rating ? $this->rating->price_rating : 0;
        $this->settingRating = $this->rating ? $this->rating->setting_rating : 0;
        $this->foodRating = $this->rating ? $this->rating->food_rating : 0;
        $this->comments = $this->rating ? $this->rating->comments : '';
    }

    public function render()
    {
        return view('livewire.form-rating');
    }

    public function update(): void
    {
        $this->validate([
            'dateNightId' => 'required|exists:date_nights,id',
            'priceRating' => 'required|integer|between:1,5',
            'settingRating' => 'required|integer|between:1,5',
            'foodRating' => 'required|integer|between:1,5',
            'comments' => 'nullable|string|max:255',
        ]);
        $this->authorize('update', $this->rating);
        $this->rating->update([
            'price_rating' => $this->priceRating,
            'setting_rating' => $this->settingRating,
            'food_rating' => $this->foodRating,
            'comments' => $this->comments,
        ]);
        session()->flash('message', 'Rating updated successfully!');
        $this->closeModal();
        $this->dispatch('refreshListDateNight');
    }

    public function store(): void
    {
        $this->validate([
            'dateNightId' => 'required|exists:date_nights,id',
            'priceRating' => 'required|integer|between:1,5',
            'settingRating' => 'required|integer|between:1,5',
            'foodRating' => 'required|integer|between:1,5',
            'comments' => 'nullable|string|max:255',
        ]);
        $this->authorize('create', Rating::class);
        Rating::create([
            'user_id' => Auth::id(),
            'date_night_id' => $this->dateNightId,
            'price_rating' => $this->priceRating,
            'setting_rating' => $this->settingRating,
            'food_rating' => $this->foodRating,
            'comments' => $this->comments,
        ]);
        session()->flash('message', 'Rating created successfully!');
        $this->closeModal();
        $this->dispatch('refreshListDateNight');
    }

    public function submit(): void
    {
        if ($this->rating) {
            $this->update();
        } else {
            $this->store();
        }
    }

    public function delete(): void
    {
        $this->validate([
            'dateNightId' => 'required|exists:date_nights,id',
            'priceRating' => 'required|integer|between:1,5',
            'settingRating' => 'required|integer|between:1,5',
            'foodRating' => 'required|integer|between:1,5',
            'comments' => 'nullable|string|max:255',
        ]);
        $this->authorize('delete', $this->rating);
        if ($this->rating) {
            $this->rating->delete();
            session()->flash('message', 'Rating deleted successfully!');
        } else {
            session()->flash('error', 'No rating to delete!');
        }
        $this->closeModal();
        $this->dispatch('refreshListDateNight');
    }
}
