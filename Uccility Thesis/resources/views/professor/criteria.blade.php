@extends('layouts.app')

@section('content')

<div class="col-md-12 panel">
<h1>Grading Criteria</h1>
	<div class="panel-body grading-criteria">
		<div class="col-md-12">
			<div class="col-md-4">
				<label for="criteria">Criteria for</label>
				<select name="" id="" class="form-control" style="color: black;">
					<option value="">Midterm (25%)</option>
					<option value="">Final Term (75%)</option>
				</select><br>
			</div>
		</div>
		<div class="col-md-6">
			<h3>Criteria</h3>
			<form id="add-criteria" role="form">
				{{ csrf_field() }}
				<div class="col-md-6 form-group">
					<input type="hidden" name="professor_id" value="1">
					<input type="text" class="form-control" name="criteria" placeholder="Description" style="color: black;">
				</div>
				<div class="col-md-6 form-group">
					<input type="text" class="form-control" name="percentage" placeholder="Percentage" style="color: black;">
				</div>
				<div class="col-md-12" style="text-align: center;">
					<button class="btn btn-default">Add</button>
				</div>
			</form>

			<h3>Items</h3>
			<form method="post" action="/dashboard/criteria/new-criteria-item">
				{{ csrf_field() }}
				<div class="col-md-6 form-group">
					<select name="description" id="criteria" class="form-control" style="color: black;">
						@foreach($criterias as $criteria)
							<option value="{{ $criteria->id }}">{{ $criteria->criteria }}</option>
						@endforeach
					</select>
				</div>
				<div class="col-md-3 form-group">
					<input type="text" id="items" class="form-control" placeholder="Items" style="color: black;">
				</div>
				<div class="col-md-3 form-group">
					<button id="btn-field" class="btn btn-default">Go</button>
				</div>
				<div id="input-container" class="col-md-12">
					
				</div>
				<div class="col-md-12" style="text-align: center;">
					<button class="btn btn-default">Add</button>
				</div>
			</form>
		</div>
		<div class="col-md-6">
			<table class="table table-bordered">
				<tr>
					<th colspan="2">Grading Criteria</th>
					<th colspan="2"><span class="glyphicon glyphicon-plus pull-right"></span></th>
				</tr>
				@foreach($terms as $term)
					<tr>
						<th colspan="4" style="text-align: center;">{{ $term->term }}</th>
					</tr>
					@foreach($criterias as $criteria)
						<tr>
							<th colspan="2">{{ $criteria->criteria }}</th>
							<th colspan="2">{{ $criteria->percentage }}%</th>
							@foreach($criteria->getCriteriaItems as $item)
								<tr>
									<td></td>
									<td>{{ $item->description }}</td>
									<td>{{ $item->total }}</td>
									<td></td>
								</tr>
							@endforeach
						</tr>
					@endforeach
					<tr>
						<th colspan="2">Total: </th>
						<th colspan="2">100%</th>
					</tr>
				@endforeach
			</table>
		</div>
	</div>
</div>

@endsection