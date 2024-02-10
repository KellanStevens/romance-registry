<div class="p-12 dark:bg-gray-800">
    <h1 class="dark:text-white text-black">{{ $title }}</h1>
    <form wire:submit.prevent="submit">
        <br>

        @foreach(['food', 'setting', 'price'] as $ratingName)
            <div class="mb-4">
                <label for="{{ $ratingName }}Rating" class="block text-sm font-medium">{{ ucfirst($ratingName) }} Rating:</label>
                <div class="rating rating-lg">
                    @for($i = 1; $i <= 5; $i++)
                        <input type="radio" name="{{ $ratingName }}Rating" id="{{ $ratingName }}Rating" class="mask mask-star" wire:model="{{ $ratingName }}Rating" value="{{ $i }}" @if($i == ${$ratingName.'Rating'}) checked @endif />
                    @endfor
                </div>
            </div>
        @endforeach

        <div class="mb-4">
            <label for="comments" class="block text-sm font-medium">Comment:</label>
            <textarea wire:model.lazy="comments" id="comments" name="comments" rows="3" class="textarea textarea-bordered h-24 w-full max-w-xs"></textarea>
        </div>
{{--         show all errors--}}
        @if ($errors->any())
            <div class="alert alert-error">
                <div class="flex-1">
                    @foreach ($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            </div>
            <br>
        @endif
        <div class="flex items-center justify-left">
            <button type="submit" class="lg:w-auto lg px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700 focus:outline-none focus:shadow-outline-indigo active:bg-indigo-800">Save</button>
        </div>
        @if ($rating)
            <br/>
            <div class="flex-1">
                <button type="button" class="btn btn-outline btn-xs btn-warning" wire:click="delete">Delete</button>
            </div>
        @endif
    </form>

    <div wire:offline>
        <div role="alert" class="alert alert-error">
            <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
            <span>You are currently offline.</span>
        </div>
    </div>
</div>
