@extends('layouts.professor')

@section('content')

<div class="col-md-12 panel">
	<div class="panel-body student-records">
		<div class="col-md-6 col-md-offset-3 student-record">
		<div class="col-md-6 col-md-offset-3" style="margin: 15px;">
			<label for="period">Term</label>
			<select name="period" id="period" class="form-control" style="color: black">
				<option value="">Mid term</option>
				<option value="">Final term</option>
			</select>
			<label for="period">Type</label>
			<select name="period" id="period" class="form-control" style="color: black">
				<option value="">Quiz</option>
				<option value="">Activities</option>
			</select>
		</div>
		<h1>Welcome {{ Auth::user()->last_name }}</h1>
		<h1>{{ Auth::user()->roles }}</h1>
			<div class="col-md-12 panel panel-default" style="border: 1px solid gray; border-radius: 5px;">
				<div class="panel-heading" style="background-color: #ffffff; color: #333333">Velasquez, Cong</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-md-5 attendance">
							<p>Midterm: 1.50</p>
							<p>Finals: 1.75</p>
							<p>GWA: 1.50</p>
						</div>
						<div class="col-md-7 attendance">
							<table class="table table-bordered">
								<tr>
									@for($x = 0; $x < 5; $x++)
									<th>Q{{$x}}</th>
									@endfor
								</tr>
								<tr>
									@for($y = 0; $y < $x; $y++)
									<td contenteditable="true"></td>
									@endfor
								</tr>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection