<?php

namespace App\Livewire;

use App\Models\DateNight;
use App\Models\Expense;
use Livewire\Attributes\Computed;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class CreateExpense extends ModalComponent
{
    public $dateNightId;
    public $amount;

    public $title = 'Add Expense';

    public function render()
    {
        return view('livewire.create-expense');
    }

    #[Computed()]
    public function dateNightsData()
    {
        /* Get all dates don't have an expense */
        return DateNight::whereDoesntHave('expenses')->get();
    }

    public function store()
    {
        /* Validate the form and submit expense */

        // Check if a date has been selected
        if (!$this->dateNightId) {
            session()->flash('message', 'Please select a date night before submitting an expense.');
            return;
        }

        // Check if the user has already added an expense for this date
        $existingExpense = Expense::where('date_night_id', $this->dateNightId)
            ->first();

        if (!$existingExpense) {
            Expense::create([
                'date_night_id' => $this->dateNightId,
                'amount' => $this->amount,
            ]);

            session()->flash('message', 'Expense added successfully!');
        } else {
            session()->flash('message', 'You have already added an expense for this date night.');
        }

        $this->closeModal();
    }
}
