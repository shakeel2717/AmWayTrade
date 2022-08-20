@extends('layouts.dashboard')
@section('title', 'Ranks & Rewards')
@section('content')
<div class="row mt-5">
    <div class="intro-y col-md-8 mx-auto">
        <h3 class="my-5 fs-lg fw-lg">Reward: </h3>
        @foreach($rewards as $reward)
        <div class="mt-5">
            <div class="intro-y">
                <div class="box px-4 py-4 mb-3 d-flex align-items-center zoom-in">
                    <div class="w-10 h-10 flex-none image-fit rounded-2 overflow-hidden">
                        <img alt="Rubick Bootstrap HTML Admin Template" @if(checkReward($reward->id,auth()->user()->id))
                        src="{{ asset('assets/ranks/'.$loop->iteration.'.png') }}"
                        @else
                        src="{{ asset('assets/ranks/'.$loop->iteration.'-b.png') }}"
                        @endif
                        >
                    </div>
                    <div class="ms-4 me-auto">
                        <div class="fw-medium fs-lg text-uppercase">
                            ${{ number_format($reward->reward,2) }} <span class="fs-xs">OR</span> {{ $reward->alternative }}
                        </div>
                        <div class="text-gray-600 fs-xs mt-0.5 text-uppercase">You must have at least 5 Direct Sponsers, Each Sponser must have active investment above ${{$reward->sales_required}}
                        </div>
                    </div>
                    <div class="py-1 px-2 rounded-pill fs-xs bg-theme-{{ checkReward($reward->id,auth()->user()->id) ? '9' : '8' }} text-white cursor-pointer fw-medium">
                        {{ checkReward($reward->id,auth()->user()->id) ? "Achieved!" : "Waiting.." }}
                    </div>
                </div>
                <div class="box px-4 py-4">
                    <p>You have Direct Active Refers: {{ directActiveRefers(auth()->user()->id) }} | {{ (directActiveRefers(auth()->user()->id) > 4) ? "Achieved!" : "Remaining: ". 5 - directActiveRefers(auth()->user()->id) }}</p>
                    <p>Total Business:  ${{ directActiveInvestment(auth()->user()->id) }}
                         | Business Required: ${{$reward->sales_required * 5}}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection