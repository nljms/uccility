<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Uccility</title>

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style-icon.css') }}">
        <!-- <link rel="stylesheet" href="{{ asset('css/style.css') }}"> -->
    </head>
    <body>
        <div id="app">
            <div class="parent-container">
                @include('_includes.nav')
            </div>
        </div>
    </body>
</html>
