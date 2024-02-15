<!-- resources/views/livewire/anniversary-countup.blade.php -->

<div>
    @if($anniversaryDate)
        <div>
            Days Since Anniversary: {{ $daysSinceAnniversary }}
        </div>
    @else
        <div>
            No anniversary found in the database.
        </div>
    @endif
</div>
