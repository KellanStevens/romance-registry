<!-- resources/views/livewire/date-rating.blade.php -->

<div>
    <label for="food_rating">Food:</label>
    <select wire:model="rating.food_rating" id="food_rating" class="select select-bordered max-w-xs">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
    </select>
    <br>
    <label for="price_rating">Price:</label>
    <select wire:model="rating.price_rating" id="price_rating" class="select select-bordered max-w-xs">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
    </select>
<br>
    <label for="setting_rating">Setting:</label>
    <select wire:model="rating.setting_rating" id="setting_rating" class="select select-bordered max-w-xs">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
    </select>
    <br>
    <button wire:click="addRating" class="btn">Add Rating</button>
</div>
