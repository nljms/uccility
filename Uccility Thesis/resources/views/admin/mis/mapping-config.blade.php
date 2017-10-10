@extends('layouts.admin')

@section('title', '2D Mapping Configuration')
    
@section('content')
<div class="col-md-12 contents">
    <div class="col-md-12 content-tiles">
        <div class="col-md-3 content-row">
            <div class="col-md-12 content-item">
                <h3>Data</h3><hr>
                <h1><i class="icon-uccility-file" style="font-size: 45px;"></i> 4</h1><hr>
                <p>Base 2D Map Data...</p>

                <h1><i class="icon-uccility-file" style="font-size: 45px;"></i> 4</h1><hr>
                <p>Base 2D Map Data...</p>

                <h1><i class="icon-uccility-file" style="font-size: 45px;"></i> 4</h1><hr>
                <p>Base 2D Map Data...</p>
            </div>
        </div>
        <div class="col-md-9 content-row">
            <div class="col-md-12 content-item">
                <br>
                <button class="btn btn-primary btn-o"><i class="fa fa-pencil"></i> New Data</button>
                <button class="btn btn-primary btn-o"><i class="icon-uccility-file"></i> Manage</button><hr>
                <div class="col-md-8 2d-view">
                    <img src="{{ asset('img/street-map.png') }}" alt="2d_mapping" class="img-responsive img-thumbnail">
                </div>
                <div class="col-md-4 2d-desc">
                    <h3>2D Mapping</h3>
                    <h4>Summary</h4>
                    <p>Rooms <span class="badge bg-orange">53</span></p>
                    <p>Elavators <span class="badge bg-orange">2</span></p>
                    <p>Canteens <span class="badge bg-orange">1</span></p>
                    <p>Offices <span class="badge bg-orange">12</span></p>
                </div>
            </div>
        </div>
    </div>  
</div>

@endsection