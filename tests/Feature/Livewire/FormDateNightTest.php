<?php

use App\Livewire\FormDateNight;
use App\Models\DateNight;
use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test(FormDateNight::class)
        ->assertStatus(200);
});

it('renders the correct title when editing a date night', function () {
    $dateNight = DateNight::factory()->create();

    Livewire::test(FormDateNight::class, ['dateNightId' => $dateNight->id])
        ->assertSee('Edit Date Night');

    $dateNight->delete();
});

it('renders the correct title when creating a date night', function () {
    Livewire::test(FormDateNight::class)
        ->assertSee('Create Date Night');
});

it('validates required fields', function () {
    Livewire::test(FormDateNight::class)
        ->call('submit')
        ->assertHasErrors();
});
