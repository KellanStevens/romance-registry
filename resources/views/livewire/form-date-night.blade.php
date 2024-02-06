<div class="p-12 dark:bg-gray-800">
    <h1 class="dark:text-white text-black">{{ $title }}</h1>
    <br>
    <form wire:submit.prevent="storeOrUpdate">
        <label class="form-control w-full max-w-xs">
            <div class="label">
                <span class="label-text">Date</span>
            </div>
            <input wire:model.lazy="date" id="date" class="input input-bordered w-full max-w-xs" type="date" required>
        </label>
        <label class="form-control w-full max-w-xs">
            <div class="label">
                <span class="label-text">Location</span>
            </div>
            <input wire:model.lazy="location" id="location" type="text" placeholder="Location" class="input input-bordered w-full max-w-xs" required>
        </label>
        <label class="form-control w-full max-w-xs">
            <div class="label">
                <span class="label-text">Google Maps Link</span>
            </div>
            <input wire:model.lazy="google_maps_link" id="google_maps_link" type="url" placeholder="https://maps.app.goo.gl/XXXXXX" class="input input-bordered w-full max-w-xs">
        </label>
        <br>
        <label class="form-control">
            <div class="label">
                <span class="label-text">Description</span>
            </div>
            <textarea wire:model.lazy="description" id="description" class="textarea textarea-bordered h-24 w-full max-w-xs" placeholder="Description"></textarea>
        </label>
        <br>
        <button class="lg:w-auto lg px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700 focus:outline-none focus:shadow-outline-indigo active:bg-indigo-800" type="submit">Save</button>
    </form>
    @if (session()->has('message'))
        <div>{{ session('message') }}</div>
    @endif
</div>
