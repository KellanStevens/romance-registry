<div class="p-12 dark:bg-gray-800">
    <h1 class="dark:text-white text-black">{{ $title }}</h1>
    <form wire:submit.prevent="store">
        <br>
        <label class="form-control w-full max-w-xs">
            <div class="label">
                <span class="label-text">Amount</span>
            </div>
            <input wire:model.live="amount" inputmode="numeric" id="amount" type="number" placeholder="Amount" class="input input-bordered w-full max-w-xs" required/>
        </label>
        <br>
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
