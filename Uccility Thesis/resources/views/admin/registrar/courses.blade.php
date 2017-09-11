@extends('layouts.admin')

@section('title', 'Administration')
    
@section('content')
<div class="col-md-12 contents">
    <div class="col-md-12 content-tiles">
        @foreach($courses as $course)
        <a href="/admin/registrar/records/college-of-liberal-arts-and-sciences/bscs">
        <div class="col-md-3 content-row">
            <div class="col-md-12 content-item">
                <h4><i class="fa fa-ellipsis-v pull-right"></i></h4>
                <h1 class="file-logo"><i class="fa fa-file"></i></h1>
                <h4>{{ $course }}</h4>
            </div>
        </div>
        </a>
        @endforeach
    </div>
</div>

@endsection