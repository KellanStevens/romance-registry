<!-- resources/views/livewire/date-selector.blade.php -->

<div>
    <label for="selectedDateId" class="dark:bg-gray-800 dark:text-white block text-sm font-medium text-gray-700">Select Date to Rate:</label>
    <select class="select select-bordered w-full max-w-xs" wire:model="selectedDateId" id="selectedDateId" name="selectedDateId" class="mt-1 p-2 border border-gray-300 rounded-md w-full">
        <option value="">Select a Date</option>
        @foreach($dates as $date)
            <option value="{{ $date->id }}">{{ $date->date }}</option>
        @endforeach
    </select>
    <button wire:click="dateSelected">Select Date</button> <!-- Add a button to trigger the dateSelected method -->
</div>
