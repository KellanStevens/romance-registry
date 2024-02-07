<div class="p-12 dark:bg-gray-800">
    <h1 class="dark:text-white text-black">{{ $title }}</h1>
    <form wire:submit.prevent="storeOrUpdate">
        <br>
        <div class="mb-4">
            <label for="priceRating" class="block text-sm font-medium">Price Rating:</label>
            <div class="rating rating-lg" wire:model.lazy="price_rating">
                <input type="radio" name="priceRating" id="priceRating" class="mask mask-star" wire:model="priceRating" value="1" />
                <input type="radio" name="priceRating" id="priceRating" class="mask mask-star" wire:model="priceRating" value="2" />
                <input type="radio" name="priceRating" id="priceRating" class="mask mask-star" wire:model="priceRating" value="3" />
                <input type="radio" name="priceRating" id="priceRating" class="mask mask-star" wire:model="priceRating" value="4" />
                <input type="radio" name="priceRating" id="priceRating" class="mask mask-star" wire:model="priceRating" value="5" />
            </div>
        </div>

        <div class="mb-4">
            <label for="settingRating" class="block text-sm font-medium">Setting Rating:</label>
            <div class="rating rating-lg" wire:model.lazy="setting_rating">
                <input type="radio" name="settingRating" id="settingRating" class="mask mask-star" wire:model="settingRating" value="1" />
                <input type="radio" name="settingRating" id="settingRating" class="mask mask-star" wire:model="settingRating" value="2" />
                <input type="radio" name="settingRating" id="settingRating" class="mask mask-star" wire:model="settingRating" value="3" />
                <input type="radio" name="settingRating" id="settingRating" class="mask mask-star" wire:model="settingRating" value="4" />
                <input type="radio" name="settingRating" id="settingRating" class="mask mask-star" wire:model="settingRating" value="5" />
            </div>
        </div>

        <div class="mb-4">
            <label for="foodRating" class="block text-sm font-medium">Food Rating:</label>
            <div class="rating rating-lg" wire:model.lazy="food_rating">
                <input type="radio" name="foodRating" id="foodRating" class="mask mask-star" wire:model="foodRating" value="1" />
                <input type="radio" name="foodRating" id="foodRating" class="mask mask-star" wire:model="foodRating" value="2" />
                <input type="radio" name="foodRating" id="foodRating" class="mask mask-star" wire:model="foodRating" value="3" />
                <input type="radio" name="foodRating" id="foodRating" class="mask mask-star" wire:model="foodRating" value="4" />
                <input type="radio" name="foodRating" id="foodRating" class="mask mask-star" wire:model="foodRating" value="5" />
            </div>
        </div>

        <div class="mb-4">
            <label for="comments" class="block text-sm font-medium">Comment:</label>
            <textarea wire:model.lazy="comment" id="comments" name="comments" rows="3" class="textarea textarea-bordered h-24 w-full max-w-xs"></textarea>
        </div>

        <div class="flex items-center justify-left">
            <button type="submit" class="lg:w-auto lg px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700 focus:outline-none focus:shadow-outline-indigo active:bg-indigo-800">Save</button>
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
