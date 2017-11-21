<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>

	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<link rel="icon" href="{{ asset('img/favicon.ico') }}">
	<script src="{{ asset('js/jquery-3.1.1.min.js') }}"></script>
	<!-- <script src="{{ asset('js/Chart.min.js') }}"></script> -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
    <!-- <link rel="stylesheet" href="{{ asset('css/style-icon.css') }}"> -->
	<link rel="stylesheet" href="{{ asset('css/style-uc.css') }}">
</head>
<body>
<div class="container-fluid">
	<div class="row">
		<div class="main_container">
				@include('_includes.admin-nav')
				@include('_includes.admin-sidenav')
				<div class="col-md-10 right_col" role="main">
					<div class="row">
						<div class="col-md-12 padd"></div>
						<div class="col-md-12 dash-info">
							<div class="col-md-12">
								<h1>@yield('title')</h1>
							</div>
						</div>
						@yield('content')
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/script.js') }}"></script>
</html>