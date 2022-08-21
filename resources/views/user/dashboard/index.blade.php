@extends('layouts.dashboard')
@section('title')
Welcome to Dashboard
@endsection
@section('rates')
<div class="g-col-12 mt-8">
    <div class="row">
        <div class="col-md-12 wow fadeInLeft" data-wow-delay="200ms">
            <div class="tradingview-widget-container">
                <div class="tradingview-widget-container__widget"></div>
                <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com" rel="noopener" target="_blank"><span class="blue-text"></span></a></div>
                <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
                    {
                        "symbols": [{
                                "proName": "FOREXCOM:SPXUSD",
                                "title": "S&P 500"
                            },
                            {
                                "proName": "FOREXCOM:NSXUSD",
                                "title": "Nasdaq 100"
                            },
                            {
                                "proName": "FTX:TSLAUSD",
                                "title": "TESLA"
                            },
                            {
                                "proName": "BITTREX:AAPLUSDT",
                                "title": "APPLE"
                            },
                            {
                                "proName": "FX_IDC:EURUSD",
                                "title": "EUR/USD"
                            },
                            {
                                "proName": "BITSTAMP:BTCUSD",
                                "title": "BTC/USD"
                            },
                            {
                                "proName": "BITSTAMP:ETHUSD",
                                "title": "ETH/USD"
                            }
                        ],
                        "showSymbolLogo": true,
                        "colorTheme": "light",
                        "isTransparent": false,
                        "displayMode": "adaptive",
                        "locale": "en"
                    }
                </script>
            </div>
            <!-- TradingView Widget END -->
        </div>
    </div>
    @endsection
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
                        <img src="{{ asset('assets/icons/balance.png') }}" alt="Balance" width="80">
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
                        <img src="{{ asset('assets/icons/investment.png') }}" alt="Balance" width="80">
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
                        <img src="{{ asset('assets/icons/payout.png') }}" alt="Balance" width="80">
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
                        <img src="{{ asset('assets/icons/medal.png') }}" alt="Balance" width="80">
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
                                {{ env('APP_CURRENCY') }}{{ number_format($transaction->amount, 2) }} <span class="text-uppercase">({{ $transaction->type }})</span>
                            </div>
                            <div class="text-gray-600 fs-xs mt-0.5">{{ $transaction->created_at->diffForHumans() }}
                            </div>
                        </div>
                        <div class="py-1 px-2 rounded-pill fs-xs bg-theme-9 text-white cursor-pointer fw-medium">
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
                        <div class="w-20 h-20 flex-none image-fit rounded-2 overflow-hidden">
                            <img alt="Rubick Bootstrap HTML Admin Template" src="{{ asset('assets/icons/'.$userPlan->id) }}.png">
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
            <div class="col-md-12">
                <div class="intro-y d-flex align-items-center h-10">
                    <h2 class="fs-lg fw-medium truncate me-5">
                        Lottery System
                    </h2>
                </div>
                <div class="row">
                    <div class="intro-y col-md-6 mt-5">
                        <div class="box p-5 zoom-in">
                            <div class="d-flex align-items-center">
                                <div class="flex-none">
                                    <div class="fs-lg fw-medium truncate">
                                        {{ (!$contest) ? "No Contest" : $contest->lotteries->count() }}
                                    </div>
                                    <div class="text-gray-600 lead mt-1">Total Participate</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="intro-y col-md-6 mt-5">
                        <div class="box p-5 zoom-in">
                            <div class="d-flex align-items-center">
                                <div class="flex-none">
                                    <div class="fs-lg fw-medium truncate">
                                        ${{ (!$contest) ? "No Contest" : number_format($contest->reward, 2) }}
                                    </div>
                                    <div class="text-gray-600 lead mt-1">Reward for Winner </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 mt-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="intro-y d-flex align-items-center h-10">
                        <h2 class="fs-lg fw-medium truncate me-5">
                            Daily Profit and Commissions
                        </h2>
                    </div>
                    <div class="row">
                        <div class="intro-y col-md-4 mt-5">
                            <div class="box p-5 zoom-in">
                                <div class="d-flex align-items-center">
                                    <div class="flex-none">
                                        <div class="fs-lg fw-medium truncate">
                                            {{ env('APP_CURRENCY') }}{{ number_format(totalProfit(auth()->user()->id), 2) }}
                                        </div>
                                        <div class="text-gray-600 lead mt-1">Total Daily Profit</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="intro-y col-md-4 mt-5">
                            <div class="box p-5 zoom-in">
                                <div class="d-flex align-items-center">
                                    <div class="flex-none">
                                        <div class="fs-lg fw-medium truncate">
                                            {{ env('APP_CURRENCY') }}{{ number_format(totalPassive(auth()->user()->id), 2) }}
                                        </div>
                                        <div class="text-gray-600 lead mt-1">Total Passive Income</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="intro-y col-md-4 mt-5">
                            <div class="box p-5 zoom-in">
                                <div class="d-flex align-items-center">
                                    <div class="flex-none">
                                        <div class="fs-lg fw-medium truncate">
                                            {{ env('APP_CURRENCY') }}{{ number_format(totalCommission(auth()->user()->id), 2) }}
                                        </div>
                                        <div class="text-gray-600 lead mt-1">Total Commission</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="g-col-12 g-col-sm-6 g-col-lg-3 mt-8">
                        <div class="intro-y d-flex align-items-center h-10">
                            <h2 class="fs-lg fw-medium truncate me-5">
                                MarketCap Reached
                            </h2>
                        </div>
                        <div class="intro-y box p-5 mt-5">
                            <label class="mt-2" for="">You Recieved</label>
                            <div class="progress h-4 mt-2">
                                <div class="progress-bar bg-theme-9" style="width: {{ marketcap(auth()->user()->id) }}%" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">{{ number_format(marketcap(auth()->user()->id),2) }}%</div>
                            </div>
                            <label class="mt-2" for="">Remaining</label>
                            <div class="progress h-4 mt-2">
                                <div class="progress-bar bg-theme-11" style="width: {{ 100 - marketcap(auth()->user()->id) }}%" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">{{ number_format(100 - marketcap(auth()->user()->id),2) }}%</div>
                            </div>
                            <label class="mt-2" for="">Total</label>
                            <div class="progress h-4 mt-2">
                                <div class="progress-bar bg-theme-10" style="width: 100%" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">${{ number_format(totalActiveInvest(auth()->user()->id) * 2,2) }}</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="intro-y d-flex align-items-center mt-5 h-10">
                        <h2 class="fs-lg fw-medium truncate me-5 ">
                            Get your Refer Link
                        </h2>
                    </div>
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
                            <img class="d-none d-sm-block position-absolute top-0 end-0 w-1/2 mt-1 me-n12" alt="Rubick Bootstrap HTML Admin Template" src="{{ asset('assets/icons/refer.png') }}">
                        </div>
                    </div>
                </div>
            </div>
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