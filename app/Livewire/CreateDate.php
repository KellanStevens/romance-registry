<?php

namespace App\Livewire;

use App\Models\Date;
use Livewire\Component;

class CreateDate extends Component
{
    public $date;
    public $location;
    public $googleMapsLink;
    public $description;

    public function render()
    {
        $this->date = date('Y-m-d');
        return view('livewire.create-date');
    }
    public function saveDate()
    {
        $this->validate([
            'date' => 'required|date',
            'location' => 'required|string',
            'googleMapsLink' => 'nullable|url',
            'description' => 'nullable|string',
        ]);

        // Create a new date record in the database
        Date::create([
            'date' => $this->date,
            'location' => $this->location,
            'google_maps_link' => $this->googleMapsLink,
            'description' => $this->description,
        ]);

        session()->flash('message', 'Date created successfully!');
        $this->reset(); // Reset the form fields after saving
    }

}
