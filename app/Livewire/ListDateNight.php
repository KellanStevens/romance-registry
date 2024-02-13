<?php

namespace App\Livewire;

use AllowDynamicProperties;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Computed;
use Livewire\Component;
use App\Models\DateNight;
use App\Models\Rating;

#[AllowDynamicProperties] class ListDateNight extends Component
{
    public $showEditModal = false;

    protected $listeners = ['refreshListDateNight' => 'refreshList'];

    public function render()
    {
        return view('livewire.list-date-night');
    }

    public function refreshList()
    {
        unset($this->dateNightsData);
    }

    #[Computed]
    public function dateNightsData()
    {
        return DateNight::with(['ratings', 'expenses'])->get();
    }

    public function edit()
    {
        $this->showEditModal = true;
    }
}
