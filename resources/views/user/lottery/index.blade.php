@extends('layouts.dashboard')
@section('title', 'All Recent Lotteries List')
@section('content')
    <div class="row mt-5">
        <div class="intro-y col-md-8 mx-auto">
            <h3 class="my-5 fs-lg fw-lg">List: #</h3>
            @forelse (auth()->user()->lotteries as $lottery)
                <div class="mt-5">
                    <div class="intro-y">
                        <div class="box px-4 py-4 mb-3 d-flex align-items-center zoom-in">
                            <div class="w-10 h-10 flex-none image-fit rounded-2 overflow-hidden">
                                <img alt="Rubick Bootstrap HTML Admin Template" src="{{ asset('assets/icons/wallet.png') }}">
                            </div>
                            <div class="ms-4 me-auto">
                                <div class="fw-medium">
                                    ${{ number_format($lottery->amount, 2) }}
                                    (@if ($lottery->contest->status == 'open')
                                        Waiting for the Result....
                                    @elseif ($lottery->contest->status == 'closed')
                                        @if ($lottery->winner == true)
                                            Winner
                                        @else
                                            Defeat
                                        @endif
                                    @endif)
                                </div>
                                <div class="text-gray-600 fs-xs mt-0.5 text-uppercase">Contest:
                                    {{ $lottery->contest->title }}
                                </div>
                            </div>
                            <div class="py-1 px-2 rounded-pill fs-xs bg-theme-9 text-white cursor-pointer fw-medium">
                                {{ $lottery->created_at->diffForHumans() }}
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
                                    src="{{ asset('assets/icons/wallet.png') }}">
                            </div>
                            <div class="ms-4 me-auto">
                                <div class="fw-medium">
                                    No Participation Found in any Contest.
                                </div>
                                <div class="text-gray-600 fs-xs mt-0.5 text-uppercase">N/A
                                </div>
                            </div>
                            <div class="py-1 px-2 rounded-pill fs-xs bg-theme-9 text-white cursor-pointer fw-medium">
                                N/A
                            </div>
                        </div>
                    </div>
                </div>
            @endforelse
        </div>
    </div>
@endsection
