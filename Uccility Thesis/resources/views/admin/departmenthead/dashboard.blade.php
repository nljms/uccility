@extends('layouts.admin')

@section('title', 'Administration')
    
@section('content')
<div class="col-md-12 contents">
    <div class="col-md-12 content-tiles">
        <div class="col-md-3 content-row">
            <div class="col-md-12 content-item">
                <h3>Users</h3>
                <hr>
                <h1><i class="icon-uccility-id"></i> 3476</h1>
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
</div>

@endsection