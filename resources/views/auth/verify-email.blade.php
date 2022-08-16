@extends('layouts.auth')
@section('title', 'Sign In')
@section('form')
<div class="g-col-2 g-col-xl-1 d-none d-xl-flex flex-column min-vh-screen">
    <a href="{{ route('login') }}" class="-intro-x d-flex align-items-center pt-5">
        <img alt="{{ env('APP_DESC') }}" src="{{ asset('assets/brand/logo-light.svg') }}">
    </a>
    <div class="my-auto">
        <img alt="{{ env('APP_DESC') }}" class="-intro-x w-1/2 mt-n16" src="{{ asset('assets/images/illustration.svg') }}">
        <div class="-intro-x text-white fw-medium fs-4xl lh-base mt-10">
            A few more clicks to
            <br>
            Sign in to your account.
        </div>
        <div class="-intro-x mt-5 fs-lg text-white text-opacity-70 dark-text-gray-500">{{ env('APP_DESC') }}</div>
    </div>
</div>
<div class="g-col-2 g-col-xl-1 h-screen h-xl-auto d-flex py-5 py-xl-0 my-10 my-xl-0">
    <div class="my-auto mx-auto ms-xl-20 bg-white dark-bg-dark-1 bg-xl-transparent px-5 px-sm-8 py-8 p-xl-0 rounded-2 shadow-md shadow-xl-none w-full w-sm-3/4 w-lg-2/4 w-xl-auto">
        <h2 class="intro-x fw-bold fs-2xl fs-xl-3xl text-center text-xl-start">
            Email Verification Required!
        </h2>
        <p class="mt-3">Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.</p>
        <br>
        @if (session('status') == 'verification-link-sent')
        <div class="mb-4 font-medium text-sm text-success">
            {{ __('A new verification link has been sent to the email address you provided during registration.') }}
        </div>
        @endif
        <br>
        <div class="d-flex justify-content-center align-items-center">
            <form action="{{ route('verification.send') }}" method="POST">
                @csrf
                <div class="intro-x mt-2 text-gray-500 d-xl-none text-center">Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.</div>

                <div class="intro-x mt-5 mt-xl-8 text-center text-xl-start">
                    <button class="btn btn-primary py-3 px-4 me-xl-3">Resend Verification Email</button>
                </div>
            </form>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <div class="intro-x mt-5 mt-xl-8 text-center text-xl-start">
                    <button type="submit" class="btn btn-outline-secondary py-3 px-4 ">Logout</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection