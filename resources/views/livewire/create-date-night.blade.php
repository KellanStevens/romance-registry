<div class="p-12 dark:bg-gray-800">
    <h1 class="dark:text-white text-black">{{ $title }}</h1>
    <br>
    <form wire:submit="store">
        <label class="form-control w-full max-w-xs">
            <div class="label">
                <span class="label-text">Date</span>
            </div>
        <input wire:model.live="date" id="date" class="input input-bordered w-full max-w-xs" type="date"  value="{{ date('Y-m-d') }}" required>
        </label>
        <label class="form-control w-full max-w-xs">
            <div class="label">
                <span class="label-text">Location</span>
            </div>
            <input wire:model.live="location" id="location" type="text" placeholder="Location" class="input input-bordered w-full max-w-xs" required/>
        </label>
        <label class="form-control w-full max-w-xs">
            <div class="label">
                <span class="label-text">Google Maps Link</span>
            </div>
            <input wire:model.live="googleMapsLink" id="googleMapsLink" type="url" placeholder="https://maps.app.goo.gl/XXXXXX" class="input input-bordered w-full max-w-xs" required/>
        </label>
        <br>
        <label class="form-control">
            <div class="label">
                <span class="label-text">Description</span>
            </div>
            <textarea wire:model.live="description" id="description" class="textarea textarea-bordered h-24 w-full max-w-xs" placeholder="Description" required></textarea>
        </label>
        <br>
        <button class="btn" type="submit">Save</button>
    </form>
    @if (session()->has('message'))
        <div>{{ session('message') }}</div>
    @endif
</div>
