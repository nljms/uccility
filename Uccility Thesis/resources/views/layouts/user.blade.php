<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{ asset('img/favicon.ico') }}">
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
    <script src="{{ asset('js/jquery-3.1.1.min.js') }}"></script>
    <title>Uccility</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style-uc.css') }}">
</head>
<body>
    <div id="app">
        <div class="guest-body" style="margin-top: 40px;">
            <img src="{{ asset('img/homepage.png') }}" alt="bg-background" class="img-responsive guest-body-img">
        </div>
        <div class="parent-container">
            @include('_includes.nav')
            @yield('content')
        </div>
    </div>
</body>

<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/script.js') }}"></script>
</html>
