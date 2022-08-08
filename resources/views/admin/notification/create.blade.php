@extends('layouts.dashboard')
@section('title', 'Send Notification to Users')
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

                    <form action="{{ route('admin.notification.store') }}" method="POST">
                        @csrf
                        <div class="row">
                        <div class="col-md-12">
                                <div class="form-group">
                                    <label for="message">Notification Content</label>
                                    <textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Enter Notificaiton to send all users"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group mt-5">
                                <button class="btn btn-primary btn-lg" type="submit">Send to All Users</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
