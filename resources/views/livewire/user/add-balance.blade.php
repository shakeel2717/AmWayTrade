<div class="row">
    <div class="col-md-6 border-end">
        <div>
            <label>Select Payment Currency</label>
            <div class="mt-2">
                <select class="form-control w-full" wire:model="coin" name="coin" data-placeholder="Select your Currency" @if ($icon !='' ) disabled @endif>
                    <option>Select Your Currency</option>
                    @forelse ($currencies as $currency)
                    <option value="{{ $currency->id }}">{{ $currency->name }}</option>
                    @empty
                    <option value="">No Address Found</option>
                    @endforelse
                </select>
                @error('coin')
                <div class="mt-1 error text-theme-11">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mt-2">
                <option for="amount">Enter Amount in USD</option>
                <input type="text" wire:model="amount" class="form-control" name="amount" placeholder="Amount" id="amount" @if ($icon !='' ) disabled @endif>
                @error('amount')
                <div class="mt-1 error text-theme-11">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mt-2">
                <button wire:click="createTransaction" class="btn btn-primary">Generate Address</button>
            </div>
            <div class="text-center w-full mt-3" wire:loading>
                <i data-loading-icon="puff" class="w-8 h-8"></i>
            </div>
        </div>
        @if ($icon != '')
        <div class="mt-5">
            <img src="{{ asset('assets/icons/' . $icon . '.svg') }}" alt="Icon" class="w-12">
            <div class="mt-3">
                <h2 class="fs-lg">Currency Name: <span class="fw-bold text-theme-1">{{ $coin }}</span></h2>
                <h2 class="fs-lg">Status: <span class="text-theme-1">Active</span></h2>
                <br>
                <hr>
                <p class="fs-lg mt-3"><span class="text-theme-1"><a href="{{$statusLink}}" target="_blank">Click here </a></span> to check the Payment Status</p>
            </div>
        </div>
        @endif

    </div>
    <div class="col-md-6">
        @if ($icon != '')
        <div class="d-flex justify-content-center align-items-center">
            <div class="code">
                <p class="">Send <span class="fw-bold">{{ number_format($amount,2) }} of {{ $coin }} to the following address</span> Only Send <span class="fw-bold">{{ $coin }}</span> to this Address, Otherwise your Asset will be lost.</p>
                <img src="https://chart.googleapis.com/chart?chs=150x150&cht=qr&chl={{ $qr }}&choe=UTF-8" alt="QR Address" class="img-fluid mx-auto" width="250">
            </div>
        </div>
        <div class="mt-5">
            <div class="form-group text-center">
                <button onclick="copyFunction()">Click to Copy</button>
                <input type="text" name="address" id="link" class="form-control text-center" value="{{ $qr }}">
            </div>
        </div>
        @endif
    </div>
</div>