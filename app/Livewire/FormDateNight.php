<?php

namespace App\Livewire;

use AllowDynamicProperties;
use App\Models\DateNight;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Rule;
use LivewireUI\Modal\ModalComponent;

#[AllowDynamicProperties] class FormDateNight extends ModalComponent
{
    #[Rule('required|date|date_format:Y-m-d')]
    public $date;

    #[Rule('required|string|max:100')]
    public $location;

    #[Rule('nullable|url|max:255|')]
    public $googleMapsLink;

    #[Rule('nullable|string|max:255')]
    public $description;

    public $dateNightId;

    public $dateNight;

    public $title;

    public function mount($dateNightId = null): void
    {
        if (!DateNight::where('id', $dateNightId)->exists() && $dateNightId != null) {
            // If dateNightId does not exist in the DateNight table, throw an error
            $this->addError('dateNightId', 'Invalid Date Night ID.');
            return;
        }

        $this->dateNightId = $dateNightId;
        $this->title = $dateNightId ? 'Edit Date Night' : 'Create Date Night';

        $this->dateNight = $this->dateNightId ? DateNight::findOrFail($dateNightId) : null;

        $this->date = $this->dateNight ? $this->dateNight->date : date('Y-m-d');
        $this->location = $this->dateNight ? $this->dateNight->location: null;
        $this->googleMapsLink = $this->dateNight ? $this->dateNight->google_maps_link: null;
        $this->description = $this->dateNight ? $this->dateNight->description : null;
    }
    public function render()
    {
        return view('livewire.form-date-night');
    }

    public function update(): void
    {
        $this->validate([
            'date' => 'required|date|date_format:Y-m-d',
            'location' => 'required|string|max:100',
            'googleMapsLink' => 'nullable|url|max:255',
            'description' => 'nullable|string|max:255',
        ]);
        $this->authorize('update', $this->dateNight);
        $this->dateNight->update([
            'date' => $this->date,
            'location' => $this->location,
            'google_maps_link' => $this->googleMapsLink,
            'description' => $this->description,
        ]);

        session()->flash('message', 'DateNight updated successfully!');
        $this->closeModal();
    }

    public function store(): void
    {
        $this->validate([
            'date' => 'required|date|date_format:Y-m-d',
            'location' => 'required|string|max:100',
            'googleMapsLink' => 'nullable|url|max:255',
            'description' => 'nullable|string|max:255',
        ]);
        $this->authorize('create', Auth::user());
        DateNight::create([
            'date' => $this->date,
            'location' => $this->location,
            'google_maps_link' => $this->googleMapsLink,
            'description' => $this->description,
        ]);
        session()->flash('message', 'DateNight created successfully!');
        $this->closeModal();
    }

    public function submit(): void
    {
        if ($this->dateNight) {
            $this->update();
        } else {
            $this->store();
        }
    }

    public function delete(): void
    {
        $this->validate([
            'dateNightId' => 'required|exists:date_nights,id',
        ]);
        $this->authorize('delete', $this->dateNight);
        if ($this->dateNight) {
            $this->dateNight->delete();
            session()->flash('message', 'Date Night deleted successfully');
        } else {
            session()->flash('error', 'No Date Night to delete!');
        }
        $this->closeModal();
    }

//    public function storeOrUpdate(): void
//    {
//        $validated = $this->validate();
//
//        if (isset($this->dateNightId)) {
//            DateNight::where('id', $this->dateNightId)->update($validated);
//            session()->flash('message', 'DateNight updated successfully!');
//        } else {
//            DateNight::create($validated);
//            session()->flash('message', 'DateNight created successfully!');
//        }
//
//        $this->closeModal();
//    }
}
