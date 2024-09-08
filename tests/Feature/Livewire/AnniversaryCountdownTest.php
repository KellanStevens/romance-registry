<?php

// use App\Livewire\AnniversaryCountdown;
// use Livewire\Livewire;
// use SlopeIt\ClockMock\ClockMock;
// use App\Models\Miscellaneous;

// it('renders successfully', function () {
//     Livewire::test(AnniversaryCountdown::class)
//         ->assertStatus(200);
// });

// it('displays the correct countdown', function () {
//     ClockMock::Freeze(new \DateTime('2021-01-01 00:00:00'));
//         Livewire::test(AnniversaryCountdown::class)
//             ->set('anniversaryDate', '2021-12-31')
//             ->call('updateCountdown')
//             ->assertSee('--value: 364;');
// });

// it('displays the correct countdown when the anniversary date has passed', function () {
//     $anniversary = Miscellaneous::create([
//         'item_name' => 'First Date Anniversary',
//         'item_value' => '2021-12-31',
//     ]);
//     ClockMock::Freeze(new \DateTime('2022-01-01 00:00:00'));
//         Livewire::test(AnniversaryCountdown::class)
//             ->set('anniversaryDate', '2021-11-31')
//             ->call('updateCountdown')
//             ->assertSeeHtml('<span id="remainingDays" style="--value: 334;">')
//             ->assertSeeHtml('<span id="remainingHours" style="--value:0;"></span>')
//             ->assertSeeHtml('<span id="remainingMinutes" style="--value:0;"></span>')
//             ->assertSeeHtml('<span id="remainingSeconds" style="--value:0;"></span>');
//     $anniversary->delete();
// });

// it('displays Happy Anniversary when the anniversary date is today', function () {
//     $anniversary = Miscellaneous::create([
//         'item_name' => 'First Date Anniversary',
//         'item_value' => '2021-12-31',
//     ]);
//     ClockMock::Freeze(new \DateTime('2022-12-31 00:00:00'));
//         Livewire::test(AnniversaryCountdown::class)
//             ->assertSee('Happy Anniversary!');
//     $anniversary->delete();
// });

// it('displays the correct countdown when the anniversary date is today', function () {
//     $anniversary = Miscellaneous::create([
//         'item_name' => 'First Date Anniversary',
//         'item_value' => '2021-12-31',
//     ]);
//     ClockMock::Freeze(new \DateTime('2021-12-31 00:00:00'));
//         Livewire::test(AnniversaryCountdown::class)
//             ->set('anniversaryDate', '2021-12-31')
//             ->call('updateCountdown')
//             ->assertSee('Happy Anniversary!')
//             ->assertDontSeeHtml('<span id="remainingDays" style="--value: 0;">')
//             ->assertDontSeeHtml('<span id="remainingHours" style="--value:0;"></span>')
//             ->assertDontSeeHtml('<span id="remainingMinutes" style="--value:0;"></span>')
//             ->assertDontSeeHtml('<span id="remainingSeconds" style="--value:0;"></span>');

//     $anniversary->delete();
// });

// it('displays the correct countdown when the anniversary date is not set', function () {
//     ClockMock::Freeze(new \DateTime('2021-01-01 00:00:00'));
//         Livewire::test(AnniversaryCountdown::class)
//             ->assertDontSeeHtml('<span id="remainingDays" style="--value: 0;">')
//             ->assertDontSeeHtml('<span id="remainingHours" style="--value:0;"></span>')
//             ->assertDontSeeHtml('<span id="remainingMinutes" style="--value:0;"></span>')
//             ->assertDontSeeHtml('<span id="remainingSeconds" style="--value:0;"></span>');
// });

// it('seconds update every second', function () {
//     ClockMock::Freeze(new \DateTime('2021-01-01 00:00:00'));
//         $livewireComponent = Livewire::test(AnniversaryCountdown::class)
//             ->set('anniversaryDate', '2021-12-31')
//             ->call('updateCountdown')
//             ->assertSeeHtml('<span id="remainingSeconds" style="--value:0;"></span>');

//     ClockMock::Freeze(new \DateTime('2021-01-01 00:00:01'));
//         $livewireComponent
//             ->set('anniversaryDate', '2021-12-31')
//             ->call('updateCountdown')
//             ->assertSeeHtml('<span id="remainingSeconds" style="--value:59;"></span>');
// });

// it('minutes update every minute', function () {
//     ClockMock::Freeze(new \DateTime('2021-01-01 00:00:00'));
//         $livewireComponent = Livewire::test(AnniversaryCountdown::class)
//             ->set('anniversaryDate', '2021-12-31')
//             ->call('updateCountdown')
//             ->assertSeeHtml('<span id="remainingMinutes" style="--value:0;"></span>');

//     ClockMock::Freeze(new \DateTime('2021-01-01 00:01:00'));
//         $livewireComponent
//             ->set('anniversaryDate', '2021-12-31')
//             ->call('updateCountdown')
//             ->assertSeeHtml('<span id="remainingMinutes" style="--value:59;"></span>');
// });

// it('hours update every hour', function () {
//     ClockMock::Freeze(new \DateTime('2021-01-01 00:00:00'));
//         $livewireComponent = Livewire::test(AnniversaryCountdown::class)
//             ->set('anniversaryDate', '2021-12-31')
//             ->call('updateCountdown')
//             ->assertSeeHtml('<span id="remainingHours" style="--value:0;"></span>');

//     ClockMock::Freeze(new \DateTime('2021-01-01 01:00:00'));
//         $livewireComponent
//             ->set('anniversaryDate', '2021-12-31')
//             ->call('updateCountdown')
//             ->assertSeeHtml('<span id="remainingHours" style="--value:23;"></span>');
// });

// it('days update every day', function () {
//     $anniversary = Miscellaneous::create([
//         'item_name' => 'First Date Anniversary',
//         'item_value' => '2021-12-31',
//     ]);
//     ClockMock::Freeze(new \DateTime('2021-01-01 00:00:00'));
//         $livewireComponent = Livewire::test(AnniversaryCountdown::class)
//             ->call('updateCountdown')
//             ->assertSeeHtml('<span id="remainingDays" style="--value: 364;"></span>');

//     ClockMock::Freeze(new \DateTime('2021-01-02 00:00:00'));
//         $livewireComponent
//             ->set('anniversaryDate', '2021-12-31')
//             ->call('updateCountdown')
//             ->assertSeeHtml('<span id="remainingDays" style="--value: 363;"></span>');
//     $anniversary->delete();
// });

