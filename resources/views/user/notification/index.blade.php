@extends('layouts.dashboard')
@section('title', 'All Notification')
@section('content')
<div class="row mt-5">
    <div class="intro-y col-md-12">
        <div class="intro-y box">
            <div class="d-flex flex-column flex-sm-row align-items-center p-5 border-bottom border-gray-200 dark-border-dark-5">
                <h2 class="fw-medium fs-base me-auto">
                    @yield('title')
                </h2>
            </div>
            <div class="card-body">
            <livewire:user.all-notification/>
            </div>
        </div>
    </div>
</div>
@endsection
