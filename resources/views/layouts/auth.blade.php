<!DOCTYPE html>
<html lang="en" class="light">

<head>
    <meta charset="utf-8">
    <link href="{{ asset('assets/brand/favi-dark.svg') }}" rel="shortcut icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{ env('APP_DESC') }}">
    <meta name="keywords" content="{{ env('APP_KEYWORDS') }}">
    <meta name="author" content="ASAN WEBS DEVELOPMENT">
    <title>@yield('title', 'Authentication') | {{ env('APP_DESC') }}</title>
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}" />
</head>

<body class="login">
    <div class="container px-sm-10">
        <div class="grid columns-2 gap-4">
            @yield('form')
        </div>
    </div>
    <script src="{{ asset('assets/js/app.js') }}"></script>
    <x-alert />
</body>

</html>
