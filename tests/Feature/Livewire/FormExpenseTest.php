<?php

use App\Livewire\FormExpense;
use App\Models\Expense;
use App\Models\DateNight;
use Livewire\Livewire;

beforeEach(function () {
    $this->deleteButtonHTML =
        '<button type="button" class="btn btn-outline btn-xs btn-warning" wire:click="delete">Delete</button>';

    $this->amountInputHTML =
        '<input wire:model.lazy="amount" inputmode="numeric" id="amount" type="number" class="input input-bordered w-full" required/>';

    $this->dateNight = DateNight::factory()->create();
});

afterEach(function () {
    Expense::where('date_night_id', $this->dateNight->id)->delete();
    $this->dateNight->delete();
});

it('renders successfully', function () {
    Livewire::test(FormExpense::class)
        ->assertStatus(200);
});

it('renders the correct title when editing an expense', function () {
    $expense = Expense::factory()->create();

    Livewire::test(FormExpense::class, ['dateNightId' => $expense->date_night_id])
        ->assertSee('Edit Expense');
});

it('renders the correct title when creating an expense', function () {
    Livewire::test(FormExpense::class, ['dateNightId' => $this->dateNight->id])
        ->assertSee('Create Expense');
});

it('renders the form fields', function () {
    Livewire::test(FormExpense::class)->assertSeeHtml($this->amountInputHTML);
});

it('validates required fields', function () {
    Livewire::test(FormExpense::class)
        ->call('submit')
        ->assertHasErrors(['amount' => 'required']);
});

it('validates amount field', function () {
    Livewire::test(FormExpense::class)
        ->set('amount', 'abc')
        ->call('submit')
        ->assertHasErrors(['amount' => 'numeric']);
});


it('stores the expense', function () {
    $dateNightId = DateNight::factory()->create()->id;

    Livewire::test(FormExpense::class)
        ->set('dateNightId', $dateNightId)
        ->set('amount', 100)
        ->call('submit');

    $this->assertDatabaseHas('expenses', [
        'date_night_id' => $dateNightId,
        'amount' => 100.00
    ]);
});

it('updates the expense', function () {
    $expense = Expense::factory()->create();

    Livewire::test(FormExpense::class, ['dateNightId' => $expense->date_night_id])
        ->set('amount', 200)
        ->call('submit');

    $this->assertDatabaseHas('expenses', [
        'id' => $expense->id,
        'amount' => 200.00
    ]);
});

it('renders the delete button when editing an expense', function () {
    $expense = Expense::factory()->create();

    Livewire::test(FormExpense::class, ['dateNightId' => $expense->date_night_id])
        ->assertSeeHtml($this->deleteButtonHTML);
});

it('does not render the delete button when creating an expense', function () {
    Livewire::test(FormExpense::class, ['dateNightId' => $this->dateNight->id])
        ->assertDontSeeHtml($this->deleteButtonHTML);
});

it('deletes the expense', function () {
    Livewire::test(FormExpense::class)
        ->set('dateNightId', $this->dateNight->id)
        ->set('amount', 100)
        ->set('expense', Expense::create([
            'date_night_id' => $this->dateNight->id,
            'amount' => 100,
        ]))
        ->call('delete')
        ->assertHasNoErrors();

    $this->assertDatabaseMissing('expenses', [
        'date_night_id' => $this->dateNight->id,
        'amount' => 100
    ]);
});
