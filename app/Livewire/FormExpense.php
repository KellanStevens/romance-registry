<?php

namespace App\Livewire;

use App\Models\DateNight;
use App\Models\Expense;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Rule;
use LivewireUI\Modal\ModalComponent;

class FormExpense extends ModalComponent
{
    #[Rule('required|numeric|between:0,9999.99')]
    public $amount;

    public $expense;

    public $dateNightId;

    public $title;

    #[Computed]
    public function dateNightsData()
    {
        /* Get all dates don't have an expense */
        return DateNight::whereDoesntHave('expenses')->get();
    }

    public function mount($dateNightId = null): void
    {
        $this->dateNightId = $dateNightId;
        $this->title = $dateNightId ? 'Edit Expense' : 'Create Expense';

        $this->expense = Expense::where('date_night_id', $this->dateNightId)->first();

        if ($this->expense) {
            $this->amount = $this->expense->amount;
        } else {
            $this->amount = 0;
        }
    }
    public function render()
    {
        return view('livewire.form-expense');
    }

    public function storeOrUpdate(): void
    {
        $validated = $this->validate();

        if ($this->expense) {
            Expense::where('date_night_id', $this->dateNightId)->update($validated);
            session()->flash('message', 'Expense updated successfully!');
        } else {
            Expense::create([
                'date_night_id' => $this->dateNightId,
                'amount' => $this->amount,
            ]);
            session()->flash('message', 'Expense added successfully!');
        }

        $this->closeModal();
    }
}
