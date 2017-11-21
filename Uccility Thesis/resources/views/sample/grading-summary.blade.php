@extends('layouts.app')

@section('content')

<div class="col-md-12 panel">
	<div class="panel-body">
		<div class="col-md-12">
		<table  class="table">
			<tr>
				<td>#</td>
				<td>Q1</td>
				<td>Q2</td>
				<td>Q3</td>
				<td>Q4</td>
				<td>Total</td>
			</tr>
			<tbody>
				@for($i = 1; $i <= 10; $i++)
					<tr>
						<td data-cell="{{$i}}">{{ $i }}</td>
						<td data-cell="{{$i}}">{{ $i*2 }}</td>
						<td data-cell="{{$i}}">{{ $i*4 }}</td>
						<td data-cell="{{$i}}">{{ $i*8 }}</td>
						<td data-cell="{{$i}}">{{ $i*16 }}</td>
					</tr>
				@endfor
				<tr>
					<td colspan="2">Total</td>
				</tr>
			</tbody>
		</table>
		</div>
	</div>
</div>

@endsection