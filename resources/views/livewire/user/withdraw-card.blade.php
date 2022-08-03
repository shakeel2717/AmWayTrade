<div>
    <form action="{{ route('user.withdraw.store') }}" method="POST">
        @csrf

        <div>
            <label>Select Payment Currency</label>
            <div class="mt-2">
                <select class="form-control w-full" wire:model="coin" name="coin" data-placeholder="Select your Currency">
                    <option>Select Your Currency</option>
                    @forelse ($currencies as $currency)
                    <option value="{{ $currency->id }}">{{ $currency->name }}</option>
                    @empty
                    <option value="">No Address Found</option>
                    @endforelse
                </select>
            </div>
        </div>
        <x-input name="amount" placeholder="Enter Amount" label="show" />
        <x-input name="address" placeholder="Enter Address" label="show" />
        <div class="mt-5">
            <button type="submit" class="btn btn-primary btn-lg">Submit Withdraw Request</button>
        </div>

    </form>

</div>
