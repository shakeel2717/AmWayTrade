<div class="row">
    <div class="col-md-6 border-end">
        <div>
            <label>Select Payment Currency</label>
            <div class="mt-2">
                <select class="form-control w-full" wire:model="coin" name="coin"
                    data-placeholder="Select your Currency">
                    <option>Select Your Currency</option>
                    @forelse ($currencies as $currency)
                        <option value="{{ $currency->id }}">{{ $currency->name }}</option>
                    @empty
                        <option value="">No Address Found</option>
                    @endforelse
                </select>
            </div>
        </div>
        @if ($icon != '')
            <div class="mt-5">
                <img src="{{ asset('assets/icons/' . $icon . '.svg') }}" alt="Icon" class="w-12">
                <div class="mt-3">
                    <h2 class="fs-lg">Currency Name: <span class="fw-bold text-theme-1">{{ $coin }}</span></h2>
                    <h2 class="fs-lg">Status: <span class="text-theme-1">Active</span></h2>
                </div>
            </div>
        @endif

    </div>
    <div class="col-md-6">
        @if ($icon != '')
            <div class="d-flex justify-content-center align-items-center">
                <div class="code">
                    <p class="">Only Send <span class="fw-bold">{{ $coin }}</span> to this Address, Otherwise your Asset will be lost.</p>
                    <img src="https://chart.googleapis.com/chart?chs=150x150&cht=qr&chl={{ $qr }}&choe=UTF-8"
                        alt="QR Address" class="img-fluid mx-auto" width="250">
                </div>
            </div>
        @endif
    </div>
</div>
