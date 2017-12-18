@extends('layouts.admin')

@section('title', 'Questionnaire')
    
@section('content')
<div class="col-md-12 contents">
    <div class="col-md-12 content-tiles">
        <div class="col-md-6 content-row">
        	<div class="col-md-12 content-item">
                 <div class="col-md-12">
                    <h2>Topics</h2>
                    <table class="table table-responsive table-striped">
                        <tbody>
                            @foreach($topics as $key => $topic)
                                <tr>
                                    <td>{{ $alphabet[$key] }}.</td>
                                    <td>{{ $topic->description }}</td>
                                    <td><i class="fa fa-pencil" style="color: blue;"></i></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <form method="POST" action="#">
                        {{ csrf_field() }}
                        <input type="text" class="form-control" style="color: black;" placeholder="Topic"><br>
                        <button class="btn btn-primary">Add</button>
                    </form>
                </div>   
            </div>
            <div class="col-md-12" style="padding: 5px;"></div>
            <div class="col-md-12 content-item">
                 <div class="col-md-12">
                    <h2><i class="fa fa-gear"></i> Edit</h2>
                    <button class="btn btn-primary"><i class="fa fa-plus"></i> Add an entry</button>
                    <button class="btn btn-primary"><i class="fa fa-pencil"></i> Edit entries</button>
                </div>   
            </div>
        </div>
        <div class="col-md-6 content-row">
            <div class="col-md-12 content-item">
                <div class="col-md-12">
                    <h2>Questions</h2>
                    <p>Answerable by Rating Scale</p>
                    <table class="table table-responsive">
                        <tbody>
                            @foreach($topics as $key => $topic)
                                <tr>
                                    <td>{{ $alphabet[$key] }}.</td>
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