<div>
    <form wire:submit.prevent="submitRating">
        <div class="mb-4">
            <label for="priceRating" class="block text-sm font-medium text-gray-700">Price Rating:</label>
            <input wire:model="priceRating" type="number" id="priceRating" name="priceRating" class="mt-1 p-2 border border-gray-300 rounded-md w-full">
        </div>

        <div class="mb-4">
            <label for="settingRating" class="block text-sm font-medium text-gray-700">Setting Rating:</label>
            <input wire:model="settingRating" type="number" id="settingRating" name="settingRating" class="mt-1 p-2 border border-gray-300 rounded-md w-full">
        </div>

        <div class="mb-4">
            <label for="foodRating" class="block text-sm font-medium text-gray-700">Food Rating:</label>
            <input wire:model="foodRating" type="number" id="foodRating" name="foodRating" class="mt-1 p-2 border border-gray-300 rounded-md w-full">
        </div>

        <div class="mb-4">
            <label for="comments" class="block text-sm font-medium text-gray-700">Comments:</label>
            <textarea wire:model="comments" id="comments" name="comments" rows="3" class="mt-1 p-2 border border-gray-300 rounded-md w-full"></textarea>
        </div>

        <div class="flex items-center justify-end">
            <button type="submit" class="px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700 focus:outline-none focus:shadow-outline-indigo active:bg-indigo-800">Submit Rating</button>
        </div>
    </form>
    @if (session('message'))
        <div class="mt-4 text-green-500">{{ session('message') }}</div>
    @endif
</div>
