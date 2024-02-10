<?php

use App\Livewire\FormRating;
use App\Models\DateNight;
use App\Models\Expense;
use App\Models\Rating;
use App\Models\User;
use Livewire\Livewire;

beforeEach(function () {
    $this->deleteButtonHTML =
        '<button type="button" class="btn btn-outline btn-xs btn-warning" wire:click="delete">Delete</button>';
    $this->dateNight = DateNight::factory()->create(); // Create a new date night

    $user = User::factory()->create(); // Create a new user
    $this->user = $user; // Assign the created user to $this->user
    $this->actingAs($user); // Authenticate the user
});

afterEach(function () {
    $this->dateNight->ratings()->delete(); // Delete related ratings
    $this->dateNight->delete(); // Delete the date night
    $this->user->delete(); // Delete the user
});

it('renders successfully', function () {
    Livewire::test(FormRating::class)
        ->assertStatus(200);
});

it('renders the correct title when editing a rating', function () {
    $rating = Rating::factory()->create();
    Auth::loginUsingId($rating->user_id);

    Livewire::test(FormRating::class, ['dateNightId' => $rating->date_night_id])
        ->assertSee('Edit Rating');
});

it('renders the correct title when creating a rating', function () {
    Livewire::test(FormRating::class, ['dateNightId' => $this->dateNight->id])
        ->assertSee('Create Rating');
});

it('creates a new rating', function () {
    Auth::loginUsingId($this->user->id);
    Livewire::test(FormRating::class, ['dateNightId' => $this->dateNight->id])
        ->set('priceRating', 4)
        ->set('settingRating', 5)
        ->set('foodRating', 3)
        ->set('comments', 'Great experience')
        ->call('submit');

    expect(Rating::where('user_id', $this->user->id)
        ->where('date_night_id', $this->dateNight->id)->exists())->toBeTrue();
});

it('updates an existing rating', function () {
    Auth::loginUsingId($this->user->id);

    Livewire::test(FormRating::class, ['dateNightId' => $this->dateNight->id])
        ->set('priceRating', 3)
        ->set('settingRating', 4)
        ->set('foodRating', 5)
        ->set('comments', 'Updated review')
        ->call('submit')
    ->assertHasNoErrors();

    $rating = Rating::where('user_id', $this->user->id)
        ->where('date_night_id', $this->dateNight->id)
        ->first();

    expect($rating->price_rating)->toBe(3)
        ->and($rating->setting_rating)->toBe(4)
        ->and($rating->food_rating)->toBe(5)
        ->and($rating->comments)->toBe('Updated review');
});

it('validates required fields', function () {
    Livewire::test(FormRating::class)
        ->call('submit')
        ->assertHasErrors(['priceRating', 'settingRating', 'foodRating']);
});

it('validates rating fields', function () {
    Livewire::test(FormRating::class)
        ->set('priceRating', 6)
        ->set('settingRating', 6)
        ->set('foodRating', 6)
        ->call('submit')
        ->assertHasErrors(['priceRating', 'settingRating', 'foodRating']);
});

it('validates comments field', function () {
    Livewire::test(FormRating::class)
        ->set('comments', str_repeat('a', 256))
        ->call('submit')
        ->assertHasErrors(['comments']);
});

it('does not update if user is not authorized', function () {
    $rating = Rating::factory([
        'date_night_id' => $this->dateNight->id,
        'user_id' => $this->user->id,
        'price_rating' => 1,
        'setting_rating' => 1,
        'food_rating' => 1,
        'comments' => 'Great experience'
    ])->create();

    $unAuthorizedUser = User::factory()->create();
    Auth::loginUsingId($unAuthorizedUser->id);

    Livewire::test(FormRating::class, ['dateNightId' => $this->dateNight->id])
        ->set('priceRating', 3)
        ->set('settingRating', 4)
        ->set('foodRating', 5)
        ->set('comments', 'Updated review')
        ->call('submit');

    $rating->refresh();

    expect($rating->price_rating)->not->toBe(3)
        ->and($rating->setting_rating)->not->toBe(4)
        ->and($rating->food_rating)->not->toBe(5)
        ->and($rating->comments)->not->toBe('Updated review');
});

it('renders the delete button when editing a rating', function () {
    $rating = Rating::factory()->create();
    $user = Auth::loginUsingId($rating->user_id);

    Livewire::test(FormRating::class, ['dateNightId' => $rating->date_night_id])
        ->assertSeeHtml($this->deleteButtonHTML);
});

it('does not render the delete button when creating a rating', function () {
    Livewire::test(FormRating::class, ['dateNightId' => $this->dateNight->id])
        ->assertDontSeeHtml($this->deleteButtonHTML);
});

it('deletes the rating', function () {
    $rating = Rating::factory()->create();
    $user = Auth::loginUsingId($rating->user_id);

    Livewire::test(FormRating::class, ['dateNightId' => $rating->date_night_id])
        ->call('delete');

    expect(Rating::find($rating->id))->toBeNull();
});

it('does not delete the rating if user is not authorized', function () {
    $rating = Rating::factory()->create();
    Auth::loginUsingId($rating->user_id);

    $unAuthorizedUser = User::factory()->create();
    Auth::loginUsingId($unAuthorizedUser->id);

    Livewire::test(FormRating::class, ['dateNightId' => $rating->date_night_id])
        ->call('delete');

    expect(Rating::find($rating->id))->not->toBeNull();

    $unAuthorizedUser->delete();
});

it('does not delete the expense if it does not exist', function () {
    Livewire::test(FormRating::class)
        ->set('dateNightId', $this->dateNight->id)
        ->set('priceRating', 3)
        ->set('settingRating', 4)
        ->set('foodRating', 5)
        ->set('comments', 'Updated review')
        ->call('delete');

    $this->assertDatabaseMissing('ratings', [
        'date_night_id' => $this->dateNight->id
    ]);
});
