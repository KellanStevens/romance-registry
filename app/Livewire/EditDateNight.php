<?php

namespace App\Livewire;

use App\Models\DateNight;
use LivewireUI\Modal\ModalComponent;

class EditDateNight extends ModalComponent
{
    public $dateNightID, $date, $location, $googleMapsLink, $description;

    public function mount($dateNightID)
    {
        $dateNight = DateNight::findOrFail($dateNightID);

        $this->dateNightID = $dateNight->id;
        $this->date = $dateNight->date;
        $this->location = $dateNight->location;
        $this->googleMapsLink = $dateNight->google_maps_link;
        $this->description = $dateNight->description;
    }

    public function render()
    {
        return view('livewire.edit-date-night');
    }

    public function update()
    {
        $this->validate([
            'date' => 'required|date',
            'location' => 'required|string',
            'googleMapsLink' => 'nullable|url',
            'description' => 'nullable|string',
        ]);

        // Update the existing date night record in the database
        DateNight::where('id', $this->dateNightID)->update([
            'date' => $this->date,
            'location' => $this->location,
            'google_maps_link' => $this->googleMapsLink,
            'description' => $this->description,
        ]);

        session()->flash('message', 'DateNight updated successfully!');
    }
}
