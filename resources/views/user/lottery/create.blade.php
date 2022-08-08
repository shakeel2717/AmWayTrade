@extends('layouts.dashboard')
@section('title', 'Participate in Lottery')
@section('content')
<div class="row mt-5">
    <div class="intro-y col-md-8 mx-auto">
        <div class="intro-y box">
            <div class="d-flex flex-column flex-sm-row align-items-center p-5 border-bottom border-gray-200 dark-border-dark-5">
                <h2 class="fw-medium fs-base me-auto">
                    @yield('title')
                </h2>
            </div>
            <div class="card-body">

                <form action="{{ route('user.lottery.store') }}" method="POST">
                    @csrf
                    <div class="my-5 text-center mx-auto">
                        <img src="{{ asset('assets/icons/money.png') }}" alt="money" class="mx-auto">
                        <h2 class="my-3 fs-2xl text-center">Participate in Lottery, and Win ${{ $contest->reward }}</h2>
                        <div class="row">
                            <div class="form-group mt-5">
                                <button class="btn btn-primary btn-lg" type="submit">Participate with ${{ $contest->fees }} Only</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
