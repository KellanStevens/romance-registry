<div class="p-12 dark:bg-gray-800">
    <h1 class="text-white">{{ $title }}</h1>
    <form wire:submit="update">
        <label class="form-control w-full max-w-xs">
            <div class="label">
                <span class="label-text">Date</span>
            </div>
        <input wire:model.live="date" id="date" class="input input-bordered w-full max-w-xs" type="date"  value="{{ $date }}" required>
        </label>
        <label class="form-control w-full max-w-xs">
            <div class="label">
                <span class="label-text">Location</span>
            </div>
            <input wire:model.live="location" id="location" type="text" placeholder="Location" class="input input-bordered w-full max-w-xs" value="{{ $location }}" required/>
        </label>
        <label class="form-control w-full max-w-xs">
            <div class="label">
                <span class="label-text">Google Maps Link</span>
            </div>
            <input wire:model.live="googleMapsLink" id="googleMapsLink" type="url" placeholder="https://maps.app.goo.gl/XXXXXX" class="input input-bordered w-full max-w-xs" value="{{ $googleMapsLink }}" required/>
        </label>
        <br>
        <label class="form-control">
            <div class="label">
                <span class="label-text">Description</span>
            </div>
            <textarea wire:model.live="description" id="description" class="textarea textarea-bordered h-24 w-full max-w-xs" placeholder="Description" value="{{ $description }}" required></textarea>
        </label>
        <br>
        <button class="lg:w-auto lg px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700 focus:outline-none focus:shadow-outline-indigo active:bg-indigo-800" type="submit">Save</button>
    </form>
    @if (session()->has('message'))
        <div>{{ session('message') }}</div>
    @endif
</div>
