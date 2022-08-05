@extends('layouts.dashboard')
@section('title', 'Withdraw Funds')
@section('content')
    <div class="row mt-5">
        <div class="intro-y col-md-8 mx-auto">
            <div class="intro-y box">
                <div
                    class="d-flex flex-column flex-sm-row align-items-center p-5 border-bottom border-gray-200 dark-border-dark-5">
                    <h2 class="fw-medium fs-base me-auto">
                        @yield('title')
                    </h2>
                </div>
                <div class="card-body">
                    <div class="text-center mb-4">
                        <img src="{{ asset('assets/icons/withdraw.png') }}" alt="Withdarw" class="img-fluid">
                    </div>
                    @livewire('user.withdraw-card')
                </div>
            </div>
        </div>
    </div>
@endsection
