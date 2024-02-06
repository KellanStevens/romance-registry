<!-- resources/views/livewire/list-date-night.blade.php -->

<div class="overflow-x-auto">
    <button wire:click="$dispatch('openModal', { component: 'form-date-night' })" class="btn btn-sm float-right">Add Date night</button>
<br>
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
                    <a href="{{ $DateNight->google_maps_link }}" target="_blank">{{ $DateNight->location }} </a>
                </td>
                <td class="px-6 py-4 hidden lg:table-cell">{{ $DateNight->description }}</td>
                @foreach([1, 2] as $userId)
                    <td class="px-6 py-4 hidden lg:table-cell">
                        @php
                            $userRating = $DateNight->ratings->where('user_id', $userId)->first();
                        @endphp
                        @if($userRating)
                            <div class="tooltip" data-tip="{{ $userRating->comments }}">
                                <div class="flex justify-start">Food: {{ $userRating->food_rating }}</div>
                                <div class="flex justify-start">Setting: {{ $userRating->setting_rating }}</div>
                                <div class="flex justify-start">Price: {{ $userRating->price_rating }}</div>
                            </div>
                        @elseif (Auth::id() != $userId)
                            <div class="tooltip" data-tip="{{ $userId === 1 ? 'Kellan' : 'Daniel' }} needs to add a rating">
                                <button class="btn btn-sm btn-disabled">Add a rating</button>
                            </div>
                        @else
                            <button wire:click="$dispatch('openModal', { component: 'form-rating', arguments: { dateNightId: {{ $DateNight->id }}, title: 'Add Rating' }})" class="btn btn-sm">Add Rating</button>
                        @endif
                    </td>
                @endforeach
                <td class="px-6 py-4 lg:hidden table-cell">
                    @php
                        $kellanRating = $DateNight->ratings->where('user_id', 1)->first();
                        $danielRating = $DateNight->ratings->where('user_id', 2)->first();
                        $authId = Auth::id();
                    @endphp

                    @if($kellanRating)
                        <div class="tooltip" data-tip="{{ $kellanRating->comments }}">
                            Kellan: {{ round(($kellanRating->food_rating + $kellanRating->setting_rating + $kellanRating->price_rating) / 3, 2) }}
                        </div>
                    @elseif ($authId != 1)
                        <div class="tooltip" data-tip="Kellan needs to add a rating">
                            <button class="btn btn-xs btn-disabled">Add</button>
                        </div>
                    @else
                        <button wire:click="$dispatch('openModal', { component: 'create-rating', arguments: { dateNightId: {{ $DateNight->id }}, title: 'Add Rating' }})" class="btn btn-xs">Add</button>
                    @endif

                    @if($danielRating)
                        <div class="tooltip" data-tip="{{ $danielRating->comments }}">
                            Daniel: {{ round(($danielRating->food_rating + $danielRating->setting_rating + $danielRating->price_rating) / 3, 2) }}
                        </div>
                    @elseif ($authId != 2)
                        <div class="tooltip" data-tip="Daniel needs to add a rating">
                            <button class="btn btn-xs btn-disabled">Add</button>
                        </div>
                    @else
                        <button wire:click="$dispatch('openModal', { component: 'create-rating', arguments: { dateNightId: {{ $DateNight->id }}, title: 'Add Rating' }})" class="btn btn-xs">Add</button>
                    @endif
                </td>
                <td class="px-6 py-4">
                    @if(!isset($DateNight->expenses->first()->amount))
                        <button wire:click="$dispatch('openModal', { component: 'form-expense', arguments: { dateNightId: {{ $DateNight->id }} }})" class="btn btn-sm">Add</button>
                    @else
                        <button wire:click="$dispatch('openModal', { component: 'form-expense', arguments: { dateNightId: {{ $DateNight->id }} }})" class="btn btn-link">{{ $DateNight->expenses->first()->amount }}</button>
                    @endif
                </td>
                <td>
                    <button wire:click="$dispatch('openModal', { component: 'form-date-night', arguments: { dateNightId: {{ $DateNight->id }} }})" class="btn btn-sm">Edit</button>
                </td>
            </tr>
        @endforeach
        </tbody>
        <thead>
        <tr>
            <th class="hidden lg:table-cell">Date</th>
            <th class="">Location</th>
            <th class="hidden lg:table-cell">Description</th>
            <th class="hidden lg:table-cell">Kellan</th>
            <th class="hidden lg:table-cell">Daniel</th>
            <th class="lg:hidden table-cell">Ratings</th>
            <th class="">Expense</th>
            <th></th>
        </tr>
        </thead>
    </table>
</div>
