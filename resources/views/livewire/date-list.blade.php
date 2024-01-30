<!-- resources/views/livewire/date-list.blade.php -->

<div class="overflow-x-auto">
    <table class="table">
        <tbody>
        @foreach($dates as $dateInfo)
            <tr>
                <td class="px-6 py-4 whitespace-nowrap">{{ $dateInfo->date }}</td>
                <td class="px-6 py-4">{{ $dateInfo->location }}</td>
                <td class="px-6 py-4">{{ $dateInfo->google_maps_link }}</td>
                <td class="px-6 py-4">{{ $dateInfo->description }}</td>
                <td class="px-6 py-4">{{ optional($dateInfo->ratings->where('user_id', 1)->first())->food_rating }}</td>
                <td class="px-6 py-4">{{ optional($dateInfo->ratings->where('user_id', 1)->first())->setting_rating }}</td>
                <td class="px-6 py-4">{{ optional($dateInfo->ratings->where('user_id', 1)->first())->price_rating }}</td>
                <td class="px-6 py-4">{{ optional($dateInfo->ratings->where('user_id', 2)->first())->food_rating }}</td>
                <td class="px-6 py-4">{{ optional($dateInfo->ratings->where('user_id', 2)->first())->setting_rating }}</td>
                <td class="px-6 py-4">{{ optional($dateInfo->ratings->where('user_id', 2)->first())->price_rating }}</td>
                <td class="px-6 py-4">{{ optional($dateInfo->expenses->first())->amount }}</td>
                @if($dateInfo->ratings->where('user_id', \Illuminate\Support\Facades\Auth::id()) == null)
                    <td class="px-6 py-4">
                        @livewire('add-rating', ['dateId' => $dateInfo->id])
                    </td>
                @endif
            </tr>
        @endforeach
        </tbody>
        <thead>
        <tr>
            <th>Date</th>
            <th>Location</th>
            <th>Google Maps Link</th>
            <th>Description</th>
            <th colspan="3">Kellan</th>
            <th colspan="3">Daniel</th>
            <th>Expense</th>
        </tr>
        <tr>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th>Food</th>
            <th>Setting</th>
            <th>Price</th>
            <th>Food</th>
            <th>Setting</th>
            <th>Price</th>
            <th></th>
        </tr>
        </thead>
    </table>
</div>
