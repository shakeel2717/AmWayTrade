@extends('layouts.dashboard')
@section('title', 'Dashboard')
@section('content')
<div class="row">
    <div class="intro-y col-md-3">
        <div class="box p-5 zoom-in mt-4">
            <div class="d-flex align-items-center">
                <div class="w-2/4 flex-none">
                    <div class="fs-lg fw-medium truncate">
                        {{ $users->count() }}
                    </div>
                    <div class="text-gray-600 lead mt-1">Total Users</div>
                </div>
                <div class="flex-none ms-auto position-relative">
                    <img src="{{ asset('assets/icons/graph.png') }}" alt="Balance">
                </div>
            </div>
        </div>
    </div>
    <div class="intro-y col-md-3">
        <div class="box p-5 zoom-in mt-4">
            <div class="d-flex align-items-center">
                <div class="w-2/4 flex-none">
                    <div class="fs-lg fw-medium truncate">
                        {{ $users->where('status', false)->count() }}
                    </div>
                    <div class="text-gray-600 lead mt-1">Pending Users</div>
                </div>
                <div class="flex-none ms-auto position-relative">
                    <img src="{{ asset('assets/icons/graph.png') }}" alt="Balance">
                </div>
            </div>
        </div>
    </div>
    <div class="intro-y col-md-3">
        <div class="box p-5 zoom-in mt-4">
            <div class="d-flex align-items-center">
                <div class="w-2/4 flex-none">
                    <div class="fs-lg fw-medium truncate">
                        {{ $users->where('status', true)->count() }}
                    </div>
                    <div class="text-gray-600 lead mt-1">Active Users</div>
                </div>
                <div class="flex-none ms-auto position-relative">
                    <img src="{{ asset('assets/icons/graph.png') }}" alt="Balance">
                </div>
            </div>
        </div>
    </div>
    <div class="intro-y col-md-3">
        <div class="box p-5 zoom-in mt-4">
            <div class="d-flex align-items-center">
                <div class="w-2/4 flex-none">
                    <div class="fs-lg fw-medium truncate">
                        {{ $users->where('suspend', true)->count() }}
                    </div>
                    <div class="text-gray-600 lead mt-1">Suspended Users</div>
                </div>
                <div class="flex-none ms-auto position-relative">
                    <img src="{{ asset('assets/icons/graph.png') }}" alt="Balance">
                </div>
            </div>
        </div>
    </div>
    <div class="intro-y col-md-3">
        <div class="box p-5 zoom-in mt-4">
            <div class="d-flex align-items-center">
                <div class="w-2/4 flex-none">
                    <div class="fs-lg fw-medium truncate">
                        ${{ number_format($userPlans->sum("amount"),2) }}
                    </div>
                    <div class="text-gray-600 lead mt-1">Total Investment</div>
                </div>
                <div class="flex-none ms-auto position-relative">
                    <img src="{{ asset('assets/icons/graph.png') }}" alt="Balance">
                </div>
            </div>
        </div>
    </div>
    <div class="intro-y col-md-3">
        <div class="box p-5 zoom-in mt-4">
            <div class="d-flex align-items-center">
                <div class="w-2/4 flex-none">
                    <div class="fs-lg fw-medium truncate">
                        ${{ number_format($userPlans->where('status',false)->sum("amount"),2) }}
                    </div>
                    <div class="text-gray-600 lead mt-1">Pending Investment</div>
                </div>
                <div class="flex-none ms-auto position-relative">
                    <img src="{{ asset('assets/icons/graph.png') }}" alt="Balance">
                </div>
            </div>
        </div>
    </div>
    <div class="intro-y col-md-3">
        <div class="box p-5 zoom-in mt-4">
            <div class="d-flex align-items-center">
                <div class="w-2/4 flex-none">
                    <div class="fs-lg fw-medium truncate">
                        ${{ number_format($userPlans->where('status',true)->sum("amount"),2) }}
                    </div>
                    <div class="text-gray-600 lead mt-1">Active Investment</div>
                </div>
                <div class="flex-none ms-auto position-relative">
                    <img src="{{ asset('assets/icons/graph.png') }}" alt="Balance">
                </div>
            </div>
        </div>
    </div>
    <div class="intro-y col-md-3">
        <div class="box p-5 zoom-in mt-4">
            <div class="d-flex align-items-center">
                <div class="w-2/4 flex-none">
                    <div class="fs-lg fw-medium truncate">
                        ${{ number_format($userPlans->where('expire',true)->sum("amount"),2) }}
                    </div>
                    <div class="text-gray-600 lead mt-1">Expired Investment</div>
                </div>
                <div class="flex-none ms-auto position-relative">
                    <img src="{{ asset('assets/icons/graph.png') }}" alt="Balance">
                </div>
            </div>
        </div>
    </div>
    <div class="intro-y col-md-3">
        <div class="box p-5 zoom-in mt-4">
            <div class="d-flex align-items-center">
                <div class="w-2/4 flex-none">
                    <div class="fs-lg fw-medium truncate">
                        ${{ number_format($transactions->where('type','withdraw')->sum("amount"),2) }}
                    </div>
                    <div class="text-gray-600 lead mt-1">Total Withdrawals</div>
                </div>
                <div class="flex-none ms-auto position-relative">
                    <img src="{{ asset('assets/icons/graph.png') }}" alt="Balance">
                </div>
            </div>
        </div>
    </div>
    <div class="intro-y col-md-3">
        <div class="box p-5 zoom-in mt-4">
            <div class="d-flex align-items-center">
                <div class="w-2/4 flex-none">
                    <div class="fs-lg fw-medium truncate">
                        ${{ number_format($transactions->where('type','withdraw')->where('status',false)->sum("amount"),2) }}
                    </div>
                    <div class="text-gray-600 lead mt-1">Pending Withdrawals</div>
                </div>
                <div class="flex-none ms-auto position-relative">
                    <img src="{{ asset('assets/icons/graph.png') }}" alt="Balance">
                </div>
            </div>
        </div>
    </div>
    <div class="intro-y col-md-3">
        <div class="box p-5 zoom-in mt-4">
            <div class="d-flex align-items-center">
                <div class="w-2/4 flex-none">
                    <div class="fs-lg fw-medium truncate">
                        ${{ number_format($transactions->where('type','withdraw')->where('status',true)->sum("amount"),2) }}
                    </div>
                    <div class="text-gray-600 lead mt-1">Approved Withdraw</div>
                </div>
                <div class="flex-none ms-auto position-relative">
                    <img src="{{ asset('assets/icons/graph.png') }}" alt="Balance">
                </div>
            </div>
        </div>
    </div>
    <div class="intro-y col-md-3">
        <div class="box p-5 zoom-in mt-4">
            <div class="d-flex align-items-center">
                <div class="w-2/4 flex-none">
                    <div class="fs-lg fw-medium truncate">
                        ${{ number_format($transactions->where('type','withdrawals fees')->where('status',true)->sum("amount"),2) }}
                    </div>
                    <div class="text-gray-600 lead mt-1">Withdrawal Fees</div>
                </div>
                <div class="flex-none ms-auto position-relative">
                    <img src="{{ asset('assets/icons/graph.png') }}" alt="Balance">
                </div>
            </div>
        </div>
    </div>
    <div class="intro-y col-md-3">
        <div class="box p-5 zoom-in mt-4">
            <div class="d-flex align-items-center">
                <div class="w-2/4 flex-none">
                    <div class="fs-lg fw-medium truncate">
                        ${{ number_format($transactions->where('type','deposit')->sum("amount"),2) }}
                    </div>
                    <div class="text-gray-600 lead mt-1">Total Deposit</div>
                </div>
                <div class="flex-none ms-auto position-relative">
                    <img src="{{ asset('assets/icons/graph.png') }}" alt="Balance">
                </div>
            </div>
        </div>
    </div>
    <div class="intro-y col-md-3">
        <div class="box p-5 zoom-in mt-4">
            <div class="d-flex align-items-center">
                <div class="w-2/4 flex-none">
                    <div class="fs-lg fw-medium truncate">
                        ${{ number_format($transactions->where('type','deposit')->where('status',false)->sum("amount"),2) }}
                    </div>
                    <div class="text-gray-600 lead mt-1">Pending Deposit</div>
                </div>
                <div class="flex-none ms-auto position-relative">
                    <img src="{{ asset('assets/icons/graph.png') }}" alt="Balance">
                </div>
            </div>
        </div>
    </div>
    <div class="intro-y col-md-3">
        <div class="box p-5 zoom-in mt-4">
            <div class="d-flex align-items-center">
                <div class="w-2/4 flex-none">
                    <div class="fs-lg fw-medium truncate">
                        ${{ number_format($transactions->where('type','deposit')->where('status',true)->sum("amount"),2) }}
                    </div>
                    <div class="text-gray-600 lead mt-1">Active Deposit</div>
                </div>
                <div class="flex-none ms-auto position-relative">
                    <img src="{{ asset('assets/icons/graph.png') }}" alt="Balance">
                </div>
            </div>
        </div>
    </div>
    <div class="intro-y col-md-3">
        <div class="box p-5 zoom-in mt-4">
            <div class="d-flex align-items-center">
                <div class="w-2/4 flex-none">
                    <div class="fs-lg fw-medium truncate">
                        ${{ number_format($transactions->where('type','deposit')->where('status',true)->where('reference','coinPayment')->sum("amount"),2) }}
                    </div>
                    <div class="text-theme-1 lead mt-1">CoinPayment Deposit</div>
                </div>
                <div class="flex-none ms-auto position-relative">
                    <img src="{{ asset('assets/icons/graph.png') }}" alt="Balance">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
