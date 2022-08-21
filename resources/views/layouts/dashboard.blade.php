<!DOCTYPE html>
<html lang="en" class="light">

<head>
    <meta charset="utf-8">
    <link href="{{ asset('assets/brand/favi-dark.svg') }}" rel="shortcut icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{ env('APP_DESC') }}">
    <meta name="keywords" content="{{ env('APP_KEYWORDS') }}">
    <meta name="author" content="ASAN WEBS DEVELOPMENT">
    <title>@yield('title', 'Dashboard') - {{ env('APP_DESC') }}</title>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}" />
    @yield('header')
    @livewireStyles
    @powerGridStyles
</head>

<body class="main">
    <div class="mobile-menu d-md-none">
        <div class="mobile-menu-bar">
            <a href="" class="d-flex me-auto">
                <img alt="{{ env('APP_DESC') }}" class="w-48" src="{{ asset('assets/brand/logo-light.svg') }}">
            </a>
            <a href="javascript:;" id="mobile-menu-toggler" class="mobile-menu-bar__toggler"> <i data-feather="bar-chart-2" class="w-8 h-8 text-white"></i> </a>
        </div>
        <ul class="mobile-menu-wrapper border-top border-theme-29 dark-border-dark-3 py-5">
            @if (auth()->user()->role == 'admin')
            <x-admin.nav mode="0" />
            @elseif (auth()->user()->role == 'user')
            <x-user.nav mode="0" />
            @endif
        </ul>
    </div>
    <div class="d-flex">
        <nav class="side-nav">
            <a href="" class="intro-x d-flex align-items-center ps-5 pt-4">
                <img alt="{{ env('APP_DESC') }}" class="w-40" src="{{ asset('assets/brand/logo-light.svg') }}">
            </a>
            <div class="side-nav__devider my-6"></div>
            <ul>
                @if (auth()->user()->role == 'admin')
                <x-admin.nav mode="1" />
                @elseif (auth()->user()->role == 'user')
                <x-user.nav mode="1" />
                @endif
            </ul>
        </nav>
        <div class="content">
            <div class="top-bar">
                <div class="-intro-x breadcrumb me-auto d-none d-sm-flex">
                    <a href="{{ route('user.dashboard.index') }}">Dashboard</a>
                    <i data-feather="chevron-right" class="breadcrumb__icon"></i>
                    <a class="breadcrumb--active">@yield('title')</a>
                </div>
                <div class="intro-x position-relative me-3 me-sm-6">
                    <a class="notification d-sm-none" href="">
                        <i data-feather="search" class="notification__icon dark-text-gray-300"></i>
                    </a>
                </div>
                <div class="intro-x dropdown me-auto me-sm-6">
                    <div class="dropdown-toggle notification notification--bullet cursor-pointer" role="button" aria-expanded="false" data-bs-toggle="dropdown"> <i data-feather="bell" class="notification__icon dark-text-gray-300"></i> </div>
                    <div class="notification-content pt-2 dropdown-menu">
                        <div class="notification-content__box dropdown-content">
                            <div class="notification-content__title dark-text-gray-300">Notifications</div>
                            @foreach (notifications() as $notification)
                            <div class="cursor-pointer position-relative d-flex align-items-center ">
                                <div class="w-12 h-12 flex-none image-fit me-1">
                                    <img alt="{{ env('APP_NAME') }}" class="rounded-pill" src="{{ asset('landing/announcement.png') }}">
                                    <div class="w-3 h-3 bg-theme-9 position-absolute end-0 bottom-0 rounded-pill border-2 border-white dark-border-dark-3">
                                    </div>
                                </div>
                                <div class="ms-2 overflow-hidden">
                                    <div class="d-flex align-items-center">
                                        <a href="{{ route('user.notification.index') }}" class="fw-medium truncate me-5 dark-text-gray-300">Important Notice</a>
                                        <div class="fs-xs text-gray-500 ms-auto text-nowrap">
                                            {{ $notification->created_at->diffForHumans() }}
                                        </div>
                                    </div>
                                    <div class="w-full truncate text-gray-600 mt-0.5">{{ $notification->message }}
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="intro-x dropdown w-8 h-8">
                    <div class="dropdown-toggle d-flex justify-content-center align-items-center p-2 w-8 h-8 rounded-pill overflow-hidden shadow-lg image-fit zoom-in" role="button" aria-expanded="false" data-bs-toggle="dropdown">
                        <img alt="{{ env('APP_DESC') }}" src="{{ asset('assets/profile/'. auth()->user()->profile) }}">
                    </div>
                    <div class="dropdown-menu w-56">
                        <ul class="dropdown-content bg-theme-26 dark-bg-dark-6 text-white">
                            <li class="p-2">
                                <div class="fw-medium text-white">{{ auth()->user()->name }}</div>
                                <div class="fs-xs text-theme-28 mt-0.5 dark-text-gray-600">{{ auth()->user()->email }}
                                </div>
                            </li>
                            <li>
                                <hr class="dropdown-divider border-theme-27 dark-border-dark-3">
                            </li>
                            <li>
                                <a href="{{ route('user.profile.index') }}" class="dropdown-item text-white bg-theme-1-hover dark-bg-dark-3-hover"> <i data-feather="user" class="w-4 h-4 me-2"></i> Profile </a>
                            </li>
                            <li>
                                <a href="{{ route('user.profile.change.password') }}" class="dropdown-item text-white bg-theme-1-hover dark-bg-dark-3-hover"> <i data-feather="lock" class="w-4 h-4 me-2"></i> Change Password </a>
                            </li>
                            <li>
                                <a href="{{ route('user.support.index') }}" class="dropdown-item text-white bg-theme-1-hover dark-bg-dark-3-hover"> <i data-feather="help-circle" class="w-4 h-4 me-2"></i> Help </a>
                            </li>
                            <li>
                                <hr class="dropdown-divider border-theme-27 dark-border-dark-3">
                            </li>
                            <li>
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button type="submit" class="dropdown-item text-white bg-theme-1-hover dark-bg-dark-3-hover">
                                        <i data-feather="toggle-right" class="w-4 h-4 me-2"></i> Logout
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            @yield('rates')
                <div class="intro-y h-10 mb-4">
                    <h2 class="fs-lg fw-medium truncate me-5">
                        @yield('title')
                    </h2>
                </div>
                @yield('content')
            </div>
        </div>
        <script src="{{ asset('assets/js/app.js') }}"></script>
        <x-alert />
        @yield('footer')
        @livewireScripts
        @powerGridScripts
        <script type="text/javascript">
            window.onload = function() {
                Livewire.on('success', () => {
                    swal("OTP Sent!", "{!! session('success') !!}", "success");
                })
            }
        </script>
</body>

</html>