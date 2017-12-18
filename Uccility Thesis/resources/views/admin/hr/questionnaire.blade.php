@extends('layouts.admin')

@section('title', 'Questionnaire')
    
@section('content')
<div class="col-md-12 contents">
    <div class="col-md-12 content-tiles">
        <div class="col-md-12 content-row">
        	<div class="col-md-12 content-item">
                 <div class="col-md-12">
                    <h2>Topics</h2>
                    <p>
                        <span data-toggle="modal" data-target="#myModal" style="cursor: pointer;"><i class="fa fa-plus"></i> Add</span>
                        <span id="toggle-options" style="cursor: pointer;"><i class="fa fa-pencil"></i> Edit</span>
                    </p>
                    <table class="table table-responsive table-striped">
                        <tbody>
                            @foreach($topics as $key => $topic)
                                <tr>
                                    <td>{{ $alphabet[$key] }}.</td>
                                    <td>{{ $topic->description }}</td>
                                    <td class="options" style="display: none;"><i style="color: blue;" class="fa fa-pencil" data-toggle="modal" data-target="#myModal"></i>&nbsp;&nbsp;<i style="color: red;" class="fa fa-times"></i></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>   
            </div>
            <div class="col-md-12" style="padding: 5px;"></div>
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
    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Add Topic</h4>
                </div>
                <form  method="POST" action="/hr/evaluations/questionnaire/new-topic">
                    {{ csrf_field() }}
                    <div class="modal-body">
                        <input type="text" class="form-control" placeholder="Topic" style="color: black;">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Modal -->
</div>


@endsection