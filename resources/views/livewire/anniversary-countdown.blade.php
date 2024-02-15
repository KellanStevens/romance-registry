<!-- resources/views/livewire/anniversary-countdown.blade.php -->
<div>
    @if($anniversaryDate)
        <div
            wire:poll.1000ms="updateCountdown"
            wire:offline.attr="disabled"
            class="flex gap-5"
        >
            <div>
                <span class="countdown font-mono text-1xl">
                  <span style="--value: {{ $remainingDays }};"></span>
                </span>
                days
            </div>
            <div>
                <span class="countdown font-mono text-1xl">
                  <span style="--value:{{ $remainingHours }};"></span>
                </span>
                hours
            </div>
            <div>
                <span class="countdown font-mono text-1xl">
                  <span style="--value:{{ $remainingMinutes }};"></span>
                </span>
                min
            </div>
            <div>
                <span class="countdown font-mono text-1xl">
                  <span style="--value:{{ $remainingSeconds }};"></span>
                </span>
                sec
            </div>
        </div>
    @else
        <div>
            No anniversary found in the database.
        </div>
    @endif
</div>
