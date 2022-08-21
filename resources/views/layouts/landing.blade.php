<!doctype html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{ env('APP_DESC') }}">
    <meta name="author" content="ThemeEaster">
    <title>{{ env('APP_NAME') }} | {{ env('APP_DESC') }}</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('landing/brand/favi-dark.svg') }}">
    <link rel="stylesheet" href="{{ asset('landing/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('landing/css/line-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('landing/css/business-icon.css') }}">
    <link rel="stylesheet" href="{{ asset('landing/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('landing/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('landing/css/slick.min.css') }}">
    <link rel="stylesheet" href="{{ asset('landing/css/venobox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('landing/css/odometer.min.css') }}">
    <link rel="stylesheet" href="{{ asset('landing/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('landing/css/splitting-cells.css') }}">
    <link rel="stylesheet" href="{{ asset('landing/css/splitting.css') }}">
    <link rel="stylesheet" href="{{ asset('landing/css/keyframe-animation.css') }}">
    <link rel="stylesheet" href="{{ asset('landing/css/slider.css') }}">
    <link rel="stylesheet" href="{{ asset('landing/css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('landing/css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('landing/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('landing/css/responsive.css') }}">
    <script src="{{ asset('landing/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js') }}"></script>
    <div class="col-lg-2 col-md-6 col-sm-6 col-xs-12">
        <div class="banner-lang wow bounceIn">

            <script>
                function googleTranslateElementInit() {
                    new google.translate.TranslateElement({
                        pageLanguage: 'en'
                    }, 'google_translate_element');
                }
            </script>
            <script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
        </div>
    </div>
    </div>
    </div>
</head>

<body class="header-1 business">
    <header class="header header-one">
        <div class="top-header-one top-bar">
            <div class="container">
                <div class="top-bar-inner">
                    <div class="top-left">
                        <ul>
                            <!-- <li>Phone: <a href="tel:+1234567890">{{ env('APP_PHONE') }}</a></li>
                            <li>Email: <a href="mailto:{{ env('APP_EMAIL') }}">{{ env('APP_EMAIL') }}</a></li> -->
                            <li>
                                <div id="google_translate_element"></div>
                            </li>
                        </ul>
                    </div>
                    <div class="top-right">
                        <ul class="top-social">
                            @if (options('facebook') != "")
                            <li><a href="{{options('facebook')}}" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                            @endif
                            @if (options('twitter') != "")
                            <li><a href="{{options('twitter')}}" target="_blank"><i class="fab fa-twitter"></i></a></li>
                            @endif
                            @if (options('instagram') != "")
                            <li><a href="{{options('instagram')}}" target="_blank"><i class="fab fa-instagram"></i></a></li>
                            @endif
                            @if (options('whatsapp') != "")
                            <li><a href="{{options('whatsapp')}}" target="_blank"><i class="fab fa-whatsapp"></i></a></li>
                            @endif
                            @if (options('telegram') != "")
                            <li><a href="{{options('telegram')}}" target="_blank"><i class="fab fa-telegram"></i></a></li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="primary-header-one primary-header">
            <div class="container">
                <div class="primary-header-inner">
                    <div class="header-logo">
                        <a href="index.html">
                            <img src="{{ asset('assets/brand/logo-dark.svg') }}" alt="Logo" />
                        </a>
                    </div>
                    <div class="header-menu-wrap">
                        <ul class="dl-menu">
                            <li><a href="{{ route('index') }}">HOME</a></li>
                            <li><a href="{{ route('user.dashboard.index') }}">DASHBOARD</a></li>
                            <li><a href="{{ route('login') }}">SIGN IN</a></li>
                            <li><a href="{{ route('register') }}">CREATE NEW ACCOUNT</a></li>
                        </ul>
                    </div>
                    <div class="header-right">
                        <a class="header-btn" href="{{ route('register') }}">Get Started<span></span></a>
                        <div class="mobile-menu-icon">
                            <div class="burger-menu">
                                <div class="line-menu line-half first-line"></div>
                                <div class="line-menu"></div>
                                <div class="line-menu line-half last-line"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div id="main-slider" class="main-slider">
        <div class="single-slide">
            <div class="bg-img" style="background-image: url(/landing/slide01.jpg);"></div>
            <div class="slider-content-wrap d-flex align-items-center text-left">
                <div class="container">
                    <div class="slider-content">
                        <div class="slide-caption medium">
                            <div class="inner-layer">
                                <div data-animation="fade-in-right" data-delay="1s">Think & Grow Rich</div>
                            </div>
                        </div>
                        <div class="slide-caption big">
                            <div class="inner-layer">
                                <div data-animation="reveal-text" data-delay="1s"><span style="animation-delay: 1s;"></span>Take Your Investment TO</div>
                            </div>
                        </div>
                        <div class="slide-caption big">
                            <div class="inner-layer">
                                <div data-animation="reveal-text" data-delay="2s"><span style="animation-delay: 2s;"></span>The Next Level.</div>
                            </div>
                        </div>
                        <div class="slide-caption small">
                            <div class="inner-layer">
                                <div data-animation="fade-in-bottom" data-delay="3s">{{ env('APP_DESC') }}</div>
                            </div>
                        </div>
                        <div class="slide-btn-group">
                            <div class="inner-layer">
                                <a href="{{ route('register') }}" class="slide-btn" data-animation="fade-in-bottom" data-delay="3.5s">Get Started</a>
                                <a href="{{ route('login') }}" class="slide-btn" data-animation="fade-in-bottom" data-delay="3.5s">Sign In</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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

    <section class="about-section bd-bottom padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6 wow fadeInLeft" data-wow-delay="200ms">
                    <div class="section-heading">
                        <h2>Developing the Powerful <br> Business Online!</h2>
                        <p>amwaytrade is a leading solution provider of eCommerce, advertising, and affiliate marketing throughout the globe by merging top trending industries at a distinctive platform.</p>
                    </div>
                    <ul class="list-feature">
                        <li class="wow fadeInLeft" data-wow-delay="200ms">
                            <i class="dl dl-stats"></i>
                            <div class="list-feature-content">
                                <h3>Business Growth</h3>
                                <p>Everything you need to grow your capital fast in one place.
                                    Get access to the powerful community right now.</p>
                            </div>
                        </li>
                        <li class="wow fadeInLeft" data-wow-delay="400ms">
                            <i class="dl dl-analysis-1"></i>
                            <div class="list-feature-content">
                                <h3>Financial Statement</h3>
                                <p>Any time you need your Earning History, You can simpley get Full Statement, Monthly
                                    or Yearly in one click.</p>
                            </div>
                        </li>
                    </ul>
                    <div class="btn-wrap">
                        <a href="{{ route('register') }}" class="default-btn">Explore More</a>
                    </div>
                </div>
                <div class="col-md-6 wow fadeInRight" data-wow-delay="200ms">
                    <div class="about-bg-holder">
                        <div class="bg-back wow fadeInDown" data-wow-delay="400ms"></div>
                        <div class="bg-front wow fadeInUp" data-wow-delay="500ms"></div>
                        <div class="dot-pattern"></div>
                        <a class="play-btn venobox" data-vbtype="video" href="https://www.youtube.com/watch?v=ZLaG1migE00">
                            <span class="play-icon"><svg aria-hidden="true" focusable="false" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                    <path fill="currentColor" d="M424.4 214.7L72.4 6.6C43.8-10.3 0 6.1 0 47.9V464c0 37.5 40.7 60.1 72.4 41.3l352-208c31.4-18.5 31.5-64.1 0-82.6z">
                                    </path>
                                </svg></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="service-section bg-grey bd-bottom padding">
        <div class="container">
            <div class="section-heading mb-40 text-center wow fadeInUp" data-wow-delay="200ms">
                <h4><span></span>What We Do <span></span></h4>
                <h2>Get Exceptional Services</h2>
                <p>with an expert team in analysis and trading we will boost your capital in an extraordinary way.
                </p>
            </div>
            <div class="row service-items">
                <div class="col-md-6 sm-padding wow fadeInUp" data-wow-delay="300ms">
                    <div class="service-item">
                        <div class="service-icon"><i class="dl dl-stats"></i></div>
                        <h3>VISION</h3>
                        <p>To Nurture a vibrant, prosperous, and globally expanding community through extraordinary services and opportunities
                        </p>
                        <a href="{{ route('register') }}" class="read-more">Read More<i class="las la-long-arrow-alt-right"></i></a>
                        <div class="dir-overlay"></div>
                    </div>
                </div>
                <div class="col-md-6 sm-padding wow fadeInUp" data-wow-delay="400ms">
                    <div class="service-item">
                        <div class="service-icon"><i class="dl dl-success"></i></div>
                        <h3>MISSION</h3>
                        <p>Our mission is to empower the common person, regardless of their background, gender, race, or age by giving them a unique opportunity to achieve their goals and dreams come true
                        </p>
                        <a href="{{ route('register') }}" class="read-more">Read More<i class="las la-long-arrow-alt-right"></i></a>
                        <div class="dir-overlay"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="cta-section bg-grey">
        <div class="container">
            <div class="row cta-wrap">
                <div class="col-md-6 wow fadeInLeft" data-wow-delay="200ms">
                    <div class="cta-content">
                        <h2>Sustainability</h2>
                        <p>our strategies and services have been time tested and designed to last for years hence remain highly sustainable.</p>
                        <a href="contact.html" class="default-btn">Create Account</a>
                    </div>
                </div>
                <div class="cta-img d-none d-md-block"></div>
            </div>
        </div>
    </section>

    <section class="about-section bd-bottom padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 wow fadeInLeft" data-wow-delay="200ms">
                    <div class="section-heading">
                        <h2>CURRENCY UPDATES</h2>
                    </div>
                    <div class="tradingview-widget-container">
                        <div class="tradingview-widget-container__widget"></div>
                        <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/markets/currencies/forex-heat-map/" rel="noopener" target="_blank"><span class="blue-text"></span></a></div>
                        <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-forex-heat-map.js" async>
                            {
                                "width": "100%",
                                "height": "500",
                                "currencies": [
                                    "EUR",
                                    "USD",
                                    "JPY",
                                    "GBP",
                                    "CHF",
                                    "AUD",
                                    "CAD",
                                    "NZD",
                                    "CNY"
                                ],
                                "isTransparent": false,
                                "colorTheme": "light",
                                "locale": "en"
                            }
                        </script>
                    </div>
                    <!-- TradingView Widget END -->
                </div>
            </div>
        </div>
    </section>
    <section class="counter-section padding">
        <div class="overlay"></div>
        <div class="container">
            <div class="section-heading text-center">
                <h4 class="wow fadeInUp" data-wow-delay="200ms">Take Your INVESTMENT to Next Level!</h4>
                <h2 class="wow fadeInUp" data-wow-delay="300ms">FOREX TRADING Helping All <br> Over the World!</h2>
                <p class="wow fadeInUp" data-wow-delay="400ms">regardless of trend, earn money by investing in the top crypto and forex on the market.</p>
                <a href="{{ route('user.support.create') }}" class="default-btn wow fadeInUp" data-wow-delay="500ms">Talk with Support Team</a>
            </div>
            <div class="row counter-wrap mb-70">
                <div class="col-lg-3 col-sm-6 bd-right">
                    <div class="counter-item">
                        <div class="counter-content">
                            <div class="counter-icon"><i class="dl dl-startup"></i></div>
                            <h3><span class="odometer" data-count="5518">00</span></h3>
                            <h4>All Users</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 bd-right">
                    <div class="counter-item">
                        <div class="counter-content">
                            <div class="counter-icon"><i class="dl dl-presentation"></i></div>
                            <h3><span class="odometer" data-count="4518">00</span></h3>
                            <h4>Happy Investors</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 bd-right">
                    <div class="counter-item">
                        <div class="counter-content">
                            <div class="counter-icon"><i class="dl dl-timer"></i></div>
                            <h3><span class="odometer" data-count="6274">00</span></h3>
                            <h4>Total Withdraw</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="counter-item">
                        <div class="counter-content">
                            <div class="counter-icon"><i class="dl dl-success"></i></div>
                            <h3><span class="odometer" data-count="1345">00</span></h3>
                            <h4>Worldwide Brunch</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="project-section bd-bottom padding">
        <div class="container">
            <div class="section-heading-wrap row mb-40">
                <div class="col-md-6">
                    <div class="section-heading">
                        <h4>Forex Trade <span></span></h4>
                        <h2>Love to Work for Business!</h2>
                        <p> forex, currency, trade & commodities market and other global investments in the stockmarket
                            is also a strong force. The economy of China has grown by around 7% per year for 20 years;
                            that was before 2009 – but after 2008 as they have slowed down their growth rate to only 1%.
                            They are still far from an economic powerhouse</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <a href="{{ route('register') }}" class="default-btn">Contact Support</a>
                </div>
            </div>
        </div>
    </section>

    <section class="testimonial-section bg-grey padding">
        <div class="map"></div>
        <div class="container">
            <div class="section-heading mb-40 text-center wow fadeInUp" data-wow-delay="200ms">
                <!-- <h4>Sustainability</h4> -->
                <h2>Explore. Network. Earn. Repeat.</h2>
                <p>Get passive income and multiply your investments on main trends in digital market.
                    Reduce your risks by supporting the community and sharing experiences
                </p>
            </div>
        </div>
    </section>


    <section class="blog-section bg-grey bd-bottom padding">
        <div class="container">
            <div class="section-heading mb-40 text-center wow fadeInUp" data-wow-delay="200ms">
                <h4>{{ env('APP_NAME') }}</h4>
                <h2>INVESTMENT OFFER</h2>
                <p> Depending on the amount of your investment, you can choose one of our investment plans and consistently.</p>
            </div>
            <div class="row">
                @foreach ($plans as $plan)
                <div class="col-lg-4 col-sm-6 padding-15">
                    <div class="blog-item">
                        <div class="blog-thumb">
                            <img src="assets/img/post-2.jpg" alt="post">
                            <span class="category"><a href="{{ route('register') }}">Activate This Plan</a></span>
                        </div>
                        <div class="blog-content">
                            <h3><a href="{{ route('register') }}">{{ $plan->name }} Plan</a></h3>
                            <h3><a href="{{ route('register') }}">${{ number_format($plan->price_from,2) }} - ${{ number_format($plan->price_to,2) }}</a></h3>
                            <div class="my-4 mx-auto text-center">
                                <img src="{{ asset('assets/icons/'.$loop->iteration) }}.png" alt="Package" class="w-50">
                            </div>
                            <p>Min Withdraw: ${{ options("min withdraw") }}</p>
                            <p>Instant Deposit</p>
                            <p>Direct Commission ${{ options("direct") }}</p>
                            <a href="{{ route('register') }}" class="read-more">Buy This Plan<i class="las la-long-arrow-alt-right"></i></a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="footer-section info-active">
        <div class="footer-info">
            <div class="container">
                <div class="footer-info-inner d-flex justify-content-center">
                    <div class="footer-info-list">
                        <div>
                            <svg enable-background="new 0 0 511.991 511.991" version="1.1" viewBox="0 0 511.99 511.99" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                                <path d="m511.99 196.24c0-0.179-0.094-0.333-0.102-0.503-0.053-0.591-0.17-1.175-0.35-1.741-0.118-0.505-0.281-0.999-0.486-1.476-0.244-0.452-0.529-0.881-0.853-1.28-0.338-0.489-0.727-0.941-1.161-1.348-0.137-0.12-0.196-0.282-0.341-0.393l-82.039-63.735v-66.057c0-14.138-11.462-25.6-25.6-25.6h-92.476l-37.027-28.749c-9.149-7.128-21.972-7.128-31.121 0l-37.034 28.749h-92.476c-14.138 0-25.6 11.461-25.6 25.6v66.057l-82.031 63.735c-0.145 0.111-0.205 0.273-0.341 0.393-0.434 0.407-0.823 0.859-1.161 1.348-0.324 0.399-0.61 0.828-0.853 1.28-0.207 0.476-0.37 0.97-0.486 1.476-0.178 0.555-0.295 1.127-0.35 1.707 0 0.171-0.102 0.324-0.102 0.503v290.17c0.034 2.748 0.515 5.471 1.425 8.064-1.959 2.954-1.867 6.816 0.229 9.674s5.752 4.106 9.158 3.126c4.312 3.081 9.48 4.737 14.78 4.736h460.8c5.322-0.011 10.506-1.691 14.822-4.804 0.728 0.224 1.483 0.347 2.244 0.367 3.117 0.018 5.991-1.68 7.479-4.419s1.349-6.074-0.362-8.679c0.907-2.593 1.385-5.317 1.417-8.064v-290.13zm-261.12-177.42c2.98-2.368 7.2-2.368 10.18 0l19.686 15.283h-49.493l19.627-15.283zm-223.16 476.08 223.16-173.35c2.982-2.354 7.19-2.354 10.172 0l223.23 173.35h-456.57zm467.22-13.329-223.39-173.49c-9.143-7.118-21.952-7.118-31.095 0l-223.39 173.49v-272.34l139.84 108.59c3.726 2.889 9.088 2.211 11.977-1.515s2.211-9.088-1.515-11.977l-142.06-110.32 60.032-46.643v65.937c0 4.713 3.821 8.533 8.533 8.533 4.713 0 8.533-3.821 8.533-8.533v-153.6c0-4.713 3.82-8.533 8.533-8.533h290.13c4.713 0 8.533 3.82 8.533 8.533v153.6c0 4.713 3.82 8.533 8.533 8.533s8.533-3.821 8.533-8.533v-65.937l60.032 46.643-142.32 110.52c-3.723 2.891-4.397 8.253-1.506 11.977 2.891 3.723 8.253 4.397 11.977 1.506l140.08-108.77v272.34z" />
                                <path d="m170.66 110.91h170.67c4.713 0 8.533-3.82 8.533-8.533s-3.82-8.533-8.533-8.533h-170.67c-4.713 0-8.533 3.82-8.533 8.533s3.82 8.533 8.533 8.533z" />
                                <path d="m349.86 153.58c0-4.713-3.82-8.533-8.533-8.533h-170.67c-4.713 0-8.533 3.821-8.533 8.533 0 4.713 3.82 8.533 8.533 8.533h170.67c4.713 0 8.533-3.821 8.533-8.533z" />
                                <path d="m349.86 204.78c0-4.713-3.82-8.533-8.533-8.533h-76.8c-4.713 0-8.533 3.82-8.533 8.533s3.82 8.533 8.533 8.533h76.8c4.713 0 8.533-3.821 8.533-8.533z" />
                            </svg>
                        </div>
                        <h3>{{ env('APP_EMAIL') }} <br> support@amwaytrade.net</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="map light"></div>
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-sm-6 sm-padding">
                        <div class="footer-widget">
                            <a class="logo" href="index.html">
                                <img src="{{ asset('assets/brand/logo-light.svg') }}" alt="logo">
                            </a>
                            <p>{{ env('APP_DESC') }}</p>
                            <ul class="footer-social">
                                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 sm-padding">
                        <div class="footer-widget link-widget">
                            <h3>Site Links</h3>
                            <ul class="widget-links">
                                <li><i class="fas fa-square-full"></i><a href="{{ route('login') }}">Sig in</a></li>
                                <li><i class="fas fa-square-full"></i><a href="{{ route('register') }}">Create
                                        Account</a></li>
                                <li><i class="fas fa-square-full"></i><a href="{{ route('user.support.index') }}">Support</a></li>
                                <li><i class="fas fa-square-full"></i><a href="{{ route('user.plans.index') }}">Pricing</a></li>
                            </ul>
                            <div class="booking-wrap mt-3">
                                <div><svg height="448pt" viewBox="0 -5 448 447" width="448pt" xmlns="http://www.w3.org/2000/svg">
                                        <path d="m448 264.5v-264h-368v56h296c4.417969 0 8 3.582031 8 8v200zm0 0">
                                        </path>
                                        <path d="m178.34375 338.84375c1.5-1.5 3.535156-2.34375 5.65625-2.34375h184v-264h-368v264h72c4.417969 0 8 3.582031 8 8v92.6875zm0 0">
                                        </path>
                                    </svg></div>
                                <div class="booking-wrap-inner">
                                    <h3>Need Free Consultation?</h3>
                                    <a href="{{ route('user.support.create') }}">Talk with an Agent</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12 sm-padding">
                        <div class="footer-widget">
                            <h3>Newsletter Signup</h3>
                            <p>Signup today for hints, tips and the latest news and updates.</p>
                            <div class="subscribe-form">
                                <form action="#" class="subscribe-form">
                                    <input class="form-control" type="email" name="email" placeholder="Email *" required="">
                                    <input type="hidden" name="action" value="mailchimpsubscribe">
                                    <button class="submit">Subscribe<i class="fas fa-paper-plane"></i></button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="copyright-wrap">
                    <p>© <span id="currentYear"></span> {{ env('APP_NAME') }} All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </section>

    <div id="scrollup">
        <button id="scroll-top" class="scroll-to-top"><i class="fas fa-chevron-up"></i></button>
    </div>
    <script src="{{ asset('landing/js/vendor/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('landing/js/vendor/popper.min.js') }}"></script>
    <script src="{{ asset('landing/js/vendor/bootstrap.min.js') }}"></script>
    <script src="{{ asset('landing/js/vendor/waypoints.min.js') }}"></script>
    <script src="{{ asset('landing/js/vendor/slick.min.js') }}"></script>
    <script src="{{ asset('landing/js/vendor/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('landing/js/vendor/odometer.min.js') }}"></script>
    <script src="{{ asset('landing/js/vendor/jquery.isotope.v3.0.2.js') }}"></script>
    <script src="{{ asset('landing/js/vendor/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('landing/js/vendor/venobox.min.js') }}"></script>
    <script src="{{ asset('landing/js/vendor/jquery.hoverdir.js') }}"></script>
    <script src="{{ asset('landing/js/vendor/splitting.min.js') }}"></script>
    <script src="{{ asset('landing/js/vendor/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('landing/js/vendor/wow.min.js') }}"></script>
    <script src="{{ asset('landing/js/main.js') }}"></script>
</body>

</html>