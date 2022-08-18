@extends('layouts.dashboard')
@section('title', 'Help & Support')
@section('content')
    <div class="row mt-5">
        <div class="intro-y col-md-8 mx-auto">
            <h3 class="my-5 fs-lg fw-lg">Category: {{ $support->category }}</h3>
            @forelse ($support->conversations as $conversation)
                <div class="mt-5">
                    <div class="intro-y">
                        <div class="box px-4 py-4 mb-3 d-flex align-items-center zoom-in">
                            <div class="w-10 h-10 flex-none image-fit rounded-2 overflow-hidden">
                                <img alt="Rubick Bootstrap HTML Admin Template" src="{{ asset('assets/icons/support.png') }}">
                            </div>
                            <div class="ms-4 me-auto">
                                <div class="fw-medium">
                                    {{ $conversation->message }}
                                </div>
                                <div class="text-gray-600 fs-xs mt-0.5 text-uppercase">Reply: {{ ($conversation->user_id == 1) ? "Support Team" : auth()->user()->username }}
                                </div>
                            </div>
                            <div class="py-1 px-2 rounded-pill fs-xs bg-theme-9 text-white cursor-pointer fw-medium">
                                {{ $conversation->created_at->diffForHumans() }}
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="mt-5">
                    <div class="intro-y">
                        <div class="box px-4 py-4 mb-3 d-flex align-items-center zoom-in">
                            <div class="w-10 h-10 flex-none image-fit rounded-2 overflow-hidden">
                                <img alt="Rubick Bootstrap HTML Admin Template"
                                    src="{{ asset('assets/icons/support.png') }}">
                            </div>
                            <div class="ms-4 me-auto">
                                <div class="fw-medium">
                                    No Conversatin in this section, Please Visit This Ticket Later.
                                </div>
                                <div class="text-gray-600 fs-xs mt-0.5">N/A
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforelse
        </div>
    </div>
    <div class="row">
        <div class="intro-y col-md-8 mx-auto">
            <div class="intro-y box">
                <div
                    class="d-flex flex-column flex-sm-row align-items-center p-5 border-bottom border-gray-200 dark-border-dark-5">
                    <h2 class="fw-medium fs-base me-auto">
                        Reply to this Ticket
                    </h2>
                </div>
                <div class="card-body">

                    <form action="{{ route('user.support.update', ['support' => $support->id]) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-12">
                                <label for="message" class="mt-5 mb-2">Type Message or describe your problem</label>
                                <textarea name="message" id="message" cols="30" rows="10"
                                    placeholder="Type your Message or your problem in detail" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group mt-5">
                                <button class="btn btn-primary btn-lg" type="submit">Reply to this Ticket</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
