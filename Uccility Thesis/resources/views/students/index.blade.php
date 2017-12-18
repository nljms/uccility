@extends('layouts.student')

@section('content')

<div class="jumbotron">
	<h1>Welcome Student</h1>
	<h3>{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</h3>
	<h1><a href="/sample-evaluation">Click here to evaluate your professors.</a></h1>
</div>

@endsection