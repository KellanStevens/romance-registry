<?php

use App\Livewire\EditDate;
use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test(EditDate::class)
        ->assertStatus(200);
});
