@extends('layouts.app')

@section('content')

<div class="col-md-12 panel">
	<div class="panel-body">
		<div class="col-md-12">
			<form method="post" action="">
	        {{ csrf_field() }}
			<h1>STUDENT EVALUATION OF TEACHER PERFORMANCE</h1>
			<input type="hidden" name="student_id" value="16">
			<div class="col-md-6 form-group">
				<label for="teacher-name">Teacher's Name: </label>
				<select class="form-control" name="professor_id" id="teacher-name" style="color: black;">
					<option value="34"> Joemen Barrios</option>
					<option value="47"> Allyson Merdegia</option>
				</select>
			</div>
			<div class="col-md-6 form-group">
				<label for="subject">Subject: </label>
				<select class="form-control" name="subject" id="subject" style="color: black;">
					<option value="Thesis I"> Thesis I</option>
					<option value="Thesis II"> Thesis II</option>
				</select>
			</div>

    		<table class="table table-responsive">
                <tbody>
                    @foreach($topics as $key => $topic)
						<tr>
							<td>{{ ++$key }}.</td>
							<td colspan="3" style="color: #344577; font-weight: bold;">{{ $topic->description }}</td>
							<td>
								<td>
									@foreach($topic->getQuestions as $num => $question)
									<tr>
										<td></td>
										<td>{{ ++$num }}.</td>
										<td>{{ $question->question }}</td>
										<td>
											@for($i = 5;$i >= 1;$i--)
												<input type="radio" name="question[{{ $question->id }}]" value="{{ $i }}" required> {{ $i }} &nbsp;
											@endfor
										</td>
									</tr>
									@endforeach
								</td>
							</td>
						</tr>
                    @endforeach
                    <tr>
                    	<td colspan="4" style="text-align: center;">
                    		<button class="btn btn-primary">Submit</button>
                    	</td>
                    </tr>
                </tbody>
            </table>
        </form>
    	</div>
	</div>
</div>

@endsection