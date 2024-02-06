<?php

namespace App\Livewire;

use AllowDynamicProperties;
use App\Models\DateNight;
use Illuminate\View\View;
use Livewire\Attributes\Rule;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

#[AllowDynamicProperties] class FormDateNight extends ModalComponent
{
    #[Rule('required|date|date_format:Y-m-d')]
    public $date;

    #[Rule('required|string|max:100')]
    public $location;

    #[Rule('url|nullable|max:255|')]
    public $google_maps_link;

    #[Rule('nullable|string|max:255')]
    public $description;

    public $title;

    public $dateNightId;

    public function mount($dateNightId = null): void
    {
        $this->dateNightId = $dateNightId;
        $this->title = $dateNightId ? 'Edit Date Night' : 'Create Date Night';

        if ($dateNightId) {
            $dateNight = DateNight::findOrFail($dateNightId);
            $this->date = $dateNight->date;
            $this->location = $dateNight->location;
            $this->google_maps_link = $dateNight->google_maps_link;
            $this->description = $dateNight->description;
        } else {
            $this->date = date('Y-m-d');
        }
    }
    public function render()
    {
        return view('livewire.form-date-night');
    }

    public function storeOrUpdate(): void
    {
        $validated = $this->validate();

        if (isset($this->dateNightId)) {
            DateNight::where('id', $this->dateNightId)->update($validated);
            session()->flash('message', 'DateNight updated successfully!');
        } else {
            DateNight::create($validated);
            session()->flash('message', 'DateNight created successfully!');
        }

        $this->closeModal();
    }
}
