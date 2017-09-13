<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>

	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style-icon.css') }}">

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
							<div class="col-md-12 breadcrumb-holder">
								@include('_includes.breadcrumbs')
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
<script src="{{ asset('js/Chart.min.js') }}"></script>
<script src="{{ asset('js/script.js') }}"></script>
</html>