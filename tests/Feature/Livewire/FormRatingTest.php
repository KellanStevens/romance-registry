<?php

use App\Livewire\FormRating;
use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test(FormRating::class)
        ->assertStatus(200);
});
