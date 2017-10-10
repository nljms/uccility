@extends('layouts.admin')

@section('title', 'Dashboard')
    
@section('content')
<div class="col-md-12 contents">
    <div class="col-md-12 content-tiles">
        <div class="col-md-3 content-row">
            <div class="col-md-12 content-item">
                <h3>Users</h3>
                <hr>
                <h1><i class="icon-uccility-id" style="font-size: 45px;"></i> 3476</h1>
                <hr>
                <p>Current Overall Total of Users...</p>
            </div>
        </div>
        <div class="col-md-9 content-wrapper">
            <div class="col-md-12 content-item">
                <div class="col-md-4">
                    <h3>Students <span class="badge bg-orange">New 32</span></h3><hr>
                    <h1><i class="icon-uccility-student"></i> 65%</h1><hr>
                    <p>2259 Students...</p>
                </div>
                <div class="col-md-4 bordered">
                    <h3>Professors <span class="badge bg-orange">New 13</span></h3><hr>
                    <h1><i class="icon-uccility-professor"></i> 25%</h1><hr>
                    <p>869 Professors...</p>
                </div>
                <div class="col-md-4">
                    <h3>Others </h3><hr>
                    <h1><i class="icon-uccility-id" style="font-size: 45px;"></i> 10%</h1><hr>
                    <p>348 Other university employees...</p>
                </div>
            </div>
        </div>
        
    </div>
    <div class="col-md-9 content-row">
        <div class="col-md-12 content-item">
            <h3>Enrollment Data from the Past Semester</h3><hr />
            <canvas id="line-chart" class="charts"></canvas>
        </div>
    </div>
    <div class="col-md-3 content-row">
        <div class="col-md-12 content-item">
            <h4>Summary</h4>
            <p>From Congress: 1024 <span class="badge bg-orange">High</span></p>
            <p>From Camarin: 512 <span class="badge bg-purple">Low</span></p>
            <p>From Main: 256 <span class="badge bg-orange">High</span></p>
            <p>Regular Students: 128 <span class="badge bg-purple">Low</span></p>
            <p>Transferees: 64 <span class="badge bg-orange">High</span></p>
            <p>Fresh Man: 32 <span class="badge bg-purple">Low</span></p>
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