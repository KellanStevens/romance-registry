<!-- resources/views/livewire/anniversary-countdown.blade.php -->
<div>
    @if($anniversaryDate)
        @if($isToday)
            <button class="btn btn-outline btn-primary no-animation">
                Happy Anniversary!
            </button>
        @else
            Until Anniversary:
    <br/>
        <div
            wire:poll.1000ms="updateCountdown"
            wire:offline.attr="disabled"
            class="flex gap-5"
        >
            <div>
                <span class="countdown font-mono text-1xl">
                  <span id="remainingDays" style="--value: {{ $remainingDays }};"></span>
                </span>
                days
            </div>
            <div>
                <span class="countdown font-mono text-1xl">
                  <span id="remainingHours" style="--value:{{ $remainingHours }};"></span>
                </span>
                hours
            </div>
            <div>
                <span class="countdown font-mono text-1xl">
                  <span id="remainingMinutes" style="--value:{{ $remainingMinutes }};"></span>
                </span>
                min
            </div>
            <div>
                <span class="countdown font-mono text-1xl">
                  <span id="remainingSeconds" style="--value:{{ $remainingSeconds }};"></span>
                </span>
                sec
            </div>
        </div>
        @endif
    @else
        <div>
            No anniversary found in the database.
        </div>
    @endif
</div>
