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
	<div class="panel-body student-records" style="min-width: 180%;">
		<table id="grading-table" class="table table-bordered">
			<tr>
				<th rowspan="2"></th>
				<th colspan="2">Subject: CS 422 THESIS 2</th>
				
			</tr>
			<tr>
				<th colspan="2">Section: BSCS 4C</th>
					@if(count($criterias) > 0)
						@foreach($criterias as $criteria)
							<th class="criterias {{ $criteria->criteria }}" colspan="{{ count($criteria->getCriteriaItems) }}" type="{{ $criteria->criteria }}" percentage="{{ $criteria->percentage }}" style="text-align: center;">{{ $criteria->criteria }} {{ $criteria->percentage }}%</th>
						@endforeach
					@else
						<th>You haven't set your grading criteria yet. <a href="#">click here to set up.</a></th>
					@endif
					<th>Remarks</th>
			</tr>
			<tr>
				<th id="student-count" data-count="{{ count($students) }}" style="text-align: center;">{{ count($students) }}</th>
				<th rowspan="1">Full Name</th>
				<th rowspan="1">Student Number</th>
				@if(count($criterias) > 0)
					@foreach($criterias as $criteria)
						@if(count($criteria->getCriteriaItems) > 0)
							@foreach($criteria->getCriteriaItems as $item)
								<th>{{ $item->total }}</th>
							@endforeach
						@else
							<th></th>
						@endif
					@endforeach
				@else
					<td style="text-align: center;">Empty</td>
				@endif
				<th></th>
			</tr>
			<tbody id="table-content">
			{{ csrf_field() }}
			@php
				$counter = 0;
			@endphp
			@foreach($students as $keys => $student)
				<tr>
					<th id="{{ $keys }}" user-id="{{ $student->user_id }}" class="highlights" style="background-color: #f3f3f3; text-align: center; cursor: pointer;">{{ ++$counter }}</th>
					<th>{{ $student->info->last_name }}, {{ $student->info->first_name }} {{ $student->info->middle_name }}</th>
					<th>{{ $student->student_number }}</th>
					@if(count($criterias) > 0)
						@foreach($criterias as $criteria)
							@if(count($criteria->getCriteriaItems) > 0)
								@foreach($criteria->getCriteriaItems as $key => $item)
									@if(count($item->getPoints) > 0)
									@php
										$var = $criteria->getCriteriaItems[$key]->getPoints->where('user_id', $student->user_id);
										$varr = $var->flatten();
										$num = count($var);
									@endphp
										<td class="{{ $criteria->criteria.$keys.$key }}" user-id="{{ $student->user_id }}" criteria-item={{ $num > 0 ? $varr[0]->criteria_item_id : $item->id }} total="{{ $item->total }}" contenteditable="true" >{{ $num > 0 ? $varr[0]->total : 0 }}</td>
									@else
										<td user-id="{{ $student->user_id }}" criteria-item="{{ $item->id }}" contenteditable="true" total="{{ $item->total }}">0</td>
									@endif
								@endforeach
							@else
								<td>100</td>
							@endif
						@endforeach
					@else
						<td style="text-align: center;">Empty</td>
					@endif
					<th></th>
				</tr>
			@endforeach
			</tbody>
		</table>
	</div>
</div>

@endsection