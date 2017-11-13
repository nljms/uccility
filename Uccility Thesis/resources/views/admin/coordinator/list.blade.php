@extends('layouts.coor')

@section('title', 'Administrator')

@section('content')
<div class="col-md-12 contents">
    <div class="col-md-12 content-row">
        <div class="col-md-12 content-item">
            <h1>List of Students</h1>
        </div>
    </div>
    <div class="col-md-12 content-row">
      @foreach($query as $row)
        <div class="col-md-4 content-row">
               <div class="col-md-12 content-item">
               <a ><h4><i class="fa fa-ellipsis-v pull-right"></i></h4></a>
            <h1><i class="fa fa-file" id="fon" aria-hidden="true"></i></h1><hr/>
           <a href="/head/eval/{{$row->deg_name}}"><h4>{{$row->deg_desc}}</h4></a>
        </div>
        </div>
            @endforeach 
    </div>
</div>
    @stop






