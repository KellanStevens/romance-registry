<?php

use App\Livewire\FormDateNight;
use App\Models\DateNight;
use App\Policies\NoAuthorizationPolicy;
use Livewire\Livewire;

//setup and teardown
beforeEach(function () {
    Gate::policy(DateNight::class, NoAuthorizationPolicy::class);
});

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

it('validates non-nullable fields', function () {
    Livewire::test(FormDateNight::class)
        ->set('date', null)
        ->set('location', null)
        ->call('submit')
        ->assertHasErrors(['date' => 'required', 'location' => 'required']);
});

it('validates type for date field', function () {
    Livewire::test(FormDateNight::class)
        ->set('date', 'abc')
        ->call('submit')
        ->assertHasErrors(['date' => 'date']);
});


it('validates format of date field', function () {
    Livewire::test(FormDateNight::class)
        ->set('date', '2021-01-01 00:00:00')
        ->call('submit')
        ->assertHasErrors(['date' => 'date_format']);
});

it('validates length of location field', function () {
    Livewire::test(FormDateNight::class)
        ->set('location', str_repeat('a', 101))
        ->call('submit')
        ->assertHasErrors(['location' => 'max']);
});

it('validates length of description field', function () {
    Livewire::test(FormDateNight::class)
        ->set('description', str_repeat('a', 256))
        ->call('submit')
        ->assertHasErrors(['description' => 'max']);
});

it('stores the date night', function () {
    Livewire::test(FormDateNight::class)
        ->set('dateNightId', null)
        ->set('date', '2021-01-01')
        ->set('location', 'Test Location')
        ->call('submit');

    $this->assertDatabaseHas('date_nights', [
        'date' => '2021-01-01',
        'location' => 'Test Location',
    ]);
});

//it('updates the date night', function () {
//    $dateNight = DateNight::factory([
//        'date' => '2020-01-01',
//        'location' => 'Old Location'
//        ])->create();
//
//    Livewire::test(FormDateNight::class, ['dateNightId' => $dateNight->id])
//        ->set('date', '2021-01-01')
//        ->set('location', 'Test Location')
//        ->call('submit')
//        ->assertHasNoErrors();
//
//    $this->assertDatabaseHas('date_nights', [
//        'id' => $dateNight->id,
//        'date' => '2021-01-01',
//        'location' => 'Test Location',
//    ]);
//});
