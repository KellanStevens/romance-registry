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
        if ($dateNightId === null || !DateNight::where('id', $dateNightId)->exists()) {
            // If dateNightId is null or does not exist in the DateNight table, throw an error
            $this->addError('dateNightId', 'Invalid Date Night ID.');
            return;
        }

        $this->dateNightId = $dateNightId;
        $this->expense = Expense::where('date_night_id', $this->dateNightId)->first();
        $this->title = $this->expense ? 'Edit Expense' : 'Create Expense';
        $this->amount = $this->expense ? $this->expense->amount : 0;
    }

    public function render()
    {
        return view('livewire.form-expense');
    }

    public function update(): void
    {
        $this->validate([
            'dateNightId' => 'required|exists:date_nights,id',
            'amount' => 'required|numeric|between:0,9999.99',
        ]);
        $this->expense->update([
            'amount' => $this->amount,
        ]);
        session()->flash('message', 'Expense updated successfully!');
        $this->closeModal();
    }

    public function store(): void
    {
        $this->validate([
            'dateNightId' => 'required|exists:date_nights,id',
            'amount' => 'required|numeric|between:0,9999.99',
        ]);
        Expense::create([
            'date_night_id' => $this->dateNightId,
            'amount' => $this->amount,
        ]);
        session()->flash('message', 'Expense added successfully!');
        $this->closeModal();
    }

    public function submit(): void
    {
        if ($this->expense) {
            $this->update();
        } else {
            $this->store();
        }
    }
    public function delete(): void
    {
        $this->validate([
            'dateNightId' => 'required|exists:date_nights,id',
            'amount' => 'required|numeric|between:0,9999.99',
        ]);
        if ($this->expense) {
            $this->expense->delete();
            session()->flash('message', 'Expense deleted successfully!');
        } else {
            session()->flash('error', 'No expense to delete!');
        }
        $this->closeModal();
    }
}
