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
                    {{ $DateNight->location }}
                </td>
                <td class="px-6 py-4 hidden sm:table-cell">{{ $DateNight->google_maps_link }}</td>
                <td class="px-6 py-4 hidden lg:table-cell">{{ $DateNight->description }}</td>
                <td class="px-6 py-4">
                    @if($DateNight->ratings->where('user_id', 2)->first() != null)
                        <div class="tooltip" data-tip="{{ $DateNight->ratings->where('user_id', 2)->first()->comments }}">
                            Food:    {{ optional($DateNight->ratings->where('user_id', 2)->first())->food_rating }}
                            Setting: {{ optional($DateNight->ratings->where('user_id', 2)->first())->setting_rating }}
                            Price:   {{ optional($DateNight->ratings->where('user_id', 2)->first())->price_rating }}
                        </div>
                    @elseif (Auth::id() != 2)
                        <div class="tooltip" data-tip="Daniel needs to add a rating">
                            <button class="btn btn-sm btn-disabled"> Add a rating</button>
                        </div>
                    @else
                        <button wire:click="$dispatch('openModal', { component: 'create-rating', arguments: { dateNightId: {{ $DateNight->id }}, title: 'Add Rating' }})" class="btn btn-sm">Add Rating</button>
                    @endif
                </td>
                <td class="px-6 py-4">
                    @if($DateNight->ratings->where('user_id', 1)->first() != null)
                        <div class="tooltip" data-tip="{{ $DateNight->ratings->where('user_id', 1)->first()->comments }}">
                            Food:    {{ optional($DateNight->ratings->where('user_id', 1)->first())->food_rating }}
                            Setting: {{ optional($DateNight->ratings->where('user_id', 1)->first())->setting_rating }}
                            Price:   {{ optional($DateNight->ratings->where('user_id', 1)->first())->price_rating }}
                        </div>
                    @elseif (Auth::id() != 1)
                        <div class="tooltip" data-tip="Kellan needs to add a rating">
                            <button class="btn btn-sm btn-disabled"> Add a rating</button>
                        </div>
                    @else
                        <button wire:click="$dispatch('openModal', { component: 'create-rating', arguments: { dateNightId: {{ $DateNight->id }}, title: 'Add Rating' }})" class="btn btn-sm">Add Rating</button>
                    @endif
                </td>
                <td class="px-6 py-4">
                    @if(!isset($DateNight->expenses->first()->amount))
                        <button wire:click="$dispatch('openModal', { component: 'create-expense', arguments: { dateNightId: {{ $DateNight->id }}, title: 'Add Expense' }})" class="btn btn-sm">Add Expense</button>
                    @endif
                    {{ optional($DateNight->expenses->first())->amount }}
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
            <th class="w-full">Location</th>
            <th class="hidden sm:table-cell">Google Maps Link</th>
            <th class="hidden lg:table-cell">Description</th>
            <th class="">Daniel</th>
            <th class="">Kellan</th>
            <th class="">Expense</th>
            <th></th>
        </tr>
        </thead>
    </table>
</div>
