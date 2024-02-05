<div>
    @if(count($this->dateNightsData) <= 0)
        <div class="alert alert-error">
            <div class="flex-1">
                <label class="label">
                    <span class="label-text
                    dark:text-white">No date night Found</span>
                </label>
            </div>
        </div>
    @else
    <form wire:submit.prevent="store">
        <div>
            <label for="selectedDateId" class="lg:w-auto dark:bg-gray-800 dark:text-white block text-sm font-medium text-gray-700">Select Date to Rate:</label>
            <select wire:model="dateNightId" class="select select-bordered w-full max-w-xs" id="dateId" name="dateId" class="mt-1 p-2 border border-gray-300 rounded-md w-full">
                <option selected value="">Select a Date</option>
                @foreach($this->dateNightsData as $dateNight)
                    <option value="{{ $dateNight->id }}">{{ $dateNight->date }} [{{ $dateNight->location }}]</option>
                @endforeach
            </select>
        </div>

        <label class="form-control w-full max-w-xs">
            <div class="label">
                <span class="label-text">Amount</span>
            </div>
            <input wire:model.live="amount" id="amount" type="number" placeholder="Amount" class="input input-bordered w-full max-w-xs" required/>
        </label>
        <br>

        <div class="flex items-center justify-left">
            <button type="submit" class="lg:w-auto lg px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700 focus:outline-none focus:shadow-outline-indigo active:bg-indigo-800">Submit Expense</button>
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
    @endif

</div>