@extends('layouts.dashboard')
@section('title', 'Help & Support')
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

                <form action="{{ route('user.support.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <label for="category" class="mt-5 mb-2">Select Support Category</label>
                            <select name="category" id="category" class="tom-select w-full">
                                <option value="Technical Support">Technical Support</option>
                                <option value="Withdrawal Issue">Withdrawal Issue</option>
                                <option value="Deposit Funds Issue">Deposit Funds Issue</option>
                                <option value="Website Programming Issue">Website Programming Issue</option>
                                <option value="Suggestion / Ideas">Suggestion / Ideas</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label for="message" class="mt-5 mb-2">Type Message or describe your problem</label>
                            <textarea name="message" id="message" cols="30" rows="10" placeholder="Type your Message or your problem in detail" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group mt-5">
                            <button class="btn btn-primary btn-lg" type="submit">Submit to Support Team</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
