@extends('layouts.admin')

@section('title', 'Dashboard')
    
@section('content')
<div class="col-md-12 contents">
    <div class="col-md-12 content-tiles">
        <div class="col-md-3 content-row">
            <div class="col-md-12 content-item">
                <h3>Users</h3>
                <hr>
                <h1><i class="fa fa-users"></i> 3476</h1>
                <hr>
                <p>Current Overall Total of Users...</p>
            </div>
        </div>
        <div class="col-md-9 content-wrapper">
            <div class="col-md-12 content-item">
                <div class="col-md-4">
                    <h3>Students <span class="badge bg-orange">New 32</span></h3><hr>
                    <h1><i class="fa fa-graduation-cap"></i> 65%</h1><hr>
                    <p>2259 Students...</p>
                </div>
                <div class="col-md-4 bordered">
                    <h3>Professors <span class="badge bg-orange">New 13</span></h3><hr>
                    <h1><i class="fa fa-user-circle-o"></i> 25%</h1><hr>
                    <p>869 Professors...</p>
                </div>
                <div class="col-md-4">
                    <h3>Others </h3><hr>
                    <h1><i class="fa fa-id-badge"></i> 10%</h1><hr>
                    <p>348 Other university employees...</p>
                </div>
            </div>
        </div>
        
    </div>
    <div class="col-md-9 content-row">
        <div class="col-md-12 content-item">
            <h3>A Line Graph About Something</h3><hr />
            <canvas id="line-chart" class="charts"></canvas>
        </div>
    </div>
    <div class="col-md-3 content-row">
        <div class="col-md-12 content-item">
            <h4>A Summary of this Line Graph</h4>
            <p>Some Statistics: 1024 <span class="badge bg-orange">High</span></p>
            <p>Some Statistics: 512 <span class="badge bg-purple">Low</span></p>
            <p>Some Statistics: 256 <span class="badge bg-orange">High</span></p>
            <p>Some Statistics: 128 <span class="badge bg-purple">Low</span></p>
            <p>Some Statistics: 64 <span class="badge bg-orange">High</span></p>
            <p>Some Statistics: 32 <span class="badge bg-purple">Low</span></p>
            <p>Some Statistics: 16 <span class="badge bg-orange">2017</span></p>
        </div>
    </div>
    <div class="col-md-3 content-row">
        <div class="col-md-12 content-item">
            <h4>A Summary of this Line Graph</h4>
            <p>Some Statistics: 1024 <span class="badge bg-orange">Highest</span></p>
            <p>Some Statistics: 512 <span class="badge bg-orange">Average</span></p>
            <p>Some Statistics: 256 <span class="badge bg-orange">Lowest</span></p>
            <p>Output <span class="badge bg-orange">Nothing</span></p>
        </div>
    </div>
</div>

@endsection