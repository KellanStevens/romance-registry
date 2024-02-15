<!-- resources/views/livewire/anniversary-countup.blade.php -->

<div>
    @if($anniversaryDate)
        <div>
            Since Anniversary:
            <br/>
            {{ $daysSinceAnniversary }} days
        </div>
    @else
        <div>
            No anniversary found in the database.
        </div>
    @endif
</div>
