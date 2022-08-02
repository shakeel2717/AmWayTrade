@extends('layouts.auth')
@section('title', 'Forgot Password')
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
            Recover your account
        </div>
        <div class="-intro-x mt-5 fs-lg text-white text-opacity-70 dark-text-gray-500">{{ env('APP_DESC') }}</div>
    </div>
</div>
<div class="g-col-2 g-col-xl-1 h-screen h-xl-auto d-flex py-5 py-xl-0 my-10 my-xl-0">
    <div class="my-auto mx-auto ms-xl-20 bg-white dark-bg-dark-1 bg-xl-transparent px-5 px-sm-8 py-8 p-xl-0 rounded-2 shadow-md shadow-xl-none w-full w-sm-3/4 w-lg-2/4 w-xl-auto">
        <h2 class="intro-x fw-bold fs-2xl fs-xl-3xl text-center text-xl-start">
            Forgot Password
        </h2>
        <form action="{{ route('password.email') }}" method="POST">
            @csrf
            <div class="intro-x mt-2 text-gray-500 d-xl-none text-center">A few more clicks to sign in to your
                account. Manage all your e-commerce accounts in one place</div>
            <div class="intro-x mt-8">
                <x-input name="email" type="email" placeholder="Type your Email" />
            </div>
            <div class="intro-x d-flex text-gray-700 dark-text-gray-600 fs-xs fs-sm-sm mt-4">
                <div class="d-flex align-items-center me-auto">
                    <input id="remember-me" type="checkbox" class="form-check-input border me-2">
                    <label class="cursor-pointer select-none" for="remember-me">Remember Me</label>
                </div>
            </div>
            <div class="intro-x mt-5 mt-xl-8 text-center text-xl-start">
                <button class="btn btn-primary py-3 px-4 me-xl-3 align-top">Send me Email</button>
                <a href="{{route('login')}}" class="btn btn-outline-secondary py-3 px-4 mt-3 mt-xl-0 align-top">Remember Password?</a>
            </div>
        </form>
    </div>
</div>
@endsection
