<!-- resources/views/livewire/create-date.blade.php -->

<div>
    <form wire:submit.prevent="saveDate">
        <label for="date">Date:</label>
        <input type="date" wire:model="date" id="date" required>

        <label for="location">Location:</label>
        <input type="text" wire:model="location" id="location" required>

        <label for="googleMapsLink">Google Maps Link:</label>
        <input type="url" wire:model="googleMapsLink" id="googleMapsLink">

        <label for="description">Description:</label>
        <textarea wire:model="description" id="description"></textarea>

        <button type="submit">Save Date</button>
    </form>
    @if (session()->has('message'))
        <div>{{ session('message') }}</div>
    @endif
</div>
