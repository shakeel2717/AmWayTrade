@extends('layouts.dashboard')
@section('title', 'KYC System')
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

                    <form action="{{ route('user.kyc.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <label for="category" class="mt-5 mb-2">Select Document Type</label>
                                <select name="category" id="category" class="tom-select w-full">
                                    <option value="Passport">Passport</option>
                                    <option value="National Identity Card">National Identity Card</option>
                                    <option value="Driving License">Driving License</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <x-input name="name" placeholder="Legal Full Name" label="show" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="my-5 text-center">
                                <img src="{{ asset('assets/icons/id-front.svg') }}" width="200" class="mx-auto"
                                    alt="">
                            </div>
                            <div class="col-md-12">
                                <label for="front" class="mt-5 mb-2">Upload Selected Document Front Side</label>
                                <input type="file" name="front" id="front" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="my-5 text-center">
                                <img src="{{ asset('assets/icons/id-back.svg') }}" width="200" class="mx-auto"
                                    alt="">
                            </div>
                            <div class="col-md-12">
                                <label for="back" class="mt-5 mb-2">Upload Selected Document Back Side</label>
                                <input type="file" name="back" id="back" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group mt-5">
                                <button class="btn btn-primary btn-lg" type="submit">Submit for Review</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
