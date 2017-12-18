@extends('layouts.app')

@section('content')

<div class="col-md-12 panel">
	<h1>Student Records</h1>
	<button class="btn btn-default" id="btn-save">Save</button>
	<div class="col-md-3">
		<select name="term" id="term" class="form-control" style="color: black;">
			<option value="Midterm">Mid Term</option>
			<option value="Final">Final Term</option>
			<option value="Both">Both</option>
		</select>
	</div>
	<div class="panel-body student-records">
		<table class="table table-bordered">
			<tr>
				<th rowspan="2"></th>
				<th colspan="2"></th>
				<th colspan="14" style="text-align: center;">Midterm</th>
				<th></th>
			</tr>
			<tr>
				<th colspan="2" style="text-align: center;">Student</th>
				<th colspan="5"></th>
				<th colspan="4" style="text-align: center;">Quiz</th>
				<th colspan="3"></th>
				<th colspan="2"></th>
				<th></th>
			</tr>
			<tr>
				<th id="student-count" data-count="5" style="text-align: center;">2</th>
				<th rowspan="1">Name</th>
				<th rowspan="1">Number</th>
				<th colspan="5" rowspan="1">Attendance</th>
				<th>10</th>
				<th>20</th>
				<th>30</th>
				<th>50</th>
				<th colspan="3" rowspan="1" id="data-activities" data-activities="3">Activity</th>
				<th>Exam</th>
				<th rowspan="1">Remarks</th>
				<th rowspan="1">GWA</th>
			</tr>
			@php
				$f = 1;
			@endphp
			<tbody id="table-content">
				@for($i = 0;$i < 2;$i++)
				<tr>
					<th style="background-color: #f3f3f3; text-align: center;">{{$f++}}</th>
					<td>Jose Rizal</td>
					<td>201231231</td>
					@for($a = 0;$a < 5;$a++)
						<td><input type="checkbox"></td>
					@endfor
					@for($q = 0;$q < 4;$q++)
						<td id="data-id{{$i}}{{$q}}" data-quiz="{{$q}}" contenteditable="true">{{rand(1, 20)}}</td>
					@endfor
					@for($act = 0;$act < 3;$act++)
						<td data-activity="{{$act}}" contenteditable="true">{{rand(1, 10)}}</td>
					@endfor
					<td contenteditable="true">0</td>
					<td contenteditable="true">0</td>
					<td contenteditable="true" id="gwa{{$i}}">0</td>
				</tr>
				@endfor
			</tbody>
		</table>
	</div>
</div>

@endsection