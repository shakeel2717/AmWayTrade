@extends('layouts.dashboard')
@section('title', 'Plans')
@section('content')
    <!-- END: Top Bar -->
    <div class="intro-y d-flex align-items-center mt-8">
        <h2 class="fs-lg fw-medium me-auto">
            Confirmation for the Plan Activation of <span class="text-theme-1 fw-bold">{{ $plan->name }} Plan</span>
        </h2>
    </div>
    <div class="row gap-y-6 mt-5">
        <div class="intro-y col-md-8 mx-auto">
            <div class="intro-y box">
                <div
                    class="d-flex flex-column flex-sm-row align-items-center p-5 border-bottom border-gray-200 dark-border-dark-5">
                    <h2 class="fw-medium fs-base me-auto">
                        {{ $plan->name }} Plan Activation
                    </h2>
                </div>
                <div id="vertical-bar-chart" class="p-5">
                    <img src="{{ asset('assets/icons/tasks.png') }}" alt="" class="mx-auto my-2">
                    <br>
                    <div class="row">
                        <div class="col-md-8 mx-auto">
                            <div class="card border border-theme-1">
                                <div class="card-body">
                                    <form action="{{ route('user.plans.update',['plan' => $plan->id]) }}" method="POST">
                                        @csrf
                                        @method("PATCH")
                                        <h3 class="fs-xl text-theme-1">Available Balance: <span class="fw-bold">{{ env('APP_CURRENCY') }}{{ number_format(balance(auth()->user()->id),2) }}</span></h3>
                                        <x-input name="amount" placeholder="Amount to Invest" />
                                        <div class="mt-5">
                                            <button type="submit" class="btn btn-primary btn-lg">Activate {{ $plan->name }} Plan</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
