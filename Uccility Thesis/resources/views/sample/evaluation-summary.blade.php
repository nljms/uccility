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
						<td>5 - (Outstanding)</td>
						<td>4 - (Above Average)</td>
						<td>3 - (Average)</td>
						<td>2 - (Fair)</td>
						<td>1 - (Poor)</td>
						<td>Result</td>
					</tr>
				</thead>
				<tbody id="evaluation-summary">
					@foreach($ratesPerQuestion as $key => $question_rate)
						<tr>
							<td>#{{ $key }}</td>
							@for($i = 5;$i >= 1; $i--)
								@if(isset($ratesPerQuestion[$key][$i]))
									<td class="summable{{ $i }}">{{ $ratesPerQuestion[$key][$i] }}</td>
								@else
									<td class="summable{{ $i }}">0</td>
								@endif
							@endfor
							<td></td>
						</tr>
					@endforeach
					<tr>
						<td style="text-align: right;">Summary: </td>
						<td colspan="5"></td>
						<td>Above Average</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>

@endsection