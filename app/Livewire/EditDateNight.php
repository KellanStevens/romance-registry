<?php

namespace App\Livewire;

use App\Models\DateNight;
use LivewireUI\Modal\ModalComponent;

class EditDateNight extends ModalComponent
{
    public $dateNightID;
    private DateNight $dateNight;

    public function mount()
    {
        $this->dateNight = DateNight::find($this->dateNightID);
    }
    public function render()
    {
        return view('livewire.edit-date-night');
    }
}
