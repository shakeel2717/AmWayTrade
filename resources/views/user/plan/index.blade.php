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
            <div class="col-md-6">
                <div class="intro-y box d-flex flex-column flex-lg-row mt-5">
                    <div class="intro-y flex-1 px-5 py-16">
                        <i data-feather="credit-card" class="d-block w-12 h-12 text-theme-1 dark-text-theme-10 mx-auto"></i>
                        <div class="fs-3xl fw-medium text-center mt-10 text-uppercase">{{ $plan->name }} Plan</div>
                        <div class="fs-xl fw-medium text-center mt-10 text-uppercase">Daily Profit: {{ $plan->profit_from }}%
                            - {{ $plan->profit_to }}%</div>
                        <div class="fs-xl fw-medium text-center mt-2 text-uppercase">Instant Withdrawal</div>
                        <div class="d-flex justify-content-center">
                            <div class="position-relative fs-5xl fw-semibold mt-8 mx-auto"> <span
                                    class="position-absolute fs-2xl top-0 start-0 text-gray-600 ms-n4">{{ env('APP_CURRENCY') }}
                                </span> {{ number_format($plan->price_from, 2) }} - <span
                                    class="position-absolute fs-2xl top-0 start-0 text-gray-600 ms-n4">{{ env('APP_CURRENCY') }}
                                </span> {{ number_format($plan->price_to, 2) }} </div>
                        </div>
                        <div class="text-center">
                            <a href="{{ route('user.plans.show', ['plan' => $plan->id]) }}"
                                class="btn btn-primary btn-lg mx-auto mt-8">PURCHASE NOW</a>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <h2>NO Plan Available to Activate</h2>
        @endforelse
    </div>
@endsection
