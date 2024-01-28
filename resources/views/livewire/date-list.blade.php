<!-- resources/views/livewire/date-list.blade.php -->

<div class="overflow-x-auto">
    <table class="table">
        <tbody>
        @foreach($dates as $date)
            <tr>
                <td class="px-6 py-4 whitespace-nowrap"> {{ $date->date }} </td>
                <td class="px-6 py-4"> {{ $date->location }} </td>
                <td class="px-6 py-4"> {{ $date->google_maps_link }} </td>
                <td class="px-6 py-4"> {{ $date->description }} </td>
            </tr>
        @endforeach

        </tbody>
        <thead>
        <tr>
            <th>Date</th>
            <th>Location</th>
            <th>Google Maps Link</th>
            <th>Description</th>
        </tr>
        </thead>
    </table>
</div>
