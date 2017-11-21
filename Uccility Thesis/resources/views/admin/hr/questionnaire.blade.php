@extends('layouts.admin')

@section('title', 'Questionnaire')
    
@section('content')
<div class="col-md-12 contents">
    <div class="col-md-12 content-tiles">
        <div class="col-md-12 content-wrapper">
            <div class="col-md-12 content-item bordered-o">
            	<div class="col-md-4">
            		<h2>Topics</h2>
            		<p><a href="#"><i class="fa fa-plus"></i> Add</a> | <a href="#"><i class="fa fa-pencil"></i> Edit</a></p>
            		<table class="table table-responsive table-striped">
                        <tbody>
                            @foreach($topics as $key => $topic)
								<tr>
									<td>{{ ++$key }}.</td>
									<td>{{ $topic->description }}</td>
								</tr>
                            @endforeach
                        </tbody>
                    </table>
            	</div>
            	<div class="col-md-8">
            		<h2>Questions</h2>
            		<p>Answerable by Rating Scale</p>
            		<p><a href="#"><i class="fa fa-plus"></i> Add</a> | <a href="#"><i class="fa fa-pencil"></i> Edit</a></p>
            		<table class="table table-responsive">
                        <tbody>
                            @foreach($topics as $key => $topic)
								<tr>
									<td>{{ ++$key }}.</td>
									<td colspan="2" style="color: #344577; font-weight: bold;">{{ $topic->description }}</td>
									<td>
										@foreach($topic->getQuestions as $num => $question)
											<tr>
												<td></td>
												<td>{{ ++$num }}.</td>
												<td>{{ $question->question }}</td>
											</tr>
										@endforeach
									</td>
								</tr>
                            @endforeach
                        </tbody>
                    </table>
            	</div>
            </div>
        </div>
    </div>
</div>


@endsection