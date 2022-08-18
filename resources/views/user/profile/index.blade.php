@extends('layouts.dashboard')
@section('title', 'Profile Detail')
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

                <form action="{{ route('user.profile.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <label for="profile">Profile Picture</label>
                            <input type="file" name="profile" id="profile" placeholder="Upload Profile Picture" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <x-input name="name" placeholder="Full Name" value="{{ auth()->user()->name }}" label="show" />
                        </div>
                        <div class="col-md-6">
                            <x-input name="email" type="email" placeholder="Email" value="{{ auth()->user()->email }}" label="show" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <x-input name="username" placeholder="Username" value="{{ auth()->user()->username }}" attribute="readonly" label="show" />
                        </div>
                        <div class="col-md-6">
                            <x-input name="refer" placeholder="Sponser" value="{{ auth()->user()->refer }}" attribute="readonly" label="show" />
                        </div>
                        <div class="col-md-6">
                            <x-input name="phone" placeholder="Phone Number" value="{{ auth()->user()->phone }}" label="show" />
                        </div>
                        <div class="col-md-6">
                            <x-input name="city" placeholder="City" value="{{ auth()->user()->city }}" label="show" />
                        </div>
                        <div class="col-md-6">
                            <x-input name="country" placeholder="Country" value="{{ auth()->user()->country }}" label="show" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group mt-5">
                            <button class="btn btn-primary btn-lg" type="submit">Update Prfile Detail</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection