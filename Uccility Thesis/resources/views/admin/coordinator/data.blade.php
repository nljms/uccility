@extends('layouts.coor')

@section('title', 'Coordinator')

@section('content')
<div class="col-md-12 contents">
    <div class="col-md-12 content-row">
        <div class="col-md-12 content-item">
            <h1>Dashboard</h1><hr>
            <div class="col-md-4 content-row">
                <div class="col-md-12 content-item bordered-o">
                    <h2>Total Students <i class="fa fa-users"></i></h2><hr>
                    <h1>16783</h1><hr>
                    <p>Overall number of Students...</p>
                </div>
            </div>
            <div class="col-md-4 content-row">
                <div class="col-md-12 content-item bordered-p">
                    <h2>Regular Students <i class="fa fa-users"></i></h2><hr>
                    <h1>12783</h1><hr>
                    <p>Last Update: August 26, 2017 8:52 PM</p>
                </div>
            </div>
            <div class="col-md-4 content-row">
                <div class="col-md-12 content-item bordered-p">
                    <h2>Irregular Students <i class="fa fa-users"></i></h2><hr>
                    <h1>75</h1><hr>
                    <p>This Week | Last Week | Last Two Weeks</p>
                </div>
            </div>
            <div class="col-md-4 content-row">
                <div class="col-md-12 content-item">
                    <h2>Variation <i class="fa fa-users"></i></h2><hr>
                    <canvas id="piechart-users"></canvas>
                </div>
            </div>
            <div class="col-md-4 content-row">
                <div class="col-md-12 content-item">
                    <h2>Campus <i class="fa fa-users"></i></h2><hr>
                    <canvas id="piechart-distribute"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection