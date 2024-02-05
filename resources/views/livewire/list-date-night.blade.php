<!-- resources/views/livewire/list-date-night.blade.php -->

<div class="overflow-x-auto">
    <table class="table">
        <tbody>
        @foreach($this->dateNightsData() as $DateNight)
            <tr>
                <td class="px-6 py-4 whitespace-nowrap hidden lg:table-cell">
                    {{ $DateNight->date }}
                </td>
                <td class="px-6 py-4">
                    <dl class="lg:hidden">
                        <dt class="sr-only">Date</dt>
                        <dd class="sm:table-cell text-gray-500"> {{ $DateNight->date }} </dd>
                    </dl>
                    {{ $DateNight->location }}
                </td>
                <td class="px-6 py-4 hidden sm:table-cell">{{ $DateNight->google_maps_link }}</td>
                <td class="px-6 py-4 hidden lg:table-cell">{{ $DateNight->description }}</td>
                <td class="px-6 py-4">
                    @if($DateNight->ratings->where('user_id', 2)->first() != null)
                        Food:    {{ optional($DateNight->ratings->where('user_id', 2)->first())->food_rating }}
                        Setting: {{ optional($DateNight->ratings->where('user_id', 2)->first())->setting_rating }}
                        Price:   {{ optional($DateNight->ratings->where('user_id', 2)->first())->price_rating }}
                    @else
                        <button class="btn" href="{{ route('rating') }}" wire:navigate> Add a rating</button>
                    @endif
                </td>
                <td class="px-6 py-4">
                    @if($DateNight->ratings->where('user_id', 1)->first() != null)
                        Food:    {{ optional($DateNight->ratings->where('user_id', 1)->first())->food_rating }}
                        Setting: {{ optional($DateNight->ratings->where('user_id', 1)->first())->setting_rating }}
                        Price:   {{ optional($DateNight->ratings->where('user_id', 1)->first())->price_rating }}
                    @else
                        <button class="btn" href="{{ route('rating') }}" wire:navigate> Add a rating</button>
                    @endif
                </td>
                <td class="px-6 py-4">
                    {{ optional($DateNight->expenses->first())->amount }}
                </td>
                @if($DateNight->ratings->where('user_id', Auth::id()) == null)
                    <td class="px-6 py-4">
                        @livewire('add-rating', ['dateId' => $DateNight->id])
                    </td>
                @endif
                <td>
                    <a class="btn btn-sm" href="{{ route('edit-dates', ['dateNightId' => $DateNight->id]) }}">Edit Date</a>
                </td>
            </tr>
        @endforeach
        </tbody>
        <thead>
        <tr>
            <th class="hidden lg:table-cell">Date</th>
            <th class="w-full">Location</th>
            <th class="hidden sm:table-cell">Google Maps Link</th>
            <th class="hidden lg:table-cell">Description</th>
            <th class="">Daniel</th>
            <th class="">Kellan</th>
            <th class="">Expense</th>
            <th></th>
        </tr>
    </table>
</div>
