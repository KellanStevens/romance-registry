<div>
    <form wire:submit.prevent="submitRating">
        <div>
            <label for="selectedDateId" class="lg:w-auto dark:bg-gray-800 dark:text-white block text-sm font-medium text-gray-700">Select Date to Rate:</label>
            <select wire:model="dateId" class="select select-bordered w-full max-w-xs" id="dateId" name="dateId" class="mt-1 p-2 border border-gray-300 rounded-md w-full">
                <option disabled selected value="">Select a Date</option>
                @foreach($dates as $date)
                    <option value="{{ $date->id }}">{{ $date->date }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-4">
            <label for="priceRating" class="block text-sm font-medium text-gray-700">Price Rating:</label>
            <div class="rating rating-lg" wire:model="priceRating">
                <input type="radio" name="priceRating" class="mask mask-star" wire:model="priceRating" value="1" />
                <input type="radio" name="priceRating" class="mask mask-star" wire:model="priceRating" value="2" />
                <input type="radio" name="priceRating" class="mask mask-star" wire:model="priceRating" value="3" />
                <input type="radio" name="priceRating" class="mask mask-star" wire:model="priceRating" value="4" />
                <input type="radio" name="priceRating" class="mask mask-star" wire:model="priceRating" value="5" />
            </div>
        </div>

        <div class="mb-4">
            <label for="settingRating" class="block text-sm font-medium text-gray-700">Setting Rating:</label>
            <div class="rating rating-lg" wire:model="settingRating">
                <input type="radio" name="settingRating" class="mask mask-star" wire:model="settingRating" value="1" />
                <input type="radio" name="settingRating" class="mask mask-star" wire:model="settingRating" value="2" />
                <input type="radio" name="settingRating" class="mask mask-star" wire:model="settingRating" value="3" />
                <input type="radio" name="settingRating" class="mask mask-star" wire:model="settingRating" value="4" />
                <input type="radio" name="settingRating" class="mask mask-star" wire:model="settingRating" value="5" />
            </div>
        </div>

        <div class="mb-4">
            <label for="foodRating" class="block text-sm font-medium text-gray-700">Food Rating:</label>
            <div class="rating rating-lg" wire:model="foodRating">
                <input type="radio" name="foodRating" class="mask mask-star" wire:model="foodRating" value="1" />
                <input type="radio" name="foodRating" class="mask mask-star" wire:model="foodRating" value="2" />
                <input type="radio" name="foodRating" class="mask mask-star" wire:model="foodRating" value="3" />
                <input type="radio" name="foodRating" class="mask mask-star" wire:model="foodRating" value="4" />
                <input type="radio" name="foodRating" class="mask mask-star" wire:model="foodRating" value="5" />
            </div>
        </div>

        <div class="mb-4">
            <label for="comments" class="block text-sm font-medium text-gray-700">Comments:</label>
            <textarea wire:model="comment" id="comments" name="comments" rows="3" class="lg:w-auto textarea textarea-bordered mt-1 p-2 border border-gray-300 rounded-md w-full"></textarea>
        </div>

        <div class="flex items-center justify-left">
            <button type="submit" class="lg:w-auto lg px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700 focus:outline-none focus:shadow-outline-indigo active:bg-indigo-800">Submit Rating</button>
        </div>
    </form>
    @if (session('message'))
        <div class="mt-4 text-green-500">{{ session('message') }}</div>
    @endif
    <div wire:offline>
        <div role="alert" class="alert alert-error">
            <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
            <span>You are currently offline.</span>
        </div>
    </div>
</div>
