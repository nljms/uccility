<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}" />
</head>
<body class="nav-md">
<div class="container">
	<div class="main_container">
		<div class="row">
			<div class="col-md-12 top_nav">
				<div class="title-holder">
					<h2><span class="highlight">UCC</span>ILITY</h2>
					<p>ADMINISTRATOR</p>
				</div>
			</div>
			<!-- sidenavbar -->
			<div class="col-md-10 right_col" role="main">
				<div class="row">
					<div class="col-md-12 padd"></div>
					<div class="col-md-12 dash-info">
						<h1>Dashboard</h1>
					</div>
					@yield('content')
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>