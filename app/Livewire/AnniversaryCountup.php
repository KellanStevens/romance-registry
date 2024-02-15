<?php

namespace App\Livewire;

use App\Models\Miscellaneous;
use Livewire\Component;

class AnniversaryCountup extends Component
{
    public $anniversaryDate;
    public $daysSinceAnniversary;

    public function mount(): void
    {
        $anniversary = Miscellaneous::where('item_name', 'First Date Anniversary')->first();

        if ($anniversary) {
            try {
                $this->anniversaryDate = new \DateTime($anniversary->item_value);
            } catch (\Exception $e) {
            }
            $this->calculateDaysSinceAnniversary();
        } else {
            $this->anniversaryDate = null;
            $this->daysSinceAnniversary = null;
        }
    }

    public function calculateDaysSinceAnniversary(): void
    {
        $now = new \DateTime();
        $interval = $this->anniversaryDate->diff($now);
        $this->daysSinceAnniversary = $interval->days;
    }

    public function render()
    {
        return view('livewire.anniversary-countup');
    }
}
