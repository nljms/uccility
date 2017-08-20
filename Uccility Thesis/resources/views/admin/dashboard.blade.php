@extends('layouts.admin')

@section('title', 'Administration')

@section('content')
<div class="col-md-12 contents">
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
    <div class="col-md-12 content-tiles">
        <div class="col-md-3 content-row">
            <div class="col-md-12 content-item">
                <h1>Dashboard Contents</h1>
                <p>Put your dashboard contents here.</p>
            </div>
        </div>
        <div class="col-md-3 content-row">
            <div class="col-md-12 content-item">
                <h1>Dashboard Contents</h1>
                <p>Put your dashboard contents here.</p>
            </div>
        </div>
        <div class="col-md-3 content-row">
            <div class="col-md-12 content-item">
                <h1>Dashboard Contents</h1>
                <p>Put your dashboard contents here.</p>
            </div>
        </div>
        <div class="col-md-3 content-row">
            <div class="col-md-12 content-item">
                <h1>Dashboard Contents</h1>
                <p>Put your dashboard contents here.</p>
            </div>
        </div>
    </div>
</div>

@endsection