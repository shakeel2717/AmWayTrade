@extends('layouts.dashboard')
@section('title', 'Dashboard')
@section('content')
<div class="row">
    <div class="intro-y col-md-3">
        <div class="box p-5 zoom-in">
            <div class="d-flex align-items-center">
                <div class="w-2/4 flex-none">
                    <div class="fs-lg fw-medium truncate">
                        {{ env('APP_CURRENCY') }}{{ number_format(balance(auth()->user()->id), 2) }}
                    </div>
                    <div class="text-gray-600 lead mt-1">Available Balance</div>
                </div>
                <div class="flex-none ms-auto position-relative">
                    <img src="{{ asset('assets/icons/graph.png') }}" alt="Balance">
                </div>
            </div>
        </div>
    </div>
    <div class="intro-y col-md-3">
        <div class="box p-5 zoom-in">
            <div class="d-flex align-items-center">
                <div class="w-2/4 flex-none">
                    <div class="fs-lg fw-medium truncate">
                        {{ env('APP_CURRENCY') }}{{ number_format(totalInvest(auth()->user()->id), 2) }}
                    </div>
                    <div class="text-gray-600 lead mt-1">Total Investment</div>
                </div>
                <div class="flex-none ms-auto position-relative">
                    <img src="{{ asset('assets/icons/tasks.png') }}" alt="Balance">
                </div>
            </div>
        </div>
    </div>
    <div class="intro-y col-md-3">
        <div class="box p-5 zoom-in">
            <div class="d-flex align-items-center">
                <div class="w-2/4 flex-none">
                    <div class="fs-lg fw-medium truncate">
                        {{ env('APP_CURRENCY') }}{{ number_format(totalPayout(auth()->user()->id), 2) }}
                    </div>
                    <div class="text-gray-600 lead mt-1">Total Payout</div>
                </div>
                <div class="flex-none ms-auto position-relative">
                    <img src="{{ asset('assets/icons/directory.png') }}" alt="Balance">
                </div>
            </div>
        </div>
    </div>
    <div class="intro-y col-md-3">
        <div class="box p-5 zoom-in">
            <div class="d-flex align-items-center">
                <div class="w-2/4 flex-none">
                    <div class="fs-lg fw-medium truncate">
                        {{ allRefers(auth()->user()->id)->count() }}
                    </div>
                    <div class="text-gray-600 lead mt-1">My Downline Team</div>
                </div>
                <div class="flex-none ms-auto position-relative">
                    <img src="{{ asset('assets/icons/hierarchy.png') }}" alt="Balance">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
