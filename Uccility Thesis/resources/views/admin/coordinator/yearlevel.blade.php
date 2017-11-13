@extends('layouts.coor')

@section('title', 'Coordinator')

@section('content')
<div class="col-md-12 contents">
    <div class="col-md-12 content-row">
        <div class="col-md-12 content-item">
            <h1>Year Level</h1>
        </div>
    </div>
    <div class="col-md-12 content-row">
      @foreach($queries as $row)
        <div class="col-md-4 content-row">
               <div class="col-md-12 content-item">
               <a ><h4><i class="fa fa-ellipsis-v pull-right"></i></h4></a>
            <h1><i class="icon-uccility-file" style="font-size:250%"></i></h1><hr/>
           <a href="/coor/eval/degree/{{$row->year_levels}}/{{$id}}"><h4>{{$id." ".$row->year_levels." Year Students"}}</h4></a>
        </div>
        </div>
            @endforeach
    </div>
</div>
    @stop
