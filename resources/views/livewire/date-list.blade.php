<!-- resources/views/livewire/date-list.blade.php -->

<div class="overflow-x-auto">
    <table class="table">
        <tbody>
        @foreach($dates as $dateInfo)
            <tr>
                <td class="px-6 py-4 whitespace-nowrap hidden lg:table-cell">
                    {{ $dateInfo->date }}
                </td>
                <td class="px-6 py-4">
                    <dl class="lg:hidden">
                        <dt class="sr-only">Date</dt>
                        <dd class="sm:table-cell text-gray-500"> {{ $dateInfo->date }} </dd>
                    </dl>
                    {{ $dateInfo->location }}
                </td>
                <td class="px-6 py-4 hidden sm:table-cell">{{ $dateInfo->google_maps_link }}</td>
                <td class="px-6 py-4 hidden lg:table-cell">{{ $dateInfo->description }}</td>
                <td class="px-6 py-4">
                    @if($dateInfo->ratings->where('user_id', 2)->first() != null)
                        Food:    {{ optional($dateInfo->ratings->where('user_id', 2)->first())->food_rating }}
                        Setting: {{ optional($dateInfo->ratings->where('user_id', 2)->first())->setting_rating }}
                        Price:   {{ optional($dateInfo->ratings->where('user_id', 2)->first())->price_rating }}
                    @else
                        <button class="btn" href="{{ route('rating') }}" wire:navigate> Add a rating</button>
                    @endif
                </td>
                <td class="px-6 py-4">
                    @if($dateInfo->ratings->where('user_id', 1)->first() != null)
                        Food:    {{ optional($dateInfo->ratings->where('user_id', 1)->first())->food_rating }}
                        Setting: {{ optional($dateInfo->ratings->where('user_id', 1)->first())->setting_rating }}
                        Price:   {{ optional($dateInfo->ratings->where('user_id', 1)->first())->price_rating }}
                    @else
                        <button class="btn" href="{{ route('rating') }}" wire:navigate> Add a rating</button>
                    @endif
                </td>
                <td class="px-6 py-4">
                    {{ optional($dateInfo->expenses->first())->amount }}
                </td>
                @if($dateInfo->ratings->where('user_id', Auth::id()) == null)
                    <td class="px-6 py-4">
                        @livewire('add-rating', ['dateId' => $dateInfo->id])
                    </td>
                @endif
            </tr>
        @endforeach
        </tbody>
        <thead>
        <tr>
            <th class="hidden lg:table-cell">Date</th>
            <th class="">Location</th>
            <th class="hidden sm:table-cell">Google Maps Link</th>
            <th class="hidden lg:table-cell">Description</th>
            <th class="">Daniel</th>
            <th class="">Kellan</th>
            <th class="">Expense</th>
        </tr>
{{--        <tr>--}}
{{--            <th></th>--}}
{{--            <th></th>--}}
{{--            <th></th>--}}
{{--            <th></th>--}}
{{--            <th>Food</th>--}}
{{--            <th>Setting</th>--}}
{{--            <th>Price</th>--}}
{{--            <th>Food</th>--}}
{{--            <th>Setting</th>--}}
{{--            <th>Price</th>--}}
{{--            <th></th>--}}
{{--        </tr>--}}
{{--        </thead>--}}
    </table>
</div>
