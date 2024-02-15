<?php

namespace App\Livewire;

use App\Models\Miscellaneous;
use Livewire\Component;

class AnniversaryCountdown extends Component
{
    public $anniversaryDate;
    public $remainingDays;
    public $remainingHours;
    public $remainingMinutes;
    public $remainingSeconds;

    public function mount()
    {
        $anniversary = Miscellaneous::where('item_name', 'First Date Anniversary')->first();

        if ($anniversary) {
            $this->anniversaryDate = $anniversary->item_value;
            $this->updateCountdown();
        } else {
            $this->anniversaryDate = null;
            $this->remainingDays = null;
            $this->remainingHours = null;
            $this->remainingMinutes = null;
            $this->remainingSeconds = null;
        }
    }

    public function updateCountdown()
    {
        $now = time();
        $target = strtotime($this->anniversaryDate);
        // If the target date has already passed, add a year to it
        if ($target < $now) {
            $target = strtotime('+1 year', $target);
        }
        $difference = $target - $now;

        if ($difference > 0) {
            $this->remainingDays = floor($difference / (60 * 60 * 24));
            $this->remainingHours = floor(($difference % (60 * 60 * 24)) / (60 * 60));
            $this->remainingMinutes = floor(($difference % (60 * 60)) / 60);
            $this->remainingSeconds = $difference % 60;
        } else {
            // If the target date has passed, set all variables to 0
            $this->remainingDays = 0;
            $this->remainingHours = 0;
            $this->remainingMinutes = 0;
            $this->remainingSeconds = 0;
        }
    }

    public function render()
    {
        return view('livewire.anniversary-countdown');
    }
}
