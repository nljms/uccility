@extends('layouts.app')

@section('content')

<div class="col-md-12 panel">
	<div class="panel-body">
		<div class="col-md-12">
			<table class="table table-responsive table-bordered">
				<thead>
					<tr>
						<td>Professor: </td>
						<td colspan="2">Joemen Barrios</td>
						<td>Subject: </td>
						<td colspan="3">Thesis I</td>
					</tr>
					<tr>
						<td></td>
						<td colspan="5">Rating Count</td>
						<td></td>
					</tr>
					<tr>
						<td>Question</td>
						<td>5 - Outstanding</td>
						<td>4 - Above Average</td>
						<td>3 - Average</td>
						<td>2 - Fair</td>
						<td>1 - Poor</td>
						<td>Result</td>
					</tr>
				</thead>
				<tbody>
					@foreach($ratesPerQuestion as $key => $question_rate)
						<tr>
						<!-- $is_admin = ($user['permissions'] == 'admin') ? true : false; -->
							<td>#{{ $key }}</td>
							@for($i = 5;$i >= 1; $i--)
							<td>{{ isset($ratesPerQuestion[$key][$i]) ? $ratesPerQuestion[$key][$i] : 0 }}</td>
							@endfor
							<td></td>
						</tr>
					@endforeach
					<tr>
						<td colspan="6" style="text-align: right;">Summary: </td>
						<td>Above Average</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>

@endsection