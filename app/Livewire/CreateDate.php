<?php

namespace App\Livewire;

use App\Models\DateNight;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class CreateDate extends Component
{
    public $date;
    public $location;
    public $googleMapsLink;
    public $description;

    public function mount()
    {
        $this->date = date('Y-m-d');
    }

    public function render()
    {
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
        DateNight::create([
            'date' => $this->date,
            'location' => $this->location,
            'google_maps_link' => $this->googleMapsLink,
            'description' => $this->description,
        ]);

        session()->flash('message', 'DateNight created successfully!');
        $this->reset(); // Reset the form fields after saving
    }

    public function submitDate()
    {
        $response = Http::withToken(auth()->user()->api_token)
            ->post(route('api.dates.store'), [
                'date' => $this->date,
                'location' => $this->location,
                'google_maps_link' => $this->googleMapsLink,
                'description' => $this->description,
            ]);

        if ($response->successful()) {
            session()->flash('message', 'DateNight created successfully');
            $this->reset();
        } else {
            session()->flash('error', 'Error creating date');
        }
    }

}