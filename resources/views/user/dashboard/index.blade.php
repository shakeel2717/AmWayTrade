@extends('layouts.dashboard')
@section('title', 'Dashboard')
@section('content')
<div class="row">
    <div class="intro-y col-md-3">
        <div class="box p-5 zoom-in">
            <div class="d-flex align-items-center">
                <div class="w-2/4 flex-none">
                    <div class="fs-lg fw-medium truncate">
                        {{ env('APP_CURRENCY') }}{{ number_format(balance(auth()->user()->id), 2) }}
                    </div>
                    <div class="text-gray-600 lead mt-1">Available Balance</div>
                </div>
                <div class="flex-none ms-auto position-relative">
                    <img src="{{ asset('assets/icons/graph.png') }}" alt="Balance">
                </div>
            </div>
        </div>
    </div>
    <div class="intro-y col-md-3">
        <div class="box p-5 zoom-in">
            <div class="d-flex align-items-center">
                <div class="w-2/4 flex-none">
                    <div class="fs-lg fw-medium truncate">
                        {{ env('APP_CURRENCY') }}{{ number_format(totalInvest(auth()->user()->id), 2) }}
                    </div>
                    <div class="text-gray-600 lead mt-1">Total Investment</div>
                </div>
                <div class="flex-none ms-auto position-relative">
                    <img src="{{ asset('assets/icons/tasks.png') }}" alt="Balance">
                </div>
            </div>
        </div>
    </div>
    <div class="intro-y col-md-3">
        <div class="box p-5 zoom-in">
            <div class="d-flex align-items-center">
                <div class="w-2/4 flex-none">
                    <div class="fs-lg fw-medium truncate">
                        {{ env('APP_CURRENCY') }}{{ number_format(totalPayout(auth()->user()->id), 2) }}
                    </div>
                    <div class="text-gray-600 lead mt-1">Total Payout</div>
                </div>
                <div class="flex-none ms-auto position-relative">
                    <img src="{{ asset('assets/icons/directory.png') }}" alt="Balance">
                </div>
            </div>
        </div>
    </div>
    <div class="intro-y col-md-3">
        <div class="box p-5 zoom-in">
            <div class="d-flex align-items-center">
                <div class="w-2/4 flex-none">
                    <div class="fs-lg fw-medium truncate">
                        {{ allRefers(auth()->user()->id)->count() }}
                    </div>
                    <div class="text-gray-600 lead mt-1">My Downline Team</div>
                </div>
                <div class="flex-none ms-auto position-relative">
                    <img src="{{ asset('assets/icons/hierarchy.png') }}" alt="Balance">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6 mt-5">
        <div class="intro-y d-flex align-items-center h-10">
            <h2 class="fs-lg fw-medium truncate me-5">
                Recent Transactions
            </h2>
        </div>
        @forelse (auth()->user()->transactions->take(5) as $transaction)
        <div class="mt-5">
            <div class="intro-y">
                <div class="box px-4 py-4 mb-3 d-flex align-items-center zoom-in">
                    <div class="w-10 h-10 flex-none image-fit rounded-2 overflow-hidden">
                        <img alt="Rubick Bootstrap HTML Admin Template" src="{{ asset('assets/icons/wallet.png') }}">
                    </div>
                    <div class="ms-4 me-auto">
                        <div class="fw-medium">
                            {{ env('APP_CURRENCY') }}{{ number_format($transaction->amount, 2) }} ({{ $transaction->type }})
                        </div>
                        <div class="text-gray-600 fs-xs mt-0.5">{{ $transaction->created_at->diffForHumans() }}
                        </div>
                    </div>
                    <div class="py-1 px-2 rounded-pill fs-xs bg-theme-{{ $transaction->sum ? '9' : '6' }} text-white cursor-pointer fw-medium">
                        {{ $transaction->status ? 'Approved' : 'Pending' }}
                    </div>
                </div>
            </div>
        </div>
        @empty
        <div class="mt-5">
            <div class="intro-y">
                <div class="box px-4 py-4 mb-3 d-flex align-items-center zoom-in">
                    <div class="ms-4 me-auto">
                        <div class="fw-medium">No Record Found</div>
                    </div>
                </div>
            </div>
        </div>
        @endforelse

        <div class="intro-y d-flex align-items-center h-10">
            <h2 class="fs-lg fw-medium truncate me-5">
                My Investment
            </h2>
        </div>
        @forelse (auth()->user()->userPlans->take(5) as $userPlan)
        <div class="mt-5">
            <div class="intro-y">
                <div class="box px-4 py-4 mb-3 d-flex align-items-center zoom-in">
                    <div class="w-10 h-10 flex-none image-fit rounded-2 overflow-hidden">
                        <img alt="Rubick Bootstrap HTML Admin Template" src="{{ asset('assets/icons/wallet.png') }}">
                    </div>
                    <div class="ms-4 me-auto">
                        <div class="fw-medium">
                            {{ env('APP_CURRENCY') }}{{ number_format($userPlan->amount, 2) }} <span class="text-theme-1">({{ $userPlan->plan->name }} Plan)</span>
                        </div>
                        <div class="text-gray-600 fs-xs mt-0.5">{{ $userPlan->created_at->diffForHumans() }}</div>
                    </div>
                    <div class="py-1 px-2 rounded-pill fs-xs bg-theme-9 text-white cursor-pointer fw-medium">
                        {{ $userPlan->status ? 'Active' : 'Pending' }}
                    </div>
                </div>
            </div>
        </div>
        @empty
        <div class="mt-5">
            <div class="intro-y">
                <div class="box px-4 py-4 mb-3 d-flex align-items-center zoom-in">
                    <div class="ms-4 me-auto">
                        <div class="fw-medium">No Record Found</div>
                    </div>
                </div>
            </div>
        </div>
        @endforelse
    </div>
    <div class="col-md-6 mt-5">
        <div class="intro-y d-flex align-items-center h-10">
            <h2 class="fs-lg fw-medium truncate me-5">
                Get your Refer Link
            </h2>
        </div>
        <!-- BEGIN: Ads 2 -->
        <div class="mt-5">
            <div class="box p-8 position-relative overflow-hidden intro-y">
                <div class="ads-box__title w-full w-sm-52 text-theme-1 dark-text-white fs-xl mt-n3">Invite friends &
                    Earn <span class="fw-medium">FREE</span> Rewards!</div>
                <div class="w-full w-sm-60 lh-lg text-gray-600 mt-2">Copy and Share this link with your friends &
                    family, you will get paid once anyone join.</div>
                <div class="col-md-6">
                    <div class="position-relative mt-6 cursor-pointer tooltip" title="Copy referral link">
                        <input class="form-control" id="link" value="{{ route('register', ['refer' => auth()->user()->username]) }}">
                        <i data-feather="copy" onclick="copyFunction()" class="position-absolute z-30 end-0 top-0 bottom-0 my-auto me-4 w-4 h-4"></i>
                    </div>
                </div>
                <img class="d-none d-sm-block position-absolute top-0 end-0 w-1/2 mt-1 me-n12" alt="Rubick Bootstrap HTML Admin Template" src="{{ asset('assets/images/phone-illustration.svg') }}">
            </div>
        </div>
        <!-- END: Ads 2 -->
    </div>
</div>
@endsection
@section('footer')
<script>
    function copyFunction() {
        var copyText = document.getElementById("link");
        copyText.select();
        copyText.setSelectionRange(0, 99999); /* For mobile devices */
        navigator.clipboard.writeText(copyText.value);
    }
</script>
@endsection
