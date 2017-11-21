<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
	<div class="col-md-12" style="width: 100%; padding: 20px;">
		<div class="col-md-12" style="text-align: center;">
			<img src="{{asset('img/finalLogo.png')}}" alt="" width="20%">
			<h1>404 Page Not Found</h1>
			<h2>We could not found the page you are requesting</h2>
			<a href="/"><button class="btn btn-primary">Home</button></a>
		</div>
	</div>
</body>
</html>