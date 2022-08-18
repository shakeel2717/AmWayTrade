@extends('layouts.dashboard')
@section('title', 'Plans')
@section('content')
<!-- END: Top Bar -->
<div class="intro-y d-flex align-items-center mt-8">
    <h2 class="fs-lg fw-medium me-auto">
        Select your desired Plan to activate
    </h2>
</div>
<!-- BEGIN: Pricing Layout -->
<div class="row">
    @forelse ($plans as $plan)
    <div class="col-md-3">
        <div class="intro-y box d-flex flex-column flex-lg-row mt-5">
            <div class="intro-y flex-1 px-5 py-16">
                <div class="my-4 mx-auto text-center d-flex justify-content-center">
                    <img src="{{ asset('assets/icons/'.$loop->iteration) }}.png" alt="Package" width="150">
                </div>
                <div class="text-center">
                    <p>Min Withdraw: ${{ options("min withdraw") }}</p>
                    <p>Instant Deposit</p>
                    <p>Direct Commission ${{ options("direct") }}</p>
                    <p>Instant Withdrawal</p>
                </div>
                <div class="d-flex justify-content-center">
                    <div class="position-relative fs-2xl fw-semibold mt-8 mx-auto"> <span class="position-absolute fs-2xl top-0 start-0 text-gray-600 ms-n4">{{ env('APP_CURRENCY') }}
                        </span> {{ number_format($plan->price_from, 2) }} - <span class="position-absolute fs-2xl top-0 start-0 text-gray-600 ms-n4">{{ env('APP_CURRENCY') }}
                        </span> {{ number_format($plan->price_to, 2) }} </div>
                </div>
                <div class="text-center">
                    <a href="{{ route('user.plans.show', ['plan' => $plan->id]) }}" class="btn btn-primary btn-lg mx-auto mt-8">PURCHASE NOW</a>
                </div>
            </div>
        </div>
    </div>
    @empty
    <h2>NO Plan Available to Activate</h2>
    @endforelse
</div>
@endsection