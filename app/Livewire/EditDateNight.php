<?php

namespace App\Livewire;

use App\Models\DateNight;
use LivewireUI\Modal\ModalComponent;

class EditDateNight extends ModalComponent
{
    public $dateNightId;
    public $date;
    public $location;
    public $googleMapsLink;
    public $description;
    public $title = 'Edit Date Night';

    public function mount($dateNightId): void
    {
        $dateNight = DateNight::findOrFail($dateNightId);

        $this->dateNightId = $dateNight->id;
        $this->date = $dateNight->date;
        $this->location = $dateNight->location;
        $this->googleMapsLink = $dateNight->google_maps_link;
        $this->description = $dateNight->description;
    }

    public function render()
    {
        return view('livewire.edit-date-night');
    }

    public function update(): void
    {
        $this->validate([
            'date' => 'required|date',
            'location' => 'required|string',
            'googleMapsLink' => 'nullable|url',
            'description' => 'nullable|string',
        ]);

        // Update the existing date night record in the database
        DateNight::where('id', $this->dateNightId)->update([
            'date' => $this->date,
            'location' => $this->location,
            'google_maps_link' => $this->googleMapsLink,
            'description' => $this->description,
        ]);

        session()->flash('message', 'DateNight updated successfully!');

        $this->closeModal();
    }
}
