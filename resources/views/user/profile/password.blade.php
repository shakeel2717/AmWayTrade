@extends('layouts.dashboard')
@section('title', 'Change Password')
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

                    <form action="{{ route('user.profile.password.update') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <x-input name="password" type="password" placeholder="Current Password" label="show"  />
                            </div>
                            <div class="col-md-12">
                                <x-input name="npassword" type="password" placeholder="New Password" label="show"  />
                            </div>
                            <div class="col-md-12">
                                <x-input name="npassword_confirmation" type="password" placeholder="Confirm new Password" label="show"  />
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group mt-5">
                                <button class="btn btn-primary btn-lg" type="submit">Update Password</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
