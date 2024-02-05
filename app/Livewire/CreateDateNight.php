<?php

namespace App\Livewire;

use App\Models\DateNight;
use Illuminate\Support\Facades\Http;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class CreateDateNight extends ModalComponent
{
    public $date, $location, $googleMapsLink, $description;
    public $title = 'Create Date Night';

    public function mount()
    {
        $this->date = date('Y-m-d');
    }

    public function render()
    {
        return view('livewire.create-date-night');
    }

    public function store()
    {
        $this->validate([
            'date' => 'required|date',
            'location' => 'required|string',
            'googleMapsLink' => 'nullable|url',
            'description' => 'nullable|string',
        ]);

        // Create a new date record in the database
        DateNight::create([
            'date' => $this->date,
            'location' => $this->location,
            'google_maps_link' => $this->googleMapsLink,
            'description' => $this->description,
        ]);

        session()->flash('message', 'DateNight created successfully!');

        $this->closeModal();
    }
}
