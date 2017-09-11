@extends('layouts.admin')

@section('title', 'Administration')
    
@section('content')
<div class="col-md-12 contents">
    <div class="col-md-12 content-tiles">
        <div class="col-md-3 content-row">
            <div class="col-md-12 content-item">
                <h3>Users</h3><hr>
                <h1><i class="fa fa-users"></i> 3476</h1><hr>
                <p>Current Overall Total of Users...</p>
                <h3>New Users</h3><hr>
                <h1><i class="fa fa-users"></i> 271</h1><hr>
                <p>New Students and Professors...</p>
            </div>
        </div>
        <div class="col-md-9 content-wrapper">
            <div class="col-md-12 content-item">
                <div class="col-md-6">
                <h3>User Composition</h3>
                    <canvas id="piechart-users"></canvas><br>
                    <p>Students: 12023 | Professors: 3812 | Others: 761</p>
                </div>
                <div class="col-md-6">
                <h3>User Distribution</h3>
                    <canvas id="piechart-distribute"></canvas><br>
                    <p>Students: 8112 | Professors: 4112 | Others: 3121</p>
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