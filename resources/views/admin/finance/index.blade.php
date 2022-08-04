@extends('layouts.dashboard')
@section('title', 'Add Balance')
@section('content')
    <div class="row mt-5">
        <div class="intro-y col-md-6 mx-auto">
            <div class="intro-y box">
                <div
                    class="d-flex flex-column flex-sm-row align-items-center p-5 border-bottom border-gray-200 dark-border-dark-5">
                    <h2 class="fw-medium fs-base me-auto">
                        @yield('title')
                    </h2>
                </div>
                <div class="card-body">

                    <form action="{{ route('admin.finance.store') }}" method="POST">
                        @csrf
                        <div class="row">
                        <div class="col-md-12">
                                <x-input name="amount" placeholder="Enter Amount" label="show"  />
                            </div>
                            <div class="col-md-12">
                                <x-input name="username" placeholder="Type User's Username" label="show"  />
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group mt-5">
                                <button class="btn btn-primary btn-lg" type="submit">Add Balance</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
