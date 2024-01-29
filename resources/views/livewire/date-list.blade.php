<!-- resources/views/livewire/date-list.blade.php -->

<div class="overflow-x-auto">
    <table class="table">
        <tbody>
{{--        @dd($dates)--}}
        @foreach($dates as $dateInfo)
{{--            @php--}}
{{--                $date = $dateInfo['date'];--}}
{{--                $userRating = $dateInfo['userRating'];--}}
{{--            @endphp--}}

            <tr>
                <td class="px-6 py-4 whitespace-nowrap"> {{ $dateInfo->date }} </td>
                <td class="px-6 py-4"> {{ $dateInfo->location }} </td>
                <td class="px-6 py-4"> {{ $dateInfo->google_maps_link }} </td>
                <td class="px-6 py-4"> {{ $dateInfo->description }} </td>
                <td class="px-6 py-4 whitespace-nowrap">
                    @if ($dateInfo->ratings->isNotEmpty())
                        @foreach ($dateInfo->ratings as $rating)
                            <livewire:date-rating :date="$dateInfo" :ratings="$rating" :key="$rating->id" />
                        @endforeach
                    @else
                        No ratings yet.
                    @endif
                </td>
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
